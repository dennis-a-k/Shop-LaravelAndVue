@extends('layouts.index')

@section('title')
    Пользователь | {{ $user->title }}
@endsection

@section('content-title')
    Пользователь: {{ $user->title }}
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Пользователи</a></li>
    <li class="breadcrumb-item active">Пользователь</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="mr-2">
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success">
                            Редактировать
                        </a>
                    </div>
                    <form action="{{ route('user.delete', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Удалить">
                    </form>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                            <tr>
                                <td style="width: 25%">ID:</td>
                                <td>{{ $user->id }}</td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Пользователь:</td>
                                <td>
                                    {{ $user->name }} {{ $user->surname }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Возраст:</td>
                                <td>
                                    {{ $user->age }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Пол:</td>
                                <td>
                                    {{ $user->genderTitle }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Адресс:</td>
                                <td>
                                    {{ $user->address }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Телефон:</td>
                                <td>
                                    {{ $user->phone }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Почта:</td>
                                <td>
                                    {{ $user->email }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
