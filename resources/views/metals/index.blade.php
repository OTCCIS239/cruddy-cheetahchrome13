@extends('layouts.app')

@section('content')
            <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-warning mb-3">
                                <h2>Metals</h2>
                            </div>
                            <div class="card-body">
                                <div>

                                    <div class="text-center">
                                        <a href="metals/create" class="btn btn-primary">Create New</a>
                                    </div>    

                                    <table class="table table-striped table-dark">
                                    @foreach ($metals as $metal)
                                        $price = "$".number_format({{ $metal->price }}, 2);
                                    <!--<table class="table table-striped table-dark">-->
                                        <tr>
                                            <th scope="col">Metal ID</th>
                                            <th scope="col">Metal name</th>
                                            <th scope="col">Metal Type</th>
                                            <th scope="col" class="text-right">Price</th>
                                        </tr>
                                   
                                        <tr>
                                            <td><a class="btn btn-primary" href="metals/{{ $metal->id }}">Details <i class="fas fa-chevron-right"></i></a></td>
                                            <td>{{ $metal->name }}</td>
                                            <td>{{ $metal->type }}</td>
                                            <td class="text-right">{{ $price }}</td>
                                        </tr>
                                       
                                    <!--</table>-->       
                                    @endforeach;
                                    </table>

                                </div>      
                            </div>
                        </div>
                    </div>
                    <div class="col-sm"></div>
            </div>
@stop