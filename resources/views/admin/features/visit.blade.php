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
            <button class="box-border flex items-center h-11 font-semibold text-white duration-200 bg-orange-100 border border-orange-300 calendar w-50 rounded-4xl place-content-center shadow-sm hover:bg-orange-200" type="button" data-modal-toggle="tambah-modal">
                <img src="../../../../Plus.svg" class="w-5 h-5 mr-2"/>
                <span>Tambah Data</span>
            </button>
        </div>
    </div>
    <hr>
        <!-- Bottom Content -->
        <div class="flex justify-between my-4">
            <!-- Search Content -->
            <div class="">
                <!-- Search Content -->
                <form action="{{ route('visit.index') }}" method="GET">
                    <div class= "">
                        <input type="search" name="search" id="search" value="{{ request('search') }}" onclick="this.value=''" class="h-12 text-lg font-medium border-2 border-gray-300 shadow-sm rounded-2xl w-100 focus:ring-0 focus:ring-orange-100 focus:border-orange-100 placeholder:text-gray-300" placeholder="Cari siswa">
                        <button class="absolute w-16 h-12 -ml-16 duration-200 bg-orange-100 rounded-r-2xl hover:bg-orange-200">
                            <img src="../../../../Search.svg" alt="" class="mx-auto">
                        </button>
                    </div>
                </form>
            </div>   
            <!-- Filter Content -->
            <div class="filter-container flex">
                <!-- Filter Kelas -->
                <div class="filter-class">
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="inline-flex items-center h-10 ml-3 font-medium text-gray-400 duration-200 bg-white border-2 border-gray-300 shadow-sm justify-evenly w-33 rounded-xl hover:bg-gray-100 place-content-center" type="button">
                        <span class="ml-2 mr-6">
                            Kelas
                        </span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Filter menu class -->
                    <div id="dropdown" class="z-10 hidden" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(327px, 70px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        <ul aria-labelledby="dropdownDefault">
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-33 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    Kelas 10
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-33 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    Kelas 11
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-33 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    Kelas 12
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-33 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    Semua
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="filter-major">
                    <button id="dropdownMajor" data-dropdown-toggle="dropdown-major" class="inline-flex items-center h-10 ml-3 font-medium text-gray-400 duration-200 bg-white border-2 border-gray-300 shadow-sm justify-evenly w-40 rounded-xl hover:bg-gray-100 place-content-center" type="button">
                        <span class="ml-2 mr-6">
                            Jurusan
                        </span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Filter menu major -->
                    <div id="dropdown-major" class="z-10 hidden" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(327px, 70px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        <ul aria-labelledby="dropdownMajor">
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    DPIB
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    Pengelasan
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    TAV
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    TITL
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    TKRO
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex px-4 py-1 text-gray-400 border-2 border-gray-300 h-10 w-40 rounded-xl font-medium place-content-center hover:bg-gray-100 duration-200">
                                    TPM
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table content -->
        <div class="">
            <section class="container mx-auto font-sans">
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                    <th class="px-4 py-3 text-center">No</th>
                                    <th class="px-4 py-3 text-center">
                                        Nis
                                    </th>
                                    <th class="px-4 py-3 text-center">
                                        <div class="flex items-center justify-center">
                                            Nama Siswa Terlibat
                                        </div>
                                    </th>
                                    <th class="px-4 py-3 text-center">
                                        Kelas
                                    </th>
                                    <th class="px-4 py-3 text-center">
                                        Jurusan
                                    </th>
                                    <th class="px-4 py-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @php
                                    $id = 1;
                                @endphp
                                    @foreach ($dtvisit as $visit)
                                    <tr class="text-gray-700 text-xs">
                                        <td class="px-4 py-3 border text-center">
                                            {{ $id++ }}
                                        </td>
                                        <td class="px-4 py-3 font-semibold border text-center capitalize" >
                                            {{ $visit->siswa->nis}}
                                        </td>
                                        <td class="px-4 py-3 font-semibold border text-center capitalize" >
                                            {{ $visit->siswa->nama}}
                                        </td>
                                        <td class="px-4 py-3 font-semibold border text-center capitalize" >
                                            {{ $visit->siswa->kelas}}
                                        </td>
                                        <td class="px-4 py-3 font-semibold border text-center capitalize" >
                                            {{ $visit->siswa->jurusan}}
                                        </td>
                                        <td class="px-4 py-3 border text-center">
                                            <div class="flex justify-center ">
                                                <button onclick="forEditVisit(this, event)" value="{{ $visit->id }}" class="w-7 h-7 bg-yellow-200 border-yellow-400 border p-1 rounded-md mx-1 hover:bg-yellow-300 duration-200" type="button">
                                                    <img src="../../../../edit.svg" alt="">
                                                </button>
                                                <button onclick="forDetailVisit(this, event)" value="{{ $visit->id }}" class="w-7 h-7 bg-green-200 border-green-400 border p-1 rounded-md mx-1 hover:bg-green-500 duration-200" type="button">
                                                    <img src="../../../../About.svg" alt="">
                                                </button>
                                                <button onclick="forDestroyVisit(this, event)" value="{{ $visit->id }}" class="w-7 h-7 bg-red-200 border-red-400 border p-1 rounded-md mx-1 hover:bg-red-600 duration-200" type="button">
                                                    <img src="../../../../Trash.svg" alt="">
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        @if ($dtvisit->count() == 0)
                        <div class="text-gray-500 text-sm text-center my-2">
                            <span>
                                Tidak ada data kunjungan
                            </span>
                        </div>
                        @endif
                        <div class="my-5 mx-5">
                                {{ $dtvisit->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Modal content -->
                <!-- Main modal tambah -->
                <div id="tambah-modal" tabindex="-1" class="hidden overflow-y-scroll overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center mt-10" aria-modal="true" role="dialog">
                    <div class="relative p-4 w-full max-w-fit h-full overflow-y-scroll mt-20 mb-20  md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-2xl h-200 shadow w-200 overflow-y-scroll">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="tambah-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-1 mt-5 text-center text-4xl font-semibold text-tosca-300 tracking-wider">Kunjungan Rumah</h3>
                                <h6 class="mb-4 text-center text-xs font-semibold text-gray-400 tracking-wider">Bimbingan Konseling SMK Negeri 6 Bandung</h6>
                                <hr>
                                <form class="space-y-6 my-5" action="{{ route('visit.store.visit') }}" method="POST">
                                    @csrf
                                    <div class="mx-4 mb-5">
                                        <label for="id_siswa" class="text-xs text-gray-400">Pilih Siswa</label>
                                        <div class="my-3">
                                            <select id="id_siswa" name="id_siswa" class="select2 bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-180 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200">
                                                <option disabled selected>Pilih</option>
                                                @foreach ($siswas as $siswa )
                                                    <option value="{{  $siswa->id }}">{{  $siswa->nama ." - ". $siswa->nis  }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="flex justify-between">
                                            <div>
                                                <label for="bidang_layanan" class="text-xs text-gray-400">Bidang Layanan :</label>
                                                <input type="text" name="bidang_layanan" id="bidang_layanan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                            </div>
                                            <div>
                                                <label for="fungsi_layanan" class="text-xs text-gray-400">Fungsi Layanan :</label>
                                                <input type="text" name="fungsi_layanan" id="fungsi_layanan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                            </div>
                                        </div>
                                        <label for="topik" class="text-xs text-gray-400">Topik/ Permasalahan :</label>
                                        <input type="text" name="topik" id="topik" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                        <label for="tujuan_kegiatan" class="text-xs text-gray-400">Tujuan Kegiatan :</label>
                                        <textarea type="text" name="tujuan_kegiatan" id="tujuan_kegiatan" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                        <label for="gambaran" class="text-xs text-gray-400">Gambaran Ringkasan Masalah :</label>
                                        <textarea type="text" name="gambaran" id="gambaran" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                        <label for="alamat" class="text-xs text-gray-400">Alamat Kunjungan :</label>
                                        <input type="text" name="alamat" id="alamat" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </input>
                                        <label for="tanggal" class="text-xs text-gray-400">Tanggal :</label>
                                        <input type="date" name="tanggal" id="tanggal" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </input>
                                        <label for="lama_kunjungan" class="text-xs text-gray-400">Lama kunjungan :</label>
                                        <input type="text" name="lama_kunjungan" id="lama_kunjungan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </input>
                                        <label for="anggota_keluarga" class="text-xs text-gray-400">Anggota keluarga yang dikunjungi :</label>
                                        <input type="text" name="anggota_keluarga" id="anggota_keluarga" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </input>
                                        <label for="evaluasi" class="text-xs text-gray-400">Rencana Evaluasi :</label>
                                        <textarea type="text" name="evaluasi" id="evaluasi" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                        <label for="tindak_lanjut" class="text-xs text-gray-400">Tindak Lanjut :</label>
                                        <textarea type="text" name="tindak_lanjut" id="tindak_lanjut" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                        <label for="catatan" class="text-xs text-gray-400">Catatan Khusus :</label>
                                        <textarea type="text" name="catatan" id="catatan" class="input bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-full h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required=""> </textarea>
                                    </div>
                                    <div class="flex mx-4 mb-5 justify-between">
                                        <div class="">
                                            <label for="guru" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
                                            <input type="text" name="guru" id="guru" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-10 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200" required="">
                                        </div>
                                        <div class="pt-7">
                                            <button type="submit" class="w-32 h-10 text-white bg-orange-300 hover:bg-orange-200 focus:ring-1 focus:outline-none focus:ring-orange-300 font-medium rounded-xl text-sm px-5 py-2.5 text-center">Simpan Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
    
                <!-- Main modal edit -->
                <div id="edit-modal" tabindex="-1" class="hidden overflow-y-scroll overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center mt-10" aria-modal="true" role="dialog">
                    <div class="relative p-4 w-full max-w-fit h-full overflow-y-scroll mt-20 mb-20  md:h-auto">
                        <div class="relative bg-white rounded-2xl h-200 shadow w-200 overflow-y-scroll">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-1 mt-5 text-center text-4xl font-semibold text-tosca-300 tracking-wider">Edit Kunjungan Rumah</h3>
                                <h6 class="mb-4 text-center text-xs font-semibold text-gray-400 tracking-wider">Bimbingan Konseling SMK Negeri 6 Bandung</h6>
                                <hr>
                                <div id="detail-visit"></div>
                            </div>
                        </div>
                    </div>
                </div> 

                <!-- Main modal detail -->
                <div id="detail-modal" tabindex="-1" class="hidden overflow-y-scroll overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center mt-10" aria-modal="true" role="dialog">
                    <div class="relative p-4 w-full max-w-fit h-full overflow-y-scroll mt-20 mb-20  md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-2xl h-200 shadow w-200 overflow-y-scroll">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="detail-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-1 mt-5 text-center text-4xl font-semibold text-tosca-300 tracking-wider">Detail Kunjungan Rumah</h3>
                                <h6 class="mb-4 text-center text-xs font-semibold text-gray-400 tracking-wider">Bimbingan Konseling SMK Negeri 6 Bandung</h6>
                                <hr>
                                <div id="show-visit"></div>
                            </div>
                        </div>
                    </div>
                </div> 
    
                <!-- Main modal delete -->
                <div id="delete-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="delete-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">
                                <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menghapus nya?</h3>
                                <button data-modal-toggle="delete-modal" type="button" class="text-white bg-tosca-300 hover:bg-tosca-200 focus:ring-4 focus:outline-none focus:ring-tosca-300 font-medium rounded-3xl text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Ya, saya yakin
                                </button>
                                <button data-modal-toggle="delete-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-3xl border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tidak, batalkan</button>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
