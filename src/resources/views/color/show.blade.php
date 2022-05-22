@extends('layouts.index')

@section('title')
    Цвет | {{ $color->title }}
@endsection

@section('content-title')
    Цвет: {{ $color->title }}
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('color.index') }}">Цвета</a></li>
    <li class="breadcrumb-item active">Цвет</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
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

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                            <tr>
                                <td style="width: 25%">ID:</td>
                                <td>{{ $color->id }}</td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Наименование:</td>
                                <td>
                                    {{ $color->title }}
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle" style="width: 25%">Цвет:</td>
                                <td>
                                    <input type="color" class="form-control form-control-color"
                                        value="#{{ $color->HEX }}">
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
