@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection


@section('content')
    <div class="container mt-5">
        <div class="row">
            <h2>
                {{ $comic['title']}}
            </h2>
        </div>
    </div>
@endsection