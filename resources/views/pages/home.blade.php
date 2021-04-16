@extends('base')

@section('content')
<img src="{{asset('/img/drapeauxNantais.png')}}" alt="Nantes Flag" class="mt-12 rounded shadow-md w-44 h-32">
<h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-800">Hello From Nantes</h1>
<p class="text-lg text-gray-600">it's currently {{ date('h:i:s:A')}}</p>
<p> {{ date('D/M/Y')}} </p>

 @endsection
