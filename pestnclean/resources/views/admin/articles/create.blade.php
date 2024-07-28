@extends('layouts.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Article</h3>
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
    <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter content"></textarea>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="category_parent">Danh mục cha</label>
                <select class="form-control" name="category_parent" id="category_parent">
                    <option value="0">---Root---</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            @if($category->level > 1)
                                @for ($i = 1; $i < $category->level; $i++)
                                    -- 
                                @endfor
                            @endif
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-check">
                <input type="checkbox" value="1" class="form-check-input" name="status" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
    </form>
</div>
@endsection
