@extends('layouts.app')

@section('content')

    <p>страница создания новой записи</p>
    <div style="width: 500px">
        <form method="POST" action="{{ asset('/create')}}">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Название задачи</label>
                <input type="text"  class="form-control"  name="title"  id="formGroupExampleInput" placeholder="Введите название">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">задача</label>
                <input type="text"  class="form-control" name="text"  id="formGroupExampleInput2" placeholder="Введите текст">
            </div>
            <button type="submit" class="btn btn-primary">создать</button>
        </form>
    </div>


@endsection
