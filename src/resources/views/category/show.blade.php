@extends('layouts.index')

@section('title')
    Категория | {{ $category->title }}
@endsection

@section('content-title')
    Категория: {{ $category->title }}
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Категории</a></li>
    <li class="breadcrumb-item active">Категория</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="mr-2">
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success">
                            Редактировать
                        </a>
                    </div>
                    <form action="{{ route('category.delete', $category->id) }}" method="POST">
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
                                <td>{{ $category->id }}</td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Наименование:</td>
                                <td>
                                    {{ $category->title }}
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
