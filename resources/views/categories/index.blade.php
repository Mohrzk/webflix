@extends('layouts.app')

@section('content')

    <h1>Nos catgégories</h1>

    <a href="/categories/creer"> Créer une catgégories</a>
   
    <div>
        @foreach ($categories as $category)

        <div>
            <h2> {{ $category->name}} </h2>
        </div>
            
        @endforeach
    </div>

@endsection