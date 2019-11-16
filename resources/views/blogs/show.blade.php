@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Show</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Title: {{ $blog->title }}
                    <br>
                    Body: {{ $blog->body}}
                    <br>
                    Ditulis oleh: {{ $blog->user_id ? $blog->penulis: "Entah la"}}
                    <br>
                    <a href="{{route('blog:index')}}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

