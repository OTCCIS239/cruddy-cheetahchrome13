@extends('layouts.app')

@section('content')
    <h1>This is the supplies page</h1>
    <a href="{{ url('supplies/saw_blades') }}">Saw Blades </a>
    <a href="{{ url('supplies/create_form') }}"> Create</a>
@stop