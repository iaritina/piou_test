@extends('layouts.login')

@section('contents')
    <form action="{{route('user.register.store')}}" autocomplete="off" method="POST">

        <x-ack />
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <label class="form-label" for="nom">{{ __('Nom') }}</label>
                    <x-text-input :value="old('nom')" autofocus class="form-control" id="nom" name="lastname" required type="text" />
                    <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                </div>
                <div class="col">
                    <label class="form-label" for="prenom">{{ __('Prenom') }}</label>
                    <x-text-input :value="old('prenom')" autofocus class="form-control" id="prenom" name="firstname" required type="text" />
                    <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">{{ __('Email') }}</label>
            <x-text-input :value="old('email')" autocomplete="email" autofocus class="form-control" id="email" name="email" required type="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">
                {{ __('Mot de passe') }}
            </label>
            <div class="input-group input-group-flat">
                <x-text-input autocomplete="current-password" class="form-control" id="password" name="password" required type="password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>
        <div class="mb-2">
            <label class="form-label" for="password">
                {{ __('Confimer le mot de passe') }}
            </label>
            <div class="input-group input-group-flat">
                <x-text-input autocomplete="current-password" class="form-control" id="password" name="password" required type="password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>
        <div class="form-footer">
            @csrf
            <button class="btn btn-primary w-100" type="submit">{{ __('Se connecter') }}</button>
        </div>
    </form>
@endsection