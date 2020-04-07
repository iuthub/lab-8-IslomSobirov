@extends('layouts.admin')
@section('content')
    @if (Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">
                    {{Session::get('info')}}    
                </p>    
            </div> 
        </div>    
    @endif
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-success" href="/admin/create">New Post</a>
        </div>
    </div>
    <hr>
    <?php $i = 0 ?>
    @foreach ($posts as $post)    
        <div class="row">
            <div class="col-md-12">
                <p>
                    <strong>{{$post['title']}}</strong>
                    <a href="/admin/edit/{{$i}}">Edit</a>
                </p>
            </div>
        </div>
        <?php $i++ ?>
    @endforeach

@endsection