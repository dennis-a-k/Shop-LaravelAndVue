@extends('layouts.index')

@section('title')
    Редактирование группы
@endsection

@section('content-title')
    Редактировать группу
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('group.index') }}">Группы</a></li>
    <li class="breadcrumb-item active">Редактирование группы</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <form action="{{ route('group.update', $group->id) }}" class="col-12" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{ $group->title }}"
                    placeholder="Наименование">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Редактировать">
            </div>
        </form>
    </div>
    <!-- /.row (main row) -->
@endsection
