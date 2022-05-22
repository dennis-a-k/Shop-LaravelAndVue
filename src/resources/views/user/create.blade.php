@extends('layouts.index')

@section('title')
    Добавление пользователя
@endsection

@section('content-title')
    Добавить пользователя
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Пользователи</a></li>
    <li class="breadcrumb-item active">Добавление пользователя</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <form action="{{ route('user.store') }}" class="col-12" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="surname" value="{{ old('surname') }}"
                    placeholder="Фамилия">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Имя">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="age" value="{{ old('age') }}" placeholder="Возраст">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="address" value="{{ old('address') }}"
                    placeholder="Адресс">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Телефон">
            </div>
            <div class="form-group">
                <select class="custom-select form-control" name="gender" id="">
                    <option disabled selected>Пол</option>
                    <option {{ old('gender') == 1 ? ' selected' : '' }} value="1">Мужской</option>
                    <option {{ old('gender') == 2 ? ' selected' : '' }} value="2">Женский</option>
                </select>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                    placeholder="Электронная почта">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="password" value="{{ old('password') }}"
                    placeholder="Пароль">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="password_confirmation"
                    value="{{ old('password_confirmation') }}" placeholder="Подтверждение пароля">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Добавить">
            </div>
        </form>
    </div>
    <!-- /.row (main row) -->
@endsection
