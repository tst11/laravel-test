@extends('layouts.master')

@section('content')
    <a href="{{ route('home') }}">Home</a>
    <h1>I {{ $action }} {{ $name }}!</h1>
@endsection