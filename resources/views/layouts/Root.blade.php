<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- icon title -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" type="image/png" href={{ asset('logoDkampus.png') }} />
    <link rel="apple-touch-icon" type="image/png" sizes="76x76" href={{ asset('logoDkampus.png') }} />
    <link rel="apple-touch-icon" type="image/png" sizes="120x120" href={{ asset('logoDkampus.png') }} />
    <link rel="apple-touch-icon" type="image/png" sizes="152x152" href={{ asset('logoDkampus.png') }} />
    <link rel="apple-touch-icon" type="image/png" href={{ asset('logoDkampus.png') }} sizes="60x60" />
    <link rel="icon" type="image/png" href={{ asset('logoDkampus.png') }} />
    <link rel="icon" type="image/png" href={{ asset('logoDkampus.png') }} sizes="32x32" />
    <link rel="icon" type="image/png" href={{ asset('logoDkampus.png') }} sizes="192x192" />
    <link rel="icon" type="image/png" href={{ asset('logoDkampus.png') }} sizes="16x16" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>{{ $Title }} - Welcome & Enjoy what you need</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div id="containerLayout" class="relative mx-auto {{$Title === 'Home' ? 'md:px-0' :'px-0' }}">
        @if ($Title === 'Home' || $Title === 'Promo' || $Title === 'Pesanan' || $Title === 'Favorit' || $Title === 'Status')
        {{-- TopBar Desktop --}}
        {{-- <div id="topBarDekstop" class="hidden sticky top-0 z-10 bg-white md:flex md:flex-col md:justify-center md:border-b-2 md:border-[#F9832A]">
            <div class="hidden w-[100%] gap-0.5 pt-7 pb-8 mx-auto md:flex md:h-full md:flex-row md:items-center md:px-5">
                
                <div class="flex flex-row my-auto h-max items-center md:gap-2">
                    <a href="/">
                        <img src="logoDkampus.svg" alt="" class="min-w-[100%] max-w-[120%] md:min-w-[2vw]">
                    </a>
                    <h1 class="font-bold text-[#F9832A] text-2xl hidden md:flex">Dkampus</h1>    
                </div>

                <a href="#" class="hidden font-normal text-xl w-max mx-auto text-[#F9832A] md:flex">
                    Daftar Warung
                </a>
            
                
                @include('components.header.search')

                <button class="hidden mx-auto md:flex">
                    <img src="./cart.svg" alt="">
                </button>
            
                
                <div class="flex flex-row items-center gap-3">
                    @auth
                    <button>
                    <img src="chat.svg" alt="" class="w-8 mr-5">
                    </button>
                    @endauth    
                    @include('components.header.menu')
                </div>

            </div>
            @if ($Title === 'Home' || $Title === 'Promo' || $Title === 'Pesanan' || $Title === 'Favorit' || $Title === 'Status')
            
                @include('components.navbar.navbarDesktop')
            
            @else
            
            @endif
        </div> --}}
        @include('components.header.headerForDesktop')
        @else
    
        @endif

        @yield('content')
        
        @if ($Title === 'Home' || $Title === 'Promo' || $Title === 'Pesanan' || $Title === 'Favorit' || $Title === 'Status')
            {{-- <div class="w-full relative flex justify-center"> --}}
            @include('components.navbar.navbar')
            {{-- </div> --}}
        @else
            {{-- @include('components.navbar.navbar') --}}
        @endif
    </div>
    <script src="{{ asset('js/root-layout.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @switch($Title)
        @case('Home')
            <script src="{{ asset('js/homepage-script.js') }}"></script>
            <script src="{{ asset('js/swiper.js') }}"></script>
        @break

        @case('Promo')
            <script src="{{ asset('js/promo.js') }}"></script>
            <script src="{{ asset('js/aside&SearchDesktop.js') }}"></script>
        @break

        @case('Pesanan')
            <script src="{{ asset('js/pesanan.js') }}"></script>
        @break

        @case('Status')
            <script src="{{ asset('js/status.js') }}"></script>
        @break

        @case('Favorit')
        @break

        @case('Detail-Warung')
            <script src="{{ asset('js/DetailWarung-script.js') }}"></script>
        @break

        @case('Detail-Makanan')
            <script src="{{ asset('js/DetailMakanan-script.js') }}"></script>
        @break

        @case('Log in')
            <script src="{{ asset('js/login.js') }}"></script>
        @break

        @case('Register')
            <script src="{{ asset('js/register.js') }}"></script>
        @break

        @case('Code Verification')
            <script src="{{ asset('js/codeVerification.js') }}"></script>
        @break

        @case('Input Registrasi')
            <script src="{{ asset('js/inputRegistration.js') }}"></script>
        @break

        @default
            {{-- <script src="{{asset('js/DetailWarung-script.js')}}"></script> 
            <script src="{{asset('js/DetailMakanan-script.js')}}"></script>  --}}
            {{-- <script src="{{asset('js/homepage-script.js')}}"></script>   --}}
            {{-- <script src="{{asset('js/swiper.js')}}"></script> --}}
            {{-- <script src="{{asset('js/gsap.js')}}"></script> --}}
            {{-- <script src="{{asset('js/inputRegistration.js')}}"></script> --}}
            {{-- <script src="{{asset('js/codeVerification.js')}}"></script> --}}
    @endswitch

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('error2'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: '{{ session('error2') }}'
            })
        </script>
    @endif
    @if (session('success'))
        <script>
            const ToastSuccess = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            ToastSuccess.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            })
        </script>
    @endif
    @stack('js')
</body>

</html>
