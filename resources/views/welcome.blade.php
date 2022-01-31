@extends('layout.app')

@section('content')
        <h1 class="visually-hidden">Heroes examples</h1>

        <div class="px-4 py-5 my-5 text-center">

            <h1 class="display-5 fw-bold">Centered hero</h1>
            <div class="col-lg-6 mx-auto">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td><a class="btn btn-primary" href="{{route('categories.edit', $category->id)}}" role="button">Actualizar</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
@endsection
