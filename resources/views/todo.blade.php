@extends('layouts.app')

@section('content')
    <a href="{{ asset('/create')}}">создать</a>
    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item">{{ $post->title }}
                <a href="{{ asset('/'). 'edit/' . $post->id }}">редактировать</a>
                <a href="{{ asset('/'). 'destroy/' . $post->id }}" onclick="confirm('хотите удалить?')">удалить</a>
            </li>
        <li class="list-group-item">{{ $post->desc }}</li>

        @endforeach
    </ul>


@endsection
