@extends('layouts.index')

@section('title')
    Тэги
@endsection

@section('content-title')
    Тэги
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item active">Тэги</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('tag.create') }}" class="btn btn-primary">Добавить</a>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width: 10%">ID</th>
                                <th>Наименование</th>
                                <th style="width: 20%">Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td class="align-middle">{{ $tag->id }}</td>
                                    <td class="align-middle">
                                        {{ $tag->title }}
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="mr-2">
                                                <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-success">
                                                    Редактировать
                                                </a>
                                            </div>
                                            <form action="{{ route('tag.delete', $tag->id) }}" method="POST">
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
