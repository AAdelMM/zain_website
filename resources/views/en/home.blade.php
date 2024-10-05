@extends('en.layout')

@section('title', 'Home')

@section('content')
    @include('en.sections.hero')
    @include('en.sections.aboutUs')
    @include('en.sections.ourServices')
    <!-- Add more sections as needed -->
@endsection
