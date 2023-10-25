@extends('layout.template')

<!-- Dinamic Title -->
@section('title', $course . ' course')

<!-- Dinamic Content -->
@section('content')
    <h1>Welcome to course: {{$course}} for begginers</h1>
@endsection

 