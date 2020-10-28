@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-group">
            <div class="row">
        @foreach ($posts as $post)
                <div class="col-sm-4">
                  <div class="card p-3 m-3">
                    <img class="card-img-top" src="{{ asset('storage/' . $post['img'])}}" alt="{{ $post['slug']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post['title'] }}</h5>
                        <p class="card-text">{{ $post['body']}}</p>
                        <p class="card-text"> <small class="text-muted"> {{ $post->user->name }} </small> </p>
                    </div>
                  </div>
                </div>
        @endforeach
            </div>
        </div>
    </div>
@endsection
