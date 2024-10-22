@extends('ar.layout')

@section('title', 'Home_ar')

@section('content')
    @include('ar.sections.hero')
    @include('ar.sections.aboutUs')
    @include('ar.sections.ourServices')
    @include('ar.sections.ourwork')
    @include('ar.sections.contactUs')
    
    <!-- Add more sections as needed -->
@endsection
