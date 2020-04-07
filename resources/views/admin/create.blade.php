@extends('layouts.admin')
@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.create')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="content">content</label>
                    <input name="content" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection