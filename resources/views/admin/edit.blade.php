@extends('layouts.admin')
@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('admin.update')}}" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" value="{{$post['title']}}" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input name="content" value="{{$post['content']}}" type="text" class="form-control">
                </div>
                @csrf
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection