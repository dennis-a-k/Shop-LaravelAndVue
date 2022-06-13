@extends('layouts.index')

@section('title')
    Редактирование товара
@endsection

@section('content-title')
    Редактировать товар
@endsection

@section('content-breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Товары</a></li>
    <li class="breadcrumb-item active">Редактирование товара</li>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <form action="{{ route('product.update', $product->id) }}" class="col-12" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Наименование</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ $product->title ?? old('title') }}" placeholder="Наименование">
            </div>
            <div class="form-group">
                <label for="article">Артикул</label>
                <input type="text" class="form-control" id="article" name="article"
                    value="{{ $product->article ?? old('article') }}" placeholder="Артикул товара">
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="text" class="form-control" id="price" name="price"
                    value="{{ $product->price ?? old('price') }}" placeholder="Цена">
            </div>
            <div class="form-group">
                <label for="count">Остаток</label>
                <input type="text" class="form-control" id="count" name="count"
                    value="{{ $product->count ?? old('count') }}" placeholder="Остаток">
            </div>
            <div class="form-group">
                <label for="category_id">Категория</label>
                <select class="form-control select2" id="category_id" style="width: 100%;" name="category_id">
                    <option disabled>Выберите категорию</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $product->category_id || old('category_id') == $product->category_id ? ' selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="color_id">Цвет</label>
                <select class="form-control select2" id="color_id" style="width: 100%;" name="color_id">
                    <option disabled>Выберите цвет</option>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}"
                            {{ $color->id == $product->color_id || old('color_id') == $product->color_id ? ' selected' : '' }}>
                            {{ $color->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category_id">Группа товаров</label>
                <select class="form-control select2" id="group_id" style="width: 100%;" name="group_id">
                    <option disabled>Выберите категорию</option>
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}"
                            {{ $group->id == $product->group_id || old('group_id') == $product->group_id ? ' selected' : '' }}>
                            {{ $group->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Выбранные тэги:</label>
                <select class="tags" id="tags" name="tags[]" multiple="multiple" data-placeholder="Выберите тэг"
                    style="width: 100%;">
                    @foreach ($tags as $tag)
                        <option
                            {{ is_array($product->tags->pluck('id')->toArray()) && in_array($tag->id, $product->tags->pluck('id')->toArray()) ? ' selected' : '' }}
                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Изображение</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="preview_img"
                            value="{{ $product->preview_img }} ?? old('preview_img')"
                            accept="image/png,image/jpg,image/jpeg">
                        <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $product->description ?? old('description') }}" placeholder="Описание">
            </div>
            <div class="form-group">
                <label for="content">Контент</label>
                <textarea class="form-control" id="content" name="content" placeholder="Контент" cols="30" rows="10">{{ $product->content ?? old('content') }}</textarea>
            </div>
            <div class="form-group">
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="customRadio1" value="1" name="is_published"
                        {{ $product->is_published == 1 ? ' checked' : '' }}>
                    <label for="customRadio1" class="custom-control-label">Опубликовать товар</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="customRadio2" value="0" name="is_published"
                        {{ $product->is_published == 0 ? ' checked' : '' }}>
                    <label for="customRadio2" class="custom-control-label">Скрыть товар</label>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Обновить">
            </div>
        </form>
    </div>
    <div class="row">
        <img src="{{ asset('storage/' . $product->preview_img) }}" class="img-thumbnail w-25 m-2 mb-5"
            alt="{{ $product->article }}">
    </div>
    <!-- /.row (main row) -->
@endsection
