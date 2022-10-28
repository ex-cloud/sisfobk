@extends('layouts.main')
@section('content')

<div class="flex w-full h-full justify-between bg-white">
    <div class="bg-tosca-300 w-1/2 place-items-center h-screen">
        <img src="../../../self.svg" alt="" class="mx-auto my-38.5">
    </div>
    <div class="bg-white w-1/2">
        <form action="/auth/login" method="POST">
            @csrf
            <div class="pt-10">
                <div class="text-center mx-auto" id="wrapper">
                    <h1 class="text text-tosca-300 text-5xl antialiased font-sans font-bold mt-20">
                        Login
                    </h1>
                    <div class="text text-gray-400 mt-10 font-thin tracking-widest text-xs">
                        Hello friends! Iam a counseling guidance<br> 
                        You can trust everything, Let’s get in touch!
                    </div>
                    <div class="mt-14">
                        <input required type="text" name="username" id="username" class="w-1/2 h-12 p-6 border-none bg-gray-100 rounded-full tracking-wider text-xs text-gray-400 font-light focus:outline-none focus:ring focus:ring-tosca-300 focus:border-tosca-300 transition duration-500 placeholder:text-gray-400 hover:bg-gray-200" placeholder="USERNAME">
                    </div>
                    <div class="mt-6">
                        <input required type="password" name="password" id="password" class="w-1/2 h-12 p-6 border-none bg-gray-100 rounded-full tracking-wider text-xs text-gray-400 font-light focus:outline-none focus:ring focus:ring-tosca-300 focus:border-tosca-300 transition duration-500 placeholder:text-gray-400 hover:bg-gray-200" placeholder="PASSWORD">
                    </div>
                    <div class="mt-14 ">
                        <button class="w-1/2 h-12 p-6 rounded-full tracking-wide py-2 text-white bg-orange-100 font-sans font-semibold hover:bg-orange-200 duration-500">
                            Let's Start!
                        </button>
                    </div>
                    <div class="flex place-content-center mt-10">
                        <div class="w-12 h-12 bg-peach-100 mx-4 rounded-full">
                            <a href="#">
                                <img class="px-2.5 py-2.5" src="WhatsApp.svg"/>
                            </a>
                        </div>
                        <div class="w-12 h-12 bg-cream-100 mx-4 rounded-full">
                            <a href="#">
                                <img class="px-2.5 py-2.5" src="../../../Mail.svg"/>
                            </a>
                        </div>
                        <div class="w-12 h-12 bg-tosca-200 mx-4 rounded-full">
                            <a href="#">
                                <img class="px-2.5 py-2.5" src="../../../Instagram.svg"/>
                            </a>
                        </div>
                    </div>
                    <div class="mt-8 text-gray-600 font-light tracking-wide text-sm">
                        Don’t have an account? <a href="/auth/registration" class="text-cyan-300 font-reguler hover:text-cyan-500 duration-200">Sign Up</a> 
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection