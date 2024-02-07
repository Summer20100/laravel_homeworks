@extends('layouts.app')

@section('title-block')Зачислить студента @endsection

@section('content')

    
    <div class="d-flex justify-content-between">
        <h1>Добавить студента</h1>
    </div>

    <form action=" {{ route('students.store') }} " method="post">
        @csrf

        <div class="form-group mb-2">
            <label for="group_id">ID группы</label>
            <input type="number" name="group_id" placeholder="ID группы" id="group_id" class="form-control" value="1">
        </div>

        <div class="form-group mb-2">
            <label for="surname">Фамилия студента</label>
            <input type="text" name="surname" placeholder="Фамилия студента" id="surname" class="form-control" value="Булатов">
        </div>

        <div class="form-group mb-2">
            <label for="name">Имя студента</label>
            <input type="text" name="name" placeholder="Имя студента" id="name" class="form-control" value="Дмитрий">
        </div>

        <button type="submit" class="btn btn-success">Зачислить</button>
    </form>
@endsection
