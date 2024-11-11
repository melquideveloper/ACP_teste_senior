<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    .box {
        cursor: pointer;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Styles login -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <!-- <img src="{{ asset('uploads/logo.png') }}" width="195"> -->
                    <!-- Cadastro -->
                    <!-- API EDUCAÇÃO -->
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <div class="w-full py-6">
                    <div class="flex">
                        <div class="w-1/3">

                        </div>

                        <div class="w-1/3">
                            <div class="relative mb-2">

                                <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center" id="icon-step-2">
                                    <span class="text-center text-gray-600 w-full">
                                        <i class="fas fa-cloud"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="text-xs text-center md:text-base">Somente AUTORIZADO(s)</div>
                        </div>

                        <div class="w-1/3">

                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}" id="form-register">
                    @csrf
                    <div>
                        <label for="" class="labelFormLogin">Login</label>
                        <input class="inputFormLogin" type="text" name="email" id="loginsge">
                        <label for="" class="labelFormLogin">Senha</label>
                        <input class="inputFormLogin" type="password" name="password" id="senhasge">
                        <span id="errocredenciais">Credenciais inválidas!</span>
                        @if($errors->any())
                        <span id="errorlogin">{{$errors->first()}}</span>
                        @endif
                        <button type="submit" id="sumbitsge" class="animated-button">
                            <span>Acessar</span>
                            <span></span>
                        </button>

                        <!-- <button type="submit" id="sumbitsge" class="btn lt-register-btn" onclick="">Acessar <i class="icon-right"></i></button> -->
                        <img src="{{asset('uploads/logotipo_camacari_verde.png')}}" id="imgpref" alt="">
                    </div>

                    <!-- Validation Errors -->
                    <!-- Validation Errors -->
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="{{ asset('js/dashboard.js') }}"> </script>
</body>

</html>