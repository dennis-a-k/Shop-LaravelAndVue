@extends('layouts.index')

@section('title')
    Редактирование категории
@endsection

@section('content-title')
    Редактировать категорию
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Категории</a></li>
    <li class="breadcrumb-item active">Редактирование категории</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <form action="{{ route('category.update', $category->id) }}" class="col-12" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{ $category->title }}"
                    placeholder="Наименование">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Редактировать">
            </div>
        </form>
    </div>
    <!-- /.row (main row) -->
@endsection
