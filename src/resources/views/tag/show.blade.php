@extends('layouts.index')

@section('title')
    Тег | {{ $tag->title }}
@endsection

@section('content-title')
    Тег: {{ $tag->title }}
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tag.index') }}">Теги</a></li>
    <li class="breadcrumb-item active">Тэг</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
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

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                            <tr>
                                <td style="width: 25%">ID:</td>
                                <td>{{ $tag->id }}</td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Наименование:</td>
                                <td>
                                    {{ $tag->title }}
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
