@extends('layouts.app')

@section('main-content')

    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-2 my-card">
              <img src="{{ $comic['thumb'] }}" alt="">
              <h4 class="mt-2">
                {{ $comic['series'] }}
              </h4>
            </div>
            @endforeach
        </div>
    </div>

@endsection