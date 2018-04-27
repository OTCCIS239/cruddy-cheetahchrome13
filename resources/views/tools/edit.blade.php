
@extends('layouts.app')

@section('content')
    <div class="row align-items-center" style="height: 100%;">
        <div class="col-sm"></div>
        <div class="col-sm-9">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                    <h2>Edit Tools Stock</h2>
                </div>
                <div class="card-body">
                    <div>
                        <h5 class="text-center"></h5>

                        <table class="table table-striped table-dark">
                            <form action="/tools/{{ $tool->id }}" method="post">
                                <input type="hidden" name="_method" value="PATCH">
                                {{ csrf_field() }}

                                @include('tools.form')
                               
                                <div class="text-center">
                                    <button type="submit" class="btn btn-warning"><i class="fab fa-telegram-plane"></i> Submit</button>
                                    <a href="javascript:history.back()" class="btn btn-danger">Cancel <i class="far fa-times-circle"></i></a>
                                </div>
                                
                            </form>  

                        </table>                                
                    </div>    
                </div>
            </div>
        </div>
    <div class="col-sm"></div>
</div>
    
@stop
