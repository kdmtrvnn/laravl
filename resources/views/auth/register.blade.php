@extends('layouts.app')
@section('content')

        <div class="container py-4">
        <div class="row">
        <div class="col-lg-4 offset-lg-4">
        <form method="POST" action="{{ route('register.handle') }}">
            @csrf
            <!-- Name -->
            <div>
                <label for="name" class="text-secondary">Name</label>

                <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}" autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" class="text-secondary">Email</label>

                <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="text-secondary">Password</label>

                <input id="password" class="form-control @error('password') is-invalid @enderror"
                                type="password"
                                name="password"
                                autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="text-secondary">Confirm Password</label>

                <input id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                                type="password"
                                name="password_confirmation"/>
            </div>

                <button type="submit" class="btn btn-outline-info mt-4">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
