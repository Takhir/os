@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать продукт</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <form action="{{ route('product.update', $product->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input value="{{ $product->title ?? old('title') }}" name="title" type="text" class="form-control" placeholder="Наименование">
                    </div>
                    <div class="form-group">
                        <input value="{{ $product->description ?? old('description') }}" name="description" type="text" class="form-control" placeholder="Описание">
                    </div>
                    <div class="form-group">
                        <textarea name="content" cols="30" rows="10" class="form-control" placeholder="Контент">{{ $product->content ?? old('content') }}</textarea>
                    </div>
                    <div class="form-group">
                        <input value="{{ $product->price ?? old('price') }}" name="price" type="text" class="form-control" placeholder="Цена">
                    </div>
                    <div class="form-group">
                        <input value="{{ $product->old_price ?? old('old_price') }}" name="old_price" type="text" class="form-control" placeholder="Старая цена">
                    </div>
                    <div class="form-group">
                        <input value="{{ $product->count ?? old('count') }}" name="count" type="text" class="form-control" placeholder="Количество на складе">
                    </div>
                    <div class="form-group">
                        <select name="category_id" class="form-control select2" style="width: 100%;">
                            <option selected="selected" disabled>Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Выберите тег" style="width: 100%;">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Выберите цвет" style="width: 100%;">
                            @foreach($colors as $color)
                                <option value="{{ $color->id }}">{{ $color->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
