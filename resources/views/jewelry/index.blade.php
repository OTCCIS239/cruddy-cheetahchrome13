@extends('layouts.app')

@section('content')
    <h1>This is the jewelry page</h1>
    <a href="{{ url('jewelry/rings') }}">Rings </a>
    <a href="{{ url('jewelry/create_form') }}"> Create</a>
@stop