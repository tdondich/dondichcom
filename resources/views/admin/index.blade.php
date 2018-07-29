@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin</div>

                <div class="card-body">
                    <table class="table">
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->slug}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->user->name}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection