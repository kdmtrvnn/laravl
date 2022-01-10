@extends('layouts.app') @section('content')

<div class="container py-4">
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <div class="form-group">

                <form action="{{ route('contacts.create') }}" method="post">
                    @csrf

                    <label>Name:</label>
                    <input class="form-control" type="text" name="name" value="{{old('name')}}" required autofocus />
                    <label>Phone:</label>
                    <input class="form-control" type="number" name="phone" value="{{old('phone')}}" required autofocus />
                    <label>Biography:</label>
                    <textarea class="form-control" name="biography" rows="3"></textarea>
                    <br>
                    <button type="submit" class="btn btn-outline-info">Создать контакт</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection