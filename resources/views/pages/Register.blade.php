@extends('layouts.Login&Register')
@section('loginregister-content')
<form action="" class="w-[27rem] h-[32rem] border-2 flex flex-col py-10 mx-auto my-10 rounded-2xl text-[#5E5E5E]">
    {{-- Title --}}
    <h1 class="font-semibold text-xl text-center mb-10 text-black">Daftar <span class="text-[#F9832A]">Sekarang</span></h1>

    {{-- Inputs --}}
    <div id="inputs" class="flex flex-col gap-5">

    {{-- Email Input --}}
    <div class="flex flex-col gap-3 mx-auto w-96">
    <label for="email">Masukan Email Anda</label>
    <input id="email" type="text" class="rounded-2xl border-2 transition-all duration-100 border-[#5e5e5e]/30 focus:border-[#F9832A] focus:ring-[#F9832A] w-full h-[3.4rem] placeholder:text-[#5e5e5e]/50" placeholder="email@gmail.com">
    <p>Contoh : email@gmail.com</p>
    </div>

    {{-- Daftar & Masuk --}}
    <div id="submitAndDaftar" class="flex flex-col gap-2 mt-3 mx-auto w-96 items-center">
        <button class="bg-[#F9832A] w-full h-[3.4rem] rounded-2xl text-white font-semibold text-lg">Daftar</button>
        <div class="flex flex-row items-center gap-1 ml-auto mt-3"><h2>Sudah mempunyai akun?</h2><a href="/masuk" class="text-[#F9832A]">Masuk</a></div>
    </div>

    {{-- Persyaratan dan Kebijakan Privasi --}}
    <a href="" class="text-center mt-7">
    Dengan mendaftar, saya menyetujui
    <br>
    <span class="text-[#F9832A]">Syarat dan Ketentuan</span> serta <span class="text-[#F9832A]">Kebijakan Privasi</span>
    </a>
    </div>
</form>
@endsection