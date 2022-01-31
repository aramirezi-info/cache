@extends('layout.app')

@section('content')
    <h1 class="visually-hidden">Heroes examples</h1>

    <div class="px-4 py-5 my-5 text-center">

        <h1 class="display-5 fw-bold">Centered hero</h1>


                <ul class="list-unstyled mb-0">

                    @foreach($categories as $category)
                    <li>
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                            <span class="d-inline-block bg-success rounded-circle" style="width: .5em; height: .5em;"></span>
                            {{$category->name}}
                        </a>
                    </li>
                    @endforeach
                </ul>


    </div>
@endsection
