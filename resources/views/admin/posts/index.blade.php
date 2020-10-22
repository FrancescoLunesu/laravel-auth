@extends('layouts.app')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
              <th scope="row">{{ $post->id}}</th>
              <td>{{ $post->title}}</td>
              <td><a href="{{ route('posts.edit', $post->id) }}">Modifica</a></td>
              <td>
                  <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                      @csrf
                      @method("DELETE")
                        <button type="submit" class="btn btn-primary">Clicca qui</button>
                  </form>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
