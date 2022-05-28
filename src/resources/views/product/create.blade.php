@extends('layouts.index')

@section('title')
    Добавление товара
@endsection

@section('content-title')
    Добавить товар
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Товары</a></li>
    <li class="breadcrumb-item active">Добавление товара</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <form action="{{ route('product.store') }}" class="col-12" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Наименование</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                    placeholder="Наименование">
            </div>
            <div class="form-group">
                <label for="article">Артикул</label>
                <input type="text" class="form-control" id="article" name="article" value="{{ old('article') }}"
                    placeholder="Артикул товара">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ old('description') }}" placeholder="Описание">
            </div>
            <div class="form-group">
                <label for="content">Контент</label>
                <textarea class="form-control" id="content" name="content" value="{{ old('content') }}" placeholder="Контент"
                    cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}"
                    placeholder="Цена">
            </div>
            <div class="form-group">
                <label for="count">Остаток</label>
                <input type="text" class="form-control" id="count" name="count" value="{{ old('count') }}"
                    placeholder="Остаток">
            </div>
            <div class="form-group">
                <label for="category_id">Категория</label>
                <select class="form-control select2" id="category_id" style="width: 100%;" name="category_id">
                    <option selected disabled>Выберите категорию</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == old('category_id') ? ' selected' : '' }}>
                            {{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Тэги</label>
                <select class="tags" id="tags" name="tags[]" multiple="multiple" data-placeholder="Выберите тэг"
                    style="width: 100%;">
                    @foreach ($tags as $tag)
                        <option {{ is_array(old('tags')) && in_array($tag->id, old('tags')) ? ' selected' : '' }}
                            value="{{ $tag->id }}">
                            {{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="colors">Цвет</label>
                <select class="colors" id="colors" name="colors[]" multiple="multiple"
                    data-placeholder="Выберите цвет" style="width: 100%;">
                    @foreach ($colors as $color)
                        <option {{ is_array(old('colors')) && in_array($color->id, old('colors')) ? ' selected' : '' }}
                            value="{{ $color->id }}">{{ $color->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Изображение</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_img"
                            value="{{ old('preview_img') }}">
                        <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="customRadio1" value="1" name="is_published">
                    <label for="customRadio1" class="custom-control-label">Опубликовать товар</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="customRadio2" value="0" name="is_published"
                        checked>
                    <label for="customRadio2" class="custom-control-label">Скрыть товар</label>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Добавить">
            </div>
        </form>
    </div>
    <!-- /.row (main row) -->
@endsection
