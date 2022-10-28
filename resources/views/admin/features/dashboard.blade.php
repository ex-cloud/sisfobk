@extends('admin.layouts.app')
@section('content')
    <div class="w-full">
        <!-- Top Content -->
        <div class="flex justify-between">
            <div class= "">
                <div class="font-semibold tracking-wide cursor-default text-6-1/2xl header text-tosca-300">
                    {{ $title }}
                </div>
                <div class="mb-2 font-semibold tracking-wider cursor-default sub-header text-gray-350">
                    Counseling Guidance Menu 
                    <hr class="absolute mt-2 w-121">
                </div>
            </div>
            <!-- Button Top -->
            <div class="flex items-center">
                <!-- Calendar -->
                <div class="h-11 w-40 bg-orange-100 box-border border-orange-300 border text-center py-2 text-white font-semibold text-md rounded-xl hover:cursor-default">
                    <div id="date-time">
                    </div> 
                </div>
                <!-- Filter menu -->
                <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="h-11 w-48 ml-3 text-tosca-300 bg-white border-2 border-gray-300 rounded-xl hover:bg-gray-100 font-medium px-3 py-2.5 text-center inline-flex items-center duration-200 capitalize" type="button">
                    <img src="{{ asset('user-tosca.png') }}" class="w-8 h-8 p-1 mr-3 bg-gray-100 border border-gray-300 rounded-xl" alt="">
                    <span class="ml-2 font-medium">
                        {{ auth()->user()->username }}
                    </span>
                </button>
            </div>
        </div>
        <!-- /Top Content -->

        <!-- Bottom Content Wrapper -->
        <div class="flex justify-between">
            <!-- Bottom Left Content -->
            <div class="w-full">
                <ul class="mt-10 ">
                    <li>
                        <a href="../features/siswa" class="box-border inline-flex h-24 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-full lg:w-116 rounded-2xl hover:bg-gray-100">
                            <img src="{{ asset('Name.svg') }}" class="my-auto ml-4 w-14 h-14">
                            <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Daftar Siswa</span>
                            <span class="absolute text-sm ml-23 my-13 text-gray-350">SMKN 6 Bandung</span>
                        </a>
                    </li>
                    <li>
                        <a href="../features/jurnal" class="box-border inline-flex h-24 mt-5 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-116 rounded-2xl hover:bg-gray-100">
                            <img src="{{ asset('Book.svg') }}" class="my-auto ml-4 w-14 h-14">
                            <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Jurnal Harian</span>
                            <span class="absolute text-sm ml-23 my-13 text-gray-350">Bimbingan Konseling</span>
                        </a>
                    </li>
                    <li>
                        <a href="../features/visit" class="box-border inline-flex h-24 mt-5 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-116 rounded-2xl hover:bg-gray-100">
                            <img src="{{ asset('Home-Page.svg') }}" class="my-auto ml-4 w-14 h-14">
                            <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Kunjungan Rumah</span>
                            <span class="absolute text-sm ml-23 my-13 text-gray-350">Siswa SMKN 6 Bandung</span>
                        </a>
                    </li>
                    <li>
                        <a href="../features/individual" class="box-border inline-flex h-24 mt-5 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-116 rounded-2xl hover:bg-gray-100">
                            <img src="{{ asset('Confusion.svg') }}" class="my-auto ml-4 w-14 h-14">
                            <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Konseling Individu</span>
                            <span class="absolute text-sm ml-23 my-13 text-gray-350">Siswa SMKN 6 Bandung</span>
                        </a>
                    </li>
                    <li>
                        <a href="../features/group" class="box-border inline-flex h-24 mt-5 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-116 rounded-2xl hover:bg-gray-100">
                            <img src="{{ asset('Management.svg') }}" class="my-auto ml-4 w-14 h-14">
                            <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Konseling Kelompok</span>
                            <span class="absolute text-sm ml-23 my-13 text-gray-350">Siswa SMKN 6 Bandung</span>
                        </a>
                    </li>
                    <li>
                        <a href="../features/cases" class="box-border inline-flex h-24 mt-5 duration-200 bg-white border border-gray-300 shadow-md cursor-pointer w-116 rounded-2xl hover:bg-gray-100">
                            <img src="{{ asset('No-Entry.svg') }}" class="my-auto ml-4 w-14 h-14">
                            <span class="absolute my-5 text-xl font-bold tracking-wide ml-23 text-black-50">Daftar Kasus</span>
                            <span class="absolute text-sm ml-23 my-13 text-gray-350">Siswa SMKN 6 Bandung</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Bottom Right Content -->
            <div class="">
                <!-- Report Box -->
                <div class="border-2 border-gray-300 rounded-lg h-72 bg-white">
                    <div class="py-5 px-5">
                        <span class="text-2xl font-semibold tracking-wider cursor-default text-black-50">Report Percentage</span>
                        <hr class="mt-3">
                    </div>
                    <div class="flex justify-around report-box-wrap place-content-center">
                        <div class="pl-4 bg-orange-100 border border-orange-300 rounded-lg shadow-md left-box w-68 h-39">
                            <div class="mt-4 text-xl font-bold tracking-wide text-white">Jumlah Siswa</div>
                            <span class="text-sm font-medium text-white">SMKN 6 Bandung</span>
                            <div class="float-right mt-5 mr-5 text-center bg-white rounded-full cursor-default w-18 h-18">
                                <div class="py-5 font-sans text-2xl font-semibold text-black-50">{{ $jml_siswa }}</div> 
                            </div>
                        </div>
                        <div class="pl-4 text-white border rounded-lg shadow-md right-box w-68 h-39 bg-tosca-300 border-tosca-400">
                            <div class="mt-4 text-md font-bold tracking-wide text-white">Jumlah Siswa Dengan Kasus</div>
                            <span class="text-sm font-medium text-white">SMKN 6 Bandung</span>
                            <div class="float-right mt-6 mr-5 text-center bg-white rounded-full cursor-default w-18 h-18">
                                <div class="py-5 font-sans text-2xl font-semibold text-black-50">{{ $jml_cases }}</div> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chart Container -->
                <div class="float-right mt-8 px-5 border-2 border-gray-300 rounded-lg chart w-157 h-121 bg-white mb-10">
                    <div class="flex justify-between pt-8">
                        <span class="text-2xl font-semibold tracking-wider cursor-default text-black-50">Counseling Chart</span>
                        {{-- <button id="filterChart" data-dropdown-toggle="filter" class="inline-flex items-center px-4 text-center duration-200 bg-white border-2 border-gray-300 h-9 w-38 text-tosca-300 rounded-xl hover:bg-gray-100" type="button">
                            <span class="text-sm">
                                1-6 Month
                            </span>
                            <svg class="w-4 h-4 ml-8" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="filter" class="z-10 hidden bg-white divide-y divide-gray-100 shadow h-9 w-38 rounded-xl" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(327px, 70px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                            <ul class="py-1 duration-200 rounded-xl hover:bg-gray-100" aria-labelledby="filterChart">
                                <li>
                                    <a href="#" class="flex py-1 text-sm place-content-center text-tosca-300">
                                        <span>1-12 Month</span>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <!-- Chart -->
                    {{-- <div class="panel">
                        <div id="chart-dashboard">

                        </div>
                        
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection