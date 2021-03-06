@extends('layouts.app')

@section('content')
    
    <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                                <h2>Metal Details</h2>                                
                                <div class='text-center'>
                                    <form action="/metals/{{ $metal->id }}" method="post">                           
                                        <input type="hidden" name="_method" value="delete">
                                        {{ csrf_field() }}
                                        
                                        <button class="btn btn-outline-warning">
                                            Delete <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>

                            </div>
                            <div class="card-body">
                                <div>
                                    <h5 class="text-center">{{ $metal->name }}</h5>

                                    <table class="table table-striped table-dark">

                                        <tr>
                                            <th scope="col">Metal name</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $metal->name }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">image</th>
                                        </tr>

                                        <tr>
                                            <td class="text-center"><img src="{{ $metal->img }}" alt="metal picture"></th>
                                        </tr>

                                        <tr>
                                            <th scope="col">Metal type</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $metal->type }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Metal form</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $metal->form }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Description</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $metal->description }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Price</th>
                                        </tr>

                                        <tr>
                                            <td>${{ $metal->price }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">In Stock</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $metal->stock }}</td>
                                        </tr>
                                        
                                    </table>                                
                                </div>
                                <div class="text-center">
                                    <a href="javascript:history.back()" class="btn btn-outline-info"><i class="fas fa-chevron-left"></i> Previous Page</a>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <div class="col-sm"></div>
            </div>
@stop