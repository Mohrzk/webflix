@extends('layouts.app')

@section('content')

    <h1>À propos de {{$title}} </h1>

    <ul>
        @foreach ($team as $member)

            <li>
                <a href="/a-propos/ {{$member['name']}"}"></a>
                <img src="{{$member['image']}}" alt="{{$member['name']}}">
                {{$member['name']}}
                ({{$member['job']}})

                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}">

            </li>
            
        @endforeach
    </ul>








@endsection
