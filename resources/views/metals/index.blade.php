@extends('layouts.app')

@section('content')
            <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                                <h2>Metals</h2>
                            </div>
                            <div class="card-body">
                                <div>

                                    <div class="text-center">
                                        <a href="metals/create" class="btn btn-warning gap">Create New <i class="far fa-file-alt"></i></a>
                                    </div>    

                                    <table class="table table-striped table-dark">
                                    @foreach ($metals as $metal)
                                   
                                        <tr>
                                            <th scope="col">Metal ID</th>
                                            <th scope="col">Metal name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col" class="text-right"></th>
                                        </tr>
                                   
                                        <tr>
                                            <td><a class="btn btn-info" href="metals/{{ $metal->id }}">Details <i class="fas fa-chevron-right"></i></a></td>
                                            <td>{{ $metal->name }}</td>
                                            <td>${{ $metal->price }}</td>
                                            <td class="text-right"><a href="metals/{{ $metal->id }}/edit" class="btn btn-warning">Edit <i class="far fa-edit"></i></a></td>
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