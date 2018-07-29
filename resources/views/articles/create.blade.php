@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Article</div>

                <div class="card-body">
                <form action="{{route('admin-articles-create-submit')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="title">Slug</label>
                        <input class="form-control" id="slug" name="slug" placeholder="Slug">
                    </div>
                     <div class="form-group">
                        <label for="title">Excerpt</label>
                        <input class="form-control" id="excerpt" name="excerpt" placeholder="Excerpt">
                    </div>
                      <div class="form-group">
                        <label for="title">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                    </div>
                    <button type="submit">Add Article</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
