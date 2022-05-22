@extends('layouts.index')

@section('title')
    Цвета
@endsection

@section('content-title')
    Цвета
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item active">Цвета</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('color.create') }}" class="btn btn-primary">Добавить</a>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10%">ID</th>
                                <th>Наименование</th>
                                <th>Цвет</th>
                                <th style="width: 20%">Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($colors as $color)
                                <tr>
                                    <td class="align-middle">{{ $color->id }}</td>
                                    <td class="align-middle">
                                        {{ $color->title }}
                                    </td>
                                    <td>
                                        <input type="color" class="form-control form-control-color"
                                            value="#{{ $color->HEX }}">
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="mr-2">
                                                <a href="{{ route('color.edit', $color->id) }}" class="btn btn-success">
                                                    Редактировать
                                                </a>
                                            </div>
                                            <form action="{{ route('color.delete', $color->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger" value="Удалить">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
