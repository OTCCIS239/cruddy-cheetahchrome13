@extends('layouts.app')

@section('content')
    
    <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                
                                <h2>Gem Details</h2>
                                
                                <div class='text-center'>
                                    <a href="javascript:history.back()" class="btn btn-info"><i class="fas fa-chevron-left"></i> Previous Page</a>
                                    <a href="gems/edit" class="btn btn-warning">Edit Details <i class="far fa-edit"></i></a>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <div>
                                    <h5 class="text-center">{{ $a_gem->name }}</h5>

                                    <table class="table table-striped table-dark">

                                        <tr>
                                            <th scope="col">Gem name</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_gem->name }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">image</th>
                                        </tr>

                                        <tr>
                                            <td class="text-center"><img src="{{ asset($a_gem->img) }}" alt="gem picture"></td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Gem type</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_gem->type }}</td>

                                        <tr>
                                            <th scope="col">Gem cut</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_gem->cut }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Gem size</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_gem->size }}</td>
                                        </tr>

                                        </tr>

                                        <tr>
                                            <th scope="col">Description</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_gem->description }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Price</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_gem->price }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">In Stock</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_gem->stock }}</td>
                                        </tr>
                                        
                                    </table>                                
                                </div>
                                <div class="text-center">
                                    <a href="javascript:history.back()" class="btn btn-info"><i class="fas fa-chevron-left"></i> Previous Page</a>
                                    <a href="gems/edit" class="btn btn-warning">Edit Details <i class="far fa-edit"></i></a>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <div class="col-sm"></div>
            </div>

@stop