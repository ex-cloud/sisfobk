@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper -->
<div class="w-full">
    <!-- Top Content-->
    <div class="flex justify-between">
        <div class="mb-5">
            <!-- Header -->
            <div class=" relative font-semibold tracking-normal cursor-default text-6-1/2xl text-tosca-300">
                {{ $title }}
            </div>
            <!-- Sub-header -->
            <div class="mb-2 font-semibold tracking-wider cursor-default text-gray-350">
                SMK Negeri 6 Bandung
            </div>
        </div>
        <!-- Modal toggle tambah-->
        <div class="mt-10">
            <button class="box-border flex items-center h-11 font-semibold text-white duration-200 bg-orange-100 border border-orange-300 calendar w-50 rounded-4xl place-content-center shadow-sm hover:bg-orange-200" type="button" data-modal-toggle="add-modal">
                <img src="../../../../Plus.svg" class="w-5 h-5 mr-2"/>
                <span>Tambah Data</span>
            </button>
        </div>
    </div>
    <hr>
    <!-- /Top Content -->

    <!-- Bottom Content -->
    <div class="my-10">            
        <!-- Table content -->
        <div class="table-container">
            <section class="container mx-auto font-sans">
                <div class="w-full mb-8 rounded-lg shadow-lg">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3 text-center">No</th>
                                <th class="px-4 py-3 text-center">Tanggal Kegiatan</th>
                                <th class="px-4 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        Sasaran Kegiatan
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        Kegiatan Layanan
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        Hasil yang Dicapai
                                    </div>
                                </th>
                                <th class="px-4 py-3 text-center">Guru Pembimbing</th>
                                <th class="px-4 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @php
                                $id = 1;
                            @endphp
                                @foreach ($dtjurnal as $jurnal)
                                    <tr class="text-gray-700 text-xs">
                                        <td class="px-4 py-3 border text-center">
                                            {{ $id++ }}
                                        </td>
                                        <td class="px-4 py-3 border text-center">
                                            {{ $jurnal->tanggal }}
                                        </td>
                                        <td class="px-4 py-3 border">{{ $jurnal->sasaran_kegiatan }}</td>
                                        <td class="px-4 py-3 border">{{ $jurnal->layanan_kegiatan }}</td>
                                        <td class="px-4 py-3 border">{{ $jurnal->hasil_kegiatan }}</td>
                                        <td class="px-4 py-3 border">{{ $jurnal->guru }}</td>
                                        <td class="px-4 py-3 border">
                                            <div class="flex justify-center ">
                                                <button onclick="forEditJurnal(this, event)"  value="{{ $jurnal->id }}" class="w-7 h-7 bg-yellow-200 border-yellow-400 border p-1 rounded-md mx-1 hover:bg-yellow-300 duration-200 cursor-pointer" type="button">
                                                    <img src="../../../../Edit.svg" alt="">
                                                </button>
                                                <button onclick="forDestroyJurnal(this, event)" value="{{ $jurnal->id }}" class="w-7 h-7 bg-red-200 border-red-400 border p-1 rounded-md mx-1 hover:bg-red-600 duration-200" type="button">
                                                    <img src="../../../../Trash.svg" alt="">
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                        </table>
                        @if ($dtjurnal->count() == 0)
                            <div class="text-gray-500 text-sm text-center my-2">
                                <span>
                                    Tidak ada data jurnal harian
                                </span>
                            </div>
                        @endif
                        <div class="my-5 mx-5">
                            {{ $dtjurnal->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Bottom Content -->
    
    <!-- Modal content -->

    <!-- Main modal tambah -->
        <div id="add-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center " aria-modal="true" role="dialog">
            <div class="relative bg-white h-150 rounded-lg shadow dark:bg-gray-700 overflow-y-scroll">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="add-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-1 mt-5 text-center text-4xl font-medium text-tosca-300 dark:text-white">Jurnal Harian</h3>
                    <h6 class="mb-4 text-center text-xs font-medium text-gray-400 dark:text-white">Bimbingan Konseling SMK Negeri 6 Bandung</h6>
                    <hr>
                    <form class="space-y-6 my-5" action="{{ route('jurnal.store.jurnal') }}" method="POST">
                        @csrf
                        <div class="mx-4 mb-5">
                            <label for="tanggal" class="text-xs text-gray-400">Tanggal Kegiatan :</label>
                                <input type="date" name="tanggal" id="tanggal" class="border border-gray-300 text-gray-900 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full p-2.5 px-4 my-3 rounded-xl hover:bg-gray-50">
                                <label for="sasaran_kegiatan" class="text-xs text-gray-400">Sasaran Kegiatan :</label>
                                <input type="text" name="sasaran_kegiatan" id="sasaran_kegiatan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                <label for="layanan_kegiatan" class="text-xs text-gray-400">Kegiatan Layanan :</label>
                                <textarea type="text" name="layanan_kegiatan" id="layanan_kegiatan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-35 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                <label for="hasil_kegiatan" class="text-xs text-gray-400">Hasil yang Dicapai :</label>
                                <textarea type="text" name="hasil_kegiatan" id="hasil_kegiatan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-35 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200 align-text-top" required=""> </textarea>
                                <div class="flex mb-5 justify-between w-full">
                                    <div class="mr-2">
                                        <label for="guru" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
                                        <input type="text" name="guru" id="guru" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full py-2.5 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                    </div>
                                    <div class="pt-7 ml-2">
                                        <button type="submit" class="w-full h-10 text-white bg-orange-300 hover:bg-orange-200 focus:ring-1 focus:outline-none focus:ring-orange-300 font-medium rounded-xl text-sm py-2.5 px-3 text-center">Simpan Data</button>
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div>

        <!-- Main modal edit -->
        <div id="edit-modal" tabindex="-1" class="modal-close hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center " aria-modal="true">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <div class="relative bg-white h-150 rounded-lg shadow overflow-y-scroll">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center ">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-1 mt-5 text-center text-2xl font-medium text-tosca-300 dark:text-white capitalize">Edit Data Jurnal Harian</h3>
                        <h6 class="mb-4 text-center text-xs font-medium text-gray-400 dark:text-white">SMK Negeri 6 Bandung</h6>
                        <hr>
                        <div id="detail-jurnal"></div>
                    </div>
                </div>
            </div>
        </div> 
</div>
@endsection