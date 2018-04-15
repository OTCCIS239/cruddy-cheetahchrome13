@extends('layouts.app')

@section('content')
            <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                                <h2>Tools</h2>
                            </div>
                            <div class="card-body">
                                <div>

                                    <div class="text-center">
                                        <a href="tools/create" class="btn btn-warning">Create New</a>
                                    </div>    

                                    <table class="table table-striped table-dark">
                                    @foreach ($tools as $tool)
                                        <!--$price = "$".number_format({{ $tool->price }}, 2);-->
                                    <!--<table class="table table-striped table-dark">-->
                                        <tr>
                                            <th scope="col">Tool ID</th>
                                            <th scope="col">Tool name</th>
                                            <th scope="col">Tool Type</th>
                                            <th scope="col" class="text-right">Price</th>
                                        </tr>
                                   
                                        <tr>
                                            <td><a class="btn btn-info" href="tools/{{ $tool->id }}">Details <i class="fas fa-chevron-right"></i></a></td>
                                            <td>{{ $tool->name }}</td>
                                            <td>{{ $tool->type }}</td>
                                            <td class="text-right">{{ $tool->price }}</td>
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