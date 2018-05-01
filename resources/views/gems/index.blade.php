@extends('layouts.app')

@section('content') 
            <!-- <pre>{{ json_encode(\App\Gem::all(), JSON_PRETTY_PRINT) }}</pre> -->
            <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                                <h2>Gems</h2>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="text-center">
                                        <a href="gems/create" class="btn btn-outline-success gap">Create New <i class="far fa-file-alt"></i></a>
                                    </div>    
                                    <table class="table table-striped table-dark">
                                    @foreach ($gems as $gem)

                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Gem name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col" class="text-right"></th>

                                        </tr>
                                   
                                        <tr>
                                            <td><a class="btn btn-outline-info" href="gems/{{ $gem->id }}">Details <i class="fas fa-chevron-right"></i></a></td>
                                            <td>{{ $gem->name }}</td>
                                            <td>${{ $gem->price }}</td>
                                            <td class="text-right"><a href="gems/{{ $gem->id }}/edit" class="btn btn-outline-warning">Edit <i class="far fa-edit"></i></a></td>
                                        </tr>
                                        
                                    @endforeach                               
                                    </table>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <div class="col-sm"></div>
            </div>
@stop