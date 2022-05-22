@extends('layouts.index')

@section('title')
    Добавление тэгов
@endsection

@section('content-title')
    Добавить тэг
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tag.index') }}">Тэги</a></li>
    <li class="breadcrumb-item active">Добавление тэгов</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <form action="{{ route('tag.store') }}" class="col-12" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Наименование">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Добавить">
            </div>
        </form>
    </div>
    <!-- /.row (main row) -->
@endsection
