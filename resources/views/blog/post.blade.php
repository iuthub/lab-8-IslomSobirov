@extends('layouts.master')

@section('content')
    <h1 class="text-center">{{$post['title']}}</h1>
    <div class="row">
        <div class="col-md-12">
            <p>{{$post['content']}}</p>
        </div>
    </div>
@endsection