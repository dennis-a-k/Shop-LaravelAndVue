@extends('layouts.index')

@section('title')
    Редактирование тэгов
@endsection

@section('content-title')
    Редактировать тэг
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tag.index') }}">Тэги</a></li>
    <li class="breadcrumb-item active">Редактирование тэга</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <form action="{{ route('tag.update', $tag->id) }}" class="col-12" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{ $tag->title }}"
                    placeholder="Наименование">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Редактировать">
            </div>
        </form>
    </div>
    <!-- /.row (main row) -->
@endsection
