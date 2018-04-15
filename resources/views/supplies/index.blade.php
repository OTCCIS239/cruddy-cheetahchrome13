@extends('layouts.app')

@section('content')
            <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                                <h2>Supplies</h2>
                            </div>
                            <div class="card-body">
                                <div>

                                    <div class="text-center">
                                        <a href="supplies/create" class="btn btn-warning gap">Create New <i class="far fa-file-alt"></i></a>
                                    </div>    

                                    <table class="table table-striped table-dark">
                                    @foreach ($supplies as $supply)
                                        <!--$price = "$".number_format({{ $supply->price }}, 2);-->
                                    <!--<table class="table table-striped table-dark">-->
                                        <tr>
                                            <th scope="col">Supply ID</th>
                                            <th scope="col">Supply name</th>
                                            <th scope="col">Supply Type</th>
                                            <th scope="col" class="text-right">Price</th>
                                        </tr>
                                   
                                        <tr>
                                            <td><a class="btn btn-info" href="supplies/{{ $supply->id }}">Details <i class="fas fa-chevron-right"></i></a></td>
                                            <td>{{ $supply->name }}</td>
                                            <td>{{ $supply->type }}</td>
                                            <td class="text-right">{{ $supply->price }}</td>
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