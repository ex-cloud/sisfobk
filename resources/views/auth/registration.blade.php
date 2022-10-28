@extends('layouts.main')
@section('content')

<div class="w-screen h-screen bg-white flex">
    <div class="bg-tosca-300 w-1/2 h-screen relative" id="image">
        <div class="py-40 px-28 absolute">
            <img class="" src="../Self-Love.png" alt="">
        </div>
    </div>
    <div class="w-1/2 h-screen">
        <form action="/auth/registration" method="POST">
            @csrf
            <div class="header-wrapper">
                <div class="text-center mx-auto" id="wrapper">
                    <header class="text text-tosca-300 text-5xl antialiased font-sans font-bold mt-20">
                        Create Account
                    </header>
                    <div class="text text-gray-400 mt-10 font-thin tracking-widest text-xs">
                        WELCOME! didn’t have any account?</br>
                        Let’s create new account
                    </div>
                    <div class="mt-14">
                        <input required type="text" name="username" id="username" class="w-1/2 h-12 p-6 border-none bg-gray-100 rounded-full tracking-wider text-xs text-gray-400 font-light focus:outline-none focus:ring focus:ring-tosca-300 focus:border-tosca-300 transition  placeholder:text-gray-400 hover:bg-gray-200 duration-500" placeholder="USERNAME">
                    </div>
                    <div class="mt-6">
                        <input required type="email" name="email" id="email" class="w-1/2 h-12 p-6 border-none bg-gray-100 rounded-full tracking-wider text-xs text-gray-400 font-light focus:outline-none focus:ring focus:ring-tosca-300 focus:border-tosca-300 transition  placeholder:text-gray-400 hover:bg-gray-200 duration-500" placeholder="EMAIL">
                    </div>
                    <div class="mt-6">
                        <input required type="password" name="password" id="password" class="w-1/2 h-12 p-6 border-none bg-gray-100 rounded-full tracking-wider text-xs text-gray-400 font-light focus:outline-none focus:ring focus:ring-tosca-300 focus:border-tosca-300 transition  placeholder:text-gray-400 hover:bg-gray-200 duration-500" placeholder="PASSWORD">
                    </div>
                    <div class="mt-14 ">
                        <button class="w-1/2 h-12 p-6 rounded-full tracking-wide py-2 text-white bg-orange-100 font-sans font-semibold hover:bg-orange-200 duration-500">
                            Sign Up
                        </button>
                    </div>
                    <div class="mt-8 text-gray-500 font-light tracking-wider text-xs">
                        ----- Sign up with -----
                    </div>
                    <div class="flex place-content-center mt-10">
                        <div class="w-12 h-12 bg-peach-100 mx-4 rounded-full">
                            <a href="#">
                                <img class="px-2.5 py-2.5" src="https://img.icons8.com/ios-glyphs/480/000000/whatsapp.png"/>
                            </a>
                        </div>
                        <div class="w-12 h-12 bg-cream-100 mx-4 rounded-full">
                            <a href="#">
                                <img class="px-2.5 py-2.5" src="https://img.icons8.com/ios-glyphs/480/000000/new-post.png"/>
                            </a>
                        </div>
                    </div>
                    <div class="mt-8 text-gray-600 font-light tracking-wide text-sm">
                        Already have an account? <a href="/" class="text-cyan-300 font-reguler hover:text-cyan-500 duration-200">Log In</a> 
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection