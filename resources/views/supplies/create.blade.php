@extends('layouts.app')

@section('content')
    <div class="row align-items-center" style="height: 100%;">
        <div class="col-sm"></div>
        <div class="col-sm-9">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                    <h2>Create New Supplies Stock</h2>
                </div>
                <div class="card-body">
                    <div>
                        <h5 class="text-center"></h5>

                        <table class="table table-striped table-dark">


                            <form action="/supplies" method="post">

                            {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="suppliesNameInput">Supplies Name</label>
                                    <input type="text" class="form-control" id="suppliesNameInput" required="required" aria-describedby="suppliesName" placeholder="Describe supplies name" value="{{ old('name') }}">
                                    <!--<small id="" class="form-text text-muted"></small>-->
                                </div>

                                <div class="form-group">
                                    <label for="suppliesTypeInput">Supplies Type</label>
                                    <input type="text" class="form-control" id="suppliesTypeInput" required="required" aria-describedby="suppliesName" placeholder="Describe supplies type" value="{{ old('type') }}">
                                </div>

                                <div class="form-group">
                                    <label for="suppliesDescriptionInput">Supplies Description</label>
                                    <textarea class="form-control" id="suppliesDescriptionInput" rows="3" required="required" aria-describedby="suppliesDescription" placeholder="Describe the supplies" value="{{ old('description') }}"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="suppliesPriceInput">Supplies Price</label>
                                    <input type="number" class="form-control" id="suppliesPriceInput" required="required" pattern="" aria-describedby="suppliesPrice" placeholder="Enter supplies price -- 0.00" value="{{ old('price') }}">
                                </div>

                                <div class="form-group">
                                    <label for="suppliesStockInput">Stock Amount</label>
                                    <input type="number" class="form-control" id="suppliesStockInput" required="required" pattern="" aria-describedby="suppliesStock" placeholder="Enter stock amount -- 0" value="{{ old('stock') }}">
                                </div>

                                <div class="form-group">
                                    <label for="suppliesImageInput">Supplies Image URL</label>
                                    <select class="form-control" id="suppliesImageInput" value="{{ old('img') }}">
                                    <option>/images/default.jpg</option>
                                    <option>/images/gemIcon.jpg</option>
                                    <option>/images/jewelryIcon.jpg</option>
                                    <option>/images/metalIcon.jpg</option>
                                    <option>/images/toolIcon.jpg</option>
                                    <option>/images/supplyIcon.jpg</option>
                                    </select>
                                </div>
                                
                                <!-- <div class="form-group">
                                    <label for="suppliesImageInput">Supplies Image URL</label>
                                    <input type="url" class="form-control" id="suppliesImageInput" pattern="" aria-describedby="suppliesImageUrl" placeholder="Enter image URL -- /images/image.jpg&emsp;&emsp;This field not required">
                                </div> -->
                                
                                <div class="text-center">
                                    <button type="submit" href="" class="btn btn-warning"><i class="fab fa-telegram-plane"></i> Submit</button>
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
