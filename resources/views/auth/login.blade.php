@extends('layouts.app')
@section('content')

        <div class="container py-4">
        <div class="row">
        <div class="col-lg-4 offset-lg-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->

            <div>
                <label for="email" class="text-secondary">Email</label>

                <input id="email" class="form-control @error('name') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="text-secondary">Password</label>

                <input id="password" class="form-control @error('name') is-invalid @enderror"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            <div class="flex items-center justify-end ms-auto">
            <br>
                <button type="submit" class="btn btn-outline-info">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
        </div>
        </div>
        </div>
@endsection