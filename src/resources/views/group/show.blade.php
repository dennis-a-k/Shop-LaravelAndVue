@extends('layouts.index')

@section('title')
    Группа | {{ $group->title }}
@endsection

@section('content-title')
    Группа: {{ $group->title }}
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('group.index') }}">Группы</a></li>
    <li class="breadcrumb-item active">Группа</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="mr-2">
                        <a href="{{ route('group.edit', $group->id) }}" class="btn btn-success">
                            Редактировать
                        </a>
                    </div>
                    <form action="{{ route('group.delete', $group->id) }}" method="POST">
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
                                <td>{{ $group->id }}</td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Наименование:</td>
                                <td>
                                    {{ $group->title }}
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
