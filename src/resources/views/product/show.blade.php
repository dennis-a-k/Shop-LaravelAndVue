@extends('layouts.index')

@section('title')
    Товар | {{ $product->title }}
@endsection

@section('content-title')
    Товар: {{ $product->title }}
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Товары</a></li>
    <li class="breadcrumb-item active">Товарэг</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="mr-2">
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success">
                            Редактировать
                        </a>
                    </div>
                    <form action="{{ route('product.delete', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Удалить">
                    </form>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                            <tr>
                                <td style="width: 25%">Статус:</td>
                                <td>
                                    {{ $product->is_published == 0 ? 'Товар скрыт с витрины' : 'Товар опубликован' }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">ID:</td>
                                <td>{{ $product->id }}</td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Наименование:</td>
                                <td>
                                    {{ $product->title }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Артикул:</td>
                                <td>
                                    {{ $product->article }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Цена:</td>
                                <td>
                                    {{ $product->price }} ₽
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Остаток:</td>
                                <td>
                                    {{ $product->count }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Категория:</td>
                                <td>
                                    {{ $product->category['title'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Тэги:</td>
                                <td>
                                    @foreach ($product->tags as $tag)
                                        <span class="badge bg-warning text-dark">{{ $tag->title }}</span>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Цвет:</td>
                                <td>
                                    {{ $product->color['title'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Группа товаров:</td>
                                <td>
                                    {{ $product->group['title'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Описание:</td>
                                <td>
                                    {{ $product->description }}
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%">Контент:</td>
                                <td>
                                    {{ $product->content }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <img src="{{ asset('storage/' . $product->preview_img) }}" class="img-thumbnail w-25 m-2 mb-5"
            alt="{{ $product->article }}">
    </div>
    <!-- /.row (main row) -->
@endsection
