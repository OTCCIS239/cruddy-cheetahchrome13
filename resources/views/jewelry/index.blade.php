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
                                        <a href="jewelry/create" class="btn btn-warning">Create New</a>
                                    </div>    

                                    <table class="table table-striped table-dark">
                                    @foreach ($jewelries as $jewelry)
                                        <!--$price = "$".number_format({{ $jewelry->price }}, 2);-->
                                    <!--<table class="table table-striped table-dark">-->
                                        <tr>
                                            <th scope="col">Jewelry ID</th>
                                            <th scope="col">Jewelry name</th>
                                            <th scope="col">Jewelry Type</th>
                                            <th scope="col" class="text-right">Price</th>
                                        </tr>
                                   
                                        <tr>
                                            <td><a class="btn btn-info" href="jewelry/{{ $jewelry->id }}">Details <i class="fas fa-chevron-right"></i></a></td>
                                            <td>{{ $jewelry->name }}</td>
                                            <td>{{ $jewelry->type }}</td>
                                            <td class="text-right">{{ $jewelry->price }}</td>
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