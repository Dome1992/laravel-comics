@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection


@section('content')
    <div class="container mt-5">
        <div class="row">
            <ul class=" d-flex list-unstyled flex-wrap">
                <li class="flex-column col-2">
                    <!-- <img src="{{ $comic[ 'thumb'] }}" width="100px"> -->
                    <span class="small-font">
                        {{ $comic ['title'] }}
                    </span>
                </li>
            </ul>
        </div>
    </div>
@endsection


