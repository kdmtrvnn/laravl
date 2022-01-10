@extends('layouts.app') @section('content')

<div class="container">
    <h4>Контакты:</h4>

    @foreach($contacts_default as $default)

    <ul>
        <li>
            <h6 id="{{ $default->id }}"> {{ $default->name }} </h6>
        </li>
    </ul>

    <div id="modal{{ $default->id }}" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $default->name }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" id="Close{{ $default->id }}"></button>
                </div>
                <div class="modal-body">
                    <h6>Номер телефона: {{ $default->phone }}</h6>
                    <h6>Биография: {{ $default->biography }}</h6>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#{{ $default->id }}").click(function() {
            $("#modal{{ $default->id }}").show();
        });

        $("#Close{{ $default->id }}").click(function() {
            $("#modal{{ $default->id }}").hide();
        });
    </script>

    @endforeach 
    
    @isset($contacts) 
    @foreach($contacts as $contact)

    <form action="/contacts/{{ $contact->id }}" method="post">
        @csrf

        <ul>
            <div class="d-flex mb-3">
                <li>
                    <h6 id="{{ $contact->id }}"> {{ $contact->name }} </h6>
                </li>
                <button type="submit" class="btn btn-outline-info ms-3">Удалить</button>
            </div>
        </ul>

    </form>

    <div id="modal{{ $contact->id }}" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ $contact->name }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" id="Close{{ $contact->id }}"></button>
                </div>
                <div class="modal-body">
                    <h6>Номер телефона: {{ $contact->phone }}</h6>
                    <h6>Биография: {{ $contact->biography }}</h6>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#{{ $contact->id }}").click(function() {
            $("#modal{{ $contact->id }}").show();
        });

        $("#Close{{ $contact->id }}").click(function() {
            $("#modal{{ $contact->id }}").hide();
        });
    </script>

    @endforeach 
    @endisset

</div>


@endsection