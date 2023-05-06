@extends('site.layout')
@section('title', 'Sign up')
@section('body')

    <div class="container">
        <div class="row ">
            <div class="col-md-7">
                <img src="{{ asset('images/background.png') }}" alt="logo-home" width="100%" height="100%" class="img-fluid">
            </div>

            <div class="col-md-5 d-flex align-items-center py-3 px-4 p-md-0">
                <div>
                    <h1 class="mb-5">Faça cadastro no <strong style="color:#EA80FC">painel</strong></h1>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Name -->
                        <div class="row">
                            <x-input-label for="name" :value="__('Nome')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="row mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="row mt-4">
                            <x-input-label for="password" :value="__('Senha')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="row mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirme a senha')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="btn btn-primary ml-4">
                                {{ __('Registrar') }}
                            </x-primary-button>

                            <a class="text-decoration-none underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('login') }}">
                                {{ __('Já registrado?') }}
                            </a>

                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection