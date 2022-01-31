@extends('layout.app')

@section('content')
<h1 class="visually-hidden">Heroes examples</h1>

<div class="px-4 py-5 my-5 ">

    <h1 class="display-5 fw-bold text-center">{{trans('category.titles.updated')}}</h1>
    <div class="col-lg-6 mx-auto">

        <form method="POST" action="{{route('categories.update', $category)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">{{trans('category.name')}}</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$category->name}}" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">{{trans('category.description')}}</label>
                <input type="text" name="description" class="form-control" id="description" value="{{$category->description}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
@endsection
