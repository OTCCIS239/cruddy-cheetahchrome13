@extends('layouts.app')

@section('content')
    <h1>This is the metals page</h1>
    <a href="{{ url('metals/silver') }}">Silver </a>
    <a href="{{ url('metals/create_form') }}"> Create</a>
@stop