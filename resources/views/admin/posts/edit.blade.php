@extends('admin.layouts.layout')

@section('content')

<div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактирование статьи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Статья "{{ $post->title }}"</h3>
                            </div>
                            <form action="{{ route('posts.update', ['post' => $post->id])}}" method="post" role="form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Название</label>
                                        <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror" id="title"
                                                value="{{ $tag->title }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Цитата</label>
                                        <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror"
                                         rows="3">{{ $post->description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="content">Контент</label>
                                        <textarea name="content" id="content" rows="3" class="form-control @error('content') is-invalid @enderror"
                                         rows="7">{{ $post->content }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Категория</label>
                                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid" @enderror>
                                            @foreach ($categories as $k =>$v)
                                                <option value="{{ $k }}" @if ($k == $post->category_id) selected @endif>{{ $v }}</option>
                                            @endforeach
                                            </select>
                                    </div>

                                     <div class="form-group">
                                        <label for="tags">Тэги</label>
                                        <select name="tags[]" id="tags" class="select2" multiple="multiple" @enderror>
                                            @foreach ($tags as $k =>$v)
                                                <option value="{{ $k }}" @if(in_array($k, $post->tags->pluck('id')->all())) selected @endif>{{ $v }}</option>
                                            @endforeach
                                            </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="thumbnail">Изображение</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="thumbnail" id="thumbnail" class="custom-file-input">
                                                <label for="thumbnail" class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                        <div><img src="{{ $post->getImage() }}" alt="" class="img-thumbnail mt-2" width="200"></div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>

@endsection