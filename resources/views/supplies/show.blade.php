@extends('layouts.app')

@section('content')
    
    <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                                   
                            <h2>Supplies Details</h2>
                                
                                <div class='text-center'>
                                    <a href="javascript:history.back()" class="btn btn-info"><i class="fas fa-chevron-left"></i> Previous Page</a>
                                    <a href="supplies/edit" class="btn btn-warning">Edit Details <i class="far fa-edit"></i></a>
                                </div>

                            </div>
                            <div class="card-body">
                                <div>
                                    <h5 class="text-center">{{ $a_supply->name }}</h5>

                                    <table class="table table-striped table-dark">

                                        <tr>
                                            <th scope="col">Supplies name</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_supply->name }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">image</th>
                                        </tr>

                                        <tr>
                                            <td class="text-center"><img src="{{ $a_supply->img }}" alt="supply picture"></th>
                                        </tr>

                                        <tr>
                                            <th scope="col">Supply type</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_supply->type }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Description</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_supply->description }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Price</th>
                                        </tr>

                                        <tr>
                                            <td>${{ $a_supply->price }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">In Stock</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_supply->stock }}</td>
                                        </tr>
                                        
                                    </table>                                
                                </div>
                                <div class="text-center">
                                    <a href="javascript:history.back()" class="btn btn-info"><i class="fas fa-chevron-left"></i> Previous Page</a>
                                    <a href="supplies/edit" class="btn btn-warning">Edit Details <i class="far fa-edit"></i></a>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <div class="col-sm"></div>
            </div>
@stop