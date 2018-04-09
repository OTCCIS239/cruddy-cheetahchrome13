@extends('layouts.app')

@section('content')
    <h1>This is the tools page</h1>
    <a href="{{ url('tools/pliers') }}">Pliers </a>
    <a href="{{ url('tools/create_form') }}"> Create</a>
@stop