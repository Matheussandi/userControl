@extends('site.layout')
@section('title', 'Login')
@section('body')

    <div class="container">
        <div class="row ">
            <div class="col-md-7">
                <img src="{{ asset('images/background.png') }}" alt="logo-home" width="100%" height="100%" class="img-fluid">
            </div>

            <div class="col-md-5 d-flex align-items-center py-3 px-4 p-md-0">
                <div>
                    <h1 class="mb-5">Faça login no <strong style="color:#EA80FC">painel</strong></h1>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="row">
                            <x-input-label for="email" :value="__('Nome de Usuário ou Endereço de Email')" />
                            <x-text-input id="email" class="block mt-1 w-full rounded p-2" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div class="row mt-4">
                            <x-input-label for="password" :value="__('Senha')" />

                            <x-text-input id="password" class="block mt-1 w-full rounded p-2" type="password"
                                name="password" required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="remember">
                                <span class="text-sm text-gray-600">{{ __('Mantenha-me conectado') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="text-decoration-none underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 float-end"
                                    href="{{ route('password.request') }}">
                                    {{ __('Esqueceu a senha?') }}
                                </a>
                            @endif
                        </div>
                        <!-- Submit Button -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="btn btn-primary">
                                {{ __('Entrar') }}
                            </x-primary-button>
                            <a href="{{ route('register') }}"
                                class="btn btn-primary container-lg: btn-alert p-2">Registrar</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
