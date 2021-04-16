@extends('base')

@section('title', 'About Us | ' .config('app.name'))


@section('content')
<img class="w-44"src="{{asset('/img/drapeauxNantais.png')}}" alt="Nantes Flag"class="my-12 rounded-full shadow-md w-44 h-32">
    <h2 class="mb-5 text-gray-600">apprendre<span class="text-red-600">&hearts;  </span> Laravel</h2>
    <p class="">
        <a href="{{route('app_home')}}"class="text-indigo-500 hover:text-indigo-600 underline">revenir page d'acceuil
        </p></p>
@endsection
