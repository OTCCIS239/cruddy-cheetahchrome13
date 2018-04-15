@extends('layouts.app')

@section('content')

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
                                        <a href="gems/create" class="btn btn-warning">Create New</a>
                                    </div>    

                                    <table class="table table-striped table-dark">
                                    @foreach ($gems as $gem)
                                        <!--$price = "$".number_format({{ $gem->price }}, 2);-->
                                    <!--<table class="table table-striped table-dark">-->
                                        <tr>
                                            <th scope="col">Gem ID</th>
                                            <th scope="col">Gem name</th>
                                            <th scope="col">Gem Type</th>
                                            <th scope="col" class="text-right">Price</th>
                                        </tr>
                                   
                                        <tr>
                                            <td><a class="btn btn-info" href="gems/{{ $gem->id }}">Details <i class="fas fa-chevron-right"></i></a></td>
                                            <td>{{ $gem->name }}</td>
                                            <td>{{ $gem->type }}</td>
                                            <td class="text-right">{{ $gem->price }}</td>
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