@extends('layouts.index')

@section('title')
    Добавление группы
@endsection

@section('content-title')
    Добавить группу
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('group.index') }}">Группы</a></li>
    <li class="breadcrumb-item active">Добавление группы</li>
@endsection

@section('content')
    <!-- Main row -->
    <p>(для объединения схожих товаров но с разными значениями. К примеру одна модель телефона но с разной
        расцветкой)</p>
    <div class="row">
        <form action="{{ route('group.store') }}" class="col-12" method="POST">
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
