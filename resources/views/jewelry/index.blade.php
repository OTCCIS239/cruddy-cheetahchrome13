@extends('layouts.app')

@section('content')
            <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                                <h2>Jewelry</h2>
                            </div>
                            <div class="card-body">
                                <div>

                                    <div class="text-center">
                                        <a href="jewelry/create" class="btn btn-outline-success gap">Create New <i class="far fa-file-alt"></i></a>
                                    </div>    

                                    <table class="table table-striped table-dark">
                                    @foreach ($jewelries as $jewelry)
                                  
                                        <tr>
                                            <th scope="col">Jewelry ID</th>
                                            <th scope="col">Jewelry name</th>                                           
                                            <th scope="col">Price</th>
                                            <th scope="col" class="text-right"></th>
                                        </tr>
                                   
                                        <tr>
                                            <td><a class="btn btn-outline-info" href="jewelry/{{ $jewelry->id }}">Details <i class="fas fa-chevron-right"></i></a></td>
                                            <td>{{ $jewelry->name }}</td>
                                            <td>${{ $jewelry->price }}</td>
                                            <td class="text-right"><a href="jewelry/{{ $jewelry->id }}/edit" class="btn btn-outline-warning">Edit <i class="far fa-edit"></i></a></td>
                                        </tr>
                                       
                                    <!--</table>-->       
                                    @endforeach
                                    </table>

                                </div>      
                            </div>
                        </div>
                    </div>
                    <div class="col-sm"></div>
            </div>
@stop