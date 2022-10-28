@extends('admin.layouts.app')

@section('content')
    <div class="w-full h-full pt-5">
        <div class="h-64 w-64 border-4 border-tosca-400 rounded-full mx-auto mt-5 bg-slate-100">
            {{-- <img src="../../../../User.png" class="h-64 w-64" alt=""> --}}
        </div>
        <div class="pt-10">
            <div class="" >
                <div class="mx-auto w-80">
                    <div class="my-5">
                        <label for="username" class="text-gray-400 text-sm tracking-wider font-medium"> Username</label>
                        <input disabled type="text" name="username" id="username" value="{{ auth()->user()->username }}" class="w-80 h-12 border-none line-4 tracking-wider text-sm text-gray-500 font-light">
                        <hr class="w-80 mx-auto" >
                    </div>
                    <div class="my-3 ">
                        <label for="email" class="text-gray-400 text-sm tracking-wider font-medium">Email</label>
                        <input disabled type="email" name="email" id="email" value="{{ auth()->user()->email }}" class="w-80 h-12 border-none line-4 tracking-wider text-sm text-gray-400 font-light">
                        <hr class="w-80 mx-auto">
                    {{-- </div>
                    <div class="my-3">
                        <label for="password" class="text-gray-400 text-sm tracking-wider font-medium">Password</label>
                        <input disabled type="password" name="password" id="password" {{ auth()->user()->password }} class="w-80 h-12 border-none line-4 tracking-wider text-sm text-gray-400 font-light">
                        <hr class="w-80 mx-auto">
                    </div> --}}
                    <div class="mt-14 ">
                        <button class="w-80 h-12 p-6 rounded-full tracking-wide py-2 text-white bg-orange-100 font-sans font-semibold hover:bg-orange-200 duration-500">
                            Edit Profile
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-tosca-300 text-white mx-auto text-center mt-24">
            <h3 class="capitalize text-xl py-3 tracking-wide font-semibold">SMK Negeri 6 Bandung</h3>
            <h6 class="capitalize text-sm pb-3">Jalan Soekarno-Hatta Komplek Riung Bandung RT 05 RW 10, Kelurahan Cisaranten Kidul, Kecamatan Gedebage, Kota Bandung</h6>
        </footer>
    </div>
@endsection