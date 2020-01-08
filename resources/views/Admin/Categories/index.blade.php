@extends('layouts.app')
@section('title',' - Categories')
@section('content')
<h1>Categories</h1>
{{-- {{{$categories}}} is passed as an array of categories --}}
<category-manager :categories="{{$categories}}"></category-manager>
@endsection