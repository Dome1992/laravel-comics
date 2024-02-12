@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection


@section('content')
<!-- <div class="container mt-5">
    <div class="row">
        <ul class="list-unstyled d-flex flex-wrap">
                @foreach ($comics as $comic)
                    <li class="flex-column col-2">
                        <img src="{{ $comic['thumb']}}" width="100px">
                        {{ $comic['title']}}
                    </li>
                @endforeach
        </ul> 
    </div>
</div> -->
 <div class="container mt-5">
  <div class="row">
    @foreach ($comics as $comic)
      <div class="col-2">
        <a href="/comic">

            <div class="card mb-3">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                </div>
            </div>
        </a>
            
      </div>
    @endforeach
  </div>
</div> 



@endsection


