@extends('layouts.app')

@section('content')
    
    <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                                   
                            <h2>Supplies Details</h2>
                                
                                <div class='text-center'>
                                    <form action="supplies/{{ $supply->id }}" method="post">
                                        <a href="javascript:history.back()" class="btn btn-info"><i class="fas fa-chevron-left"></i> Previous Page</a>
                                        <input type="hidden" name="_method" value="delete">
                                        {{ csrf_field() }}
                                        
                                        <button class="btn btn-danger">
                                            Delete <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form> 
                                </div>

                            </div>
                            <div class="card-body">
                                <div>
                                    <h5 class="text-center">{{ $supply->name }}</h5>

                                    <table class="table table-striped table-dark">

                                        <tr>
                                            <th scope="col">Supplies name</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $supply->name }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">image</th>
                                        </tr>

                                        <tr>
                                            <td class="text-center"><img src="{{ $supply->img }}" alt="supply picture"></th>
                                        </tr>

                                        <tr>
                                            <th scope="col">Supply type</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $supply->type }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Description</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $supply->description }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Price</th>
                                        </tr>

                                        <tr>
                                            <td>${{ $supply->price }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">In Stock</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $supply->stock }}</td>
                                        </tr>
                                        
                                    </table>                                
                                </div>
                                <div class="text-center">
                                    <form action="supplies/{{ $supply->id }}" method="post">
                                        <a href="javascript:history.back()" class="btn btn-info"><i class="fas fa-chevron-left"></i> Previous Page</a>
                                        <input type="hidden" name="_method" value="delete">
                                        {{ csrf_field() }}
                                        
                                        <button class="btn btn-danger">
                                            Delete <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form> 
                                </div>      
                            </div>
                        </div>
                    </div>
                    <div class="col-sm"></div>
            </div>
@stop