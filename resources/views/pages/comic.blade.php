@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-7">
                <h2>
                    {{ $comic['title']}}
                </h2>
                <span>
                    {{ $comic['description']}}
                </span>
            </div>
            <dilv class="col-5">
                <img src="{{ $comic['thumb'] }}" width="100px">
            </dilv>
        
            
        </div>
    </div>
@endsection