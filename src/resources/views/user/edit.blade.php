@extends('layouts.index')

@section('title')
    Редактирование пользователя
@endsection

@section('content-title')
    Редактировать пользователя
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Пользователи</a></li>
    <li class="breadcrumb-item active">Редактирование пользователя</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <form action="{{ route('user.update', $user->id) }}" class="col-12" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <input type="text" class="form-control" name="surname" value="{{ $user->surname ?? old('surname') }}"
                    placeholder="Фамилия">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{ $user->name ?? old('name') }}"
                    placeholder="Имя">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="age" value="{{ $user->age ?? old('age') }}"
                    placeholder="Возраст">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="address" value="{{ $user->address ?? old('address') }}"
                    placeholder="Адресс">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="phone" value="{{ $user->phone ?? old('phone') }}"
                    placeholder="Телефон">
            </div>
            <div class="form-group">
                <select class="custom-select form-control" name="gender" id="">
                    <option disabled selected>Пол</option>
                    <option {{ $user->gender == 1 || old('gender') == 1 ? ' selected' : '' }} value="1">Мужской</option>
                    <option {{ $user->gender == 2 || old('gender') == 2 ? ' selected' : '' }} value="2">Женский</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Редактировать">
            </div>
        </form>
    </div>
    <!-- /.row (main row) -->
@endsection
