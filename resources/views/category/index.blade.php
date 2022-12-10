<!-- {{--
    @extends('layouts.app')

    @section('content')
        category.index template
    @endsection
--}} -->
@foreach ($categories as $index => $category)
    <p>{{$category->name}}</p>
    @endforeach