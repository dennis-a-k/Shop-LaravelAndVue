@extends('layouts.index')

@section('title')
    Добавление цвета
@endsection

@section('content-title')
    Добавить цвет
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('color.index') }}">Цвета</a></li>
    <li class="breadcrumb-item active">Добавление цвета</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row ">
        <form action="{{ route('color.store') }}" class="col-12" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Наименование">
            </div>
            <div class="form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">#</span>
                    </div>
                    <input type="text" class="form-control" name="HEX" placeholder="Шестизначный код цвета">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Добавить">
            </div>
        </form>
    </div>
    <!-- /.row (main row) -->
@endsection
