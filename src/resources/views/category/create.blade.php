@extends('layouts.index')

@section('title')
    Добавление категории
@endsection

@section('content-title')
    Добавить категорию
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Категории</a></li>
    <li class="breadcrumb-item active">Добавление категории</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <form action="{{ route('category.store') }}" class="col-12" method="POST">
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
