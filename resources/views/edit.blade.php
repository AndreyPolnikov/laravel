@extends('layouts.app')

@section('content')

    <p>страница редактирования</p>
    <div style="width: 500px">
        <form method="POST" action="{{ asset('/'). 'update'}}">
            @csrf
            <input type="hidden"  name="id_post" value="{{ $id }}">
            <div class="form-group">
                <label for="formGroupExampleInput">Название задачи</label>
                <input type="text"  class="form-control"  name="title" value="{{$title}}" id="formGroupExampleInput" placeholder="Введите название">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">задача</label>
                <input type="text"  class="form-control" name="text" value="{{$desc}}" id="formGroupExampleInput2" placeholder="Введите текст">
            </div>
            <button type="submit" class="btn btn-primary">сохранить</button>
        </form>
    </div>


@endsection
