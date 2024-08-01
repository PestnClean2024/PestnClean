@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Article</h3>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $article->title }}" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter content">{{ $article->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description">{{ $article->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
                @if($article->image)
                    <img src="{{ asset('uploads/articles/'.$article->image) }}" alt="{{ $article->title }}" width="100">
                @endif
            </div>

            {{-- <div class="form-group">
                <label for="category_parent">Thuộc danh mục</label>
                <select class="form-control" name="category_parent" id="category_parent">
                  <option value="0" {{ $category->category_parent == 0 ? 'selected' : '' }}>---Root---</option>
                  @foreach($categories as $cat)
                      <option value="{{ $cat->id }}" {{ $cat->id == $category->category_parent ? 'selected' : '' }}>
                        @if($cat->level > 1)
                          @for ($i = 1; $i < $cat->level; $i++)
                            -- 
                          @endfor
                        @endif
                        {{ $cat->title }}
                      </option>
                  @endforeach 
                </select>
              </div> --}}

              <div class="form-group">
                <label for="category_id">Danh mục cha</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="0" {{ $article->category_id == 0 ? 'selected' : '' }}>---Root---</option>
                    @foreach($listCategory as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == $article->category_id ? 'selected' : '' }}>
                            @for ($i = 1; $i < $cat->level; $i++)
                                -- 
                            @endfor
                            {{ $cat->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-check">
                <input type="checkbox" value="1" class="form-check-input" name="status" id="status" {{ $article->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status">Active</label>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
