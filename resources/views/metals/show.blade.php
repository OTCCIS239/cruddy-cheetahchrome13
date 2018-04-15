@extends('layouts.app')

@section('content')
    
    <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                                <h2>Metal Details</h2>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h5 class="text-center">{{ $a_metal->name }}</h5>

                                    <div class="text-center">
                                        <a href="metals/edit" class="btn btn-warning">Edit</a>
                                    </div>     

                                    <table class="table table-striped table-dark">

                                        <tr>
                                        <!-- need help with syntax here to display image -->
                                            <th scope="col">image</th>
                                        </tr>

                                        <tr>
                                        <!-- need help with syntax here to display image -->
                                            <td><img src="{{ $a_metal->img }}" alt="metal picture"></th>
                                        </tr>

                                        <tr>
                                            <th scope="col">Metal type</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_metal->type }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Description</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_metal->description }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">Price</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_metal->price }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="col">In Stock</th>
                                        </tr>

                                        <tr>
                                            <td>{{ $a_metal->stock }}</td>
                                        </tr>
                                        
                                    </table>                                
                                </div>
                                <div class="text-center">
                                    <a href="javascript:history.back()" class="btn btn-info"><i class="fas fa-chevron-left"></i> Previous Page</a>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <div class="col-sm"></div>
            </div>
@stop