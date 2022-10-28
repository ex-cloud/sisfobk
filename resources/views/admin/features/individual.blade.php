@extends('admin.layouts.app')

@section('content')
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
                <form action="{{ route('individual.index') }}" method="GET">
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
        <div class="my-5">            
            <!-- Table content -->
            <div class="table-container">
                <section class="container mx-auto font-sans">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                    <th class="px-2 py-3 text-center">No</th>
                                    <th class="px-4 py-3 text-center">Tanggal</th>
                                    <th class="px-4 py-3 text-center">NIS</th>
                                    <th class="px-4 py-3 text-center">
                                        <div class="flex items-center justify-center">
                                            Nama Siswa
                                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512"><path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"/></svg></a>
                                        </div>
                                    </th>
                                    <th class="px-4 py-3 text-center">Kelas</th>
                                    <th class="px-4 py-3 text-center">Jurusan</th>
                                    <th class="px-4 py-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @php
                                    $id = 1;
                                @endphp
                                    @foreach ($dtindividu as $individu)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 border text-center">
                                                {{ $id++ }}
                                            </td>
                                            <td class="px-4 py-3 text-xs border text-center">
                                                {{ $individu->tanggal }}
                                            </td>
                                            <td class="px-4 py-3 text-xs border text-center font-semibold">
                                                {{ $individu->siswa->nis }}
                                            </td>
                                            <td class="px-4 py-3 text-xs border">
                                                <div class="flex items-center text-xs">
                                                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold text-black capitalize">{{ $individu->siswa->nama }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-xs border text-center">
                                                {{ $individu->siswa->kelas }}
                                            </td>
                                            <td class="px-4 py-3 text-xs border text-center">
                                                {{ $individu->siswa->jurusan->jurusan }}
                                            </td>
                                            <td class="px-4 py-3 text-sm border text-center">
                                                <div class="flex justify-center ">
                                                    <button onclick="forEditIndividual(this, event)" value="{{ $individu->id }}" class="w-7 h-7 bg-yellow-200 border-yellow-400 border p-1 rounded-md mx-1 hover:bg-yellow-300 duration-200" type="button">
                                                        <img src="../../../../edit.svg" alt="">
                                                    </button>
                                                    <button onclick="forDetailIndividual(this, event)" value="{{ $individu->id }}" class="w-7 h-7 bg-green-200 border-green-400 border p-1 rounded-md mx-1 hover:bg-green-500 duration-200" type="button">
                                                        <img src="../../../../About.svg" alt="">
                                                    </button>
                                                    <button onclick="forDestroyIndividual(this, event)" value="{{ $individu->id }}" class="w-7 h-7 bg-red-200 border-red-400 border p-1 rounded-md mx-1 hover:bg-red-600 duration-200" type="button">
                                                        <img src="../../../../Trash.svg" alt="">
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                            </table>
                            @if ($dtindividu->count() == 0)
                            <div class="text-gray-500 text-sm text-center my-2">
                                <span>
                                    Tidak ada data siswa
                                </span>
                            </div>
                            @endif
                            <div class="my-5 mx-5">
                                {{ $dtindividu->links('pagination::tailwind') }}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Modal content -->
            <!-- Main modal tambah -->
            <div id="tambah-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center " aria-modal="true" role="dialog">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white h-150 rounded-lg shadow dark:bg-gray-700 overflow-y-scroll">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="tambah-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-1 mt-5 text-center text-2xl font-medium text-tosca-300 dark:text-white">Tambah Data Konseling Individu</h3>
                            <h6 class="mb-4 text-center text-xs font-medium text-gray-400 dark:text-white">SMK Negeri 6 Bandung</h6>
                            <hr>
                            <form class="space-y-6 my-5" action="{{ route('individual.store.individual') }}" method="POST">
                                @csrf
                                <div class="mx-4 mb-5">
                                    <label for="id_siswa" class="text-xs text-gray-400">Pilih Siswa</label>
                                    <div class="my-3 block">
                                        <select id="id_siswa" name="id_siswa" class="select2 w-80">
                                            <option disabled selected>Pilih Siswa</option>
                                            @foreach ($siswas as $siswa )
                                                <option value="{{  $siswa->id }}">{{ "NIS : ". $siswa->nis ." Nama : ". $siswa->nama  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label for="tanggal" class="text-xs text-gray-400">Tanggal :</label>
                                    <input type="date" name="tanggal" id="tanggal" class="border border-gray-300 text-gray-500 sm:text-sm focus:ring-tosca-300 focus:border-tosca-300 block w-full pl-3 p-2.5 px-4 my-3 rounded-xl hover:bg-gray-50 cursor-default">
                                    <label for="pertemuan" class="text-xs text-gray-400">Pertemuan ke- :</label>
                                    <input type="number" name="pertemuan" id="pertemuan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200">
                                    <label for="waktu" class="text-xs text-gray-400">Waktu :</label>
                                    <input type="time" name="waktu" id="waktu" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200">
                                    <label for="tempat" class="text-xs text-gray-400">Tempat :</label>
                                    <input type="text" name="tempat" id="tempat" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200">
                                    <label for="pendekatan" class="text-xs text-gray-400">Pendekatan dan teknik konseling yang digunakan :</label>
                                    <textarea type="text" name="pendekatan" id="pendekatan" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200"> </textarea>
                                    <label for="hasil" class="text-xs text-gray-400">Hasil yang Dicapai :</label>
                                    <textarea type="text" name="hasil" id="hasil" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-80 h-20 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200"> </textarea>
                                </div>
                                <div class="flex mx-4 mb-5 justify-between">
                                    <div class="">
                                        <label for="guru" class="text-xs text-gray-400">Guru BK/ Konselor :</label>
                                        <input type="text" name="guru" id="guru" class="bg-white border border-gray-300 text-gray-500 text-sm rounded-xl focus:ring-tosca-300 focus:border-tosca-300 block w-40 py-2.5 px-4 my-3 font-light drop-shadow-sm hover:bg-gray-50 duration-200">
                                    </div>
                                    <div class="pt-7">
                                        <button type="submit" class="w-36 h-10 text-white bg-orange-300 hover:bg-orange-200 focus:ring-1 focus:outline-none focus:ring-orange-300 font-medium rounded-xl text-sm p-auto text-center border border-orange-100 duration-200">Simpan Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- Main modal edit -->
            <div id="edit-modal" tabindex="-1" class=" modal-close hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center " aria-modal="true" role="dialog">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white h-150 rounded-lg shadow dark:bg-gray-700 overflow-y-scroll">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-1 mt-5 text-center text-2xl font-medium text-tosca-300 dark:text-white">Edit Data Konseling Individu</h3>
                            <h6 class="mb-4 text-center text-xs font-medium text-gray-400 dark:text-white">SMK Negeri 6 Bandung</h6>
                            <hr>
                            <div id="detail-individu"></div>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- Main modal detail -->
            <div id="detail-modal" tabindex="-1" class=" modal-close hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center " aria-modal="true" role="dialog">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white h-150 rounded-lg shadow dark:bg-gray-700 overflow-y-scroll">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="detail-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-1 mt-5 text-center text-2xl font-medium text-tosca-300 dark:text-white">Detail Data Konseling Individu</h3>
                            <h6 class="mb-4 text-center text-xs font-medium text-gray-400 dark:text-white">SMK Negeri 6 Bandung</h6>
                            <hr>
                            <div id="show-individu"></div>
                        </div>
                    </div>
                </div>
            </div> 

            {{-- <!-- Main modal delete -->
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
            </div> --}}

</div>
@endsection