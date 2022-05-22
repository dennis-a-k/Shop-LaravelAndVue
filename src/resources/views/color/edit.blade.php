@extends('layouts.index')

@section('title')
    Редактирование цвета
@endsection

@section('content-title')
    Редактировать цвет
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('color.index') }}">Цвета</a></li>
    <li class="breadcrumb-item active">Редактирование цвета</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <form action="{{ route('color.update', $color->id) }}" class="col-12" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{ $color->title }}"
                    placeholder="Наименование">
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">#</span>
                    </div>
                    <input type="text" class="form-control" name="HEX" value="{{ $color->HEX }}"
                        placeholder="Шестизначный код цвета">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Редактировать">
            </div>
        </form>
    </div>
    <!-- /.row (main row) -->
@endsection
