@extends('layouts.app')

@section('content')
    <h1>This is the gems page</h1>
    <a href="{{ url('gems/rubies') }}">Rubies </a>
    <a href="{{ url('gems/create_form') }}"> Create</a>
@stop