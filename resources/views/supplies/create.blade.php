@extends('layouts.app')

@section('content')
    <div class="row align-items-center" style="height: 100%;">
        <div class="col-sm"></div>
        <div class="col-sm-9">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header text-center font-weight-bold text-white bg-warning mb-3">
                    <h2>Create New Supplies Stock</h2>
                </div>
                <div class="card-body">
                    <div>
                        <h5 class="text-center"></h5>

                        <table class="table table-striped table-dark">


                            <form>

                                <div class="form-group">
                                    <label for="suppliesNameInput">Supplies Name</label>
                                    <input type="text" class="form-control" id="suppliesNameInput" required="required" aria-describedby="suppliesName" placeholder="Describe supplies name">
                                    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                </div>

                                <div class="form-group">
                                    <label for="suppliesTypeInput">Supplies Type</label>
                                    <input type="text" class="form-control" id="suppliesTypeInput" required="required" aria-describedby="suppliesName" placeholder="Describe supplies type">
                                </div>

                                <div class="form-group">
                                    <label for="suppliesDescriptionInput">Supplies Description</label>
                                    <input type="text" class="form-control" id="suppliesDescriptionInput" required="required" aria-describedby="suppliesDescription" placeholder="Describe the supplies">
                                </div>

                                <div class="form-group">
                                    <label for="suppliesPriceInput">Supplies Price</label>
                                    <input type="number" class="form-control" id="suppliesPriceInput" required="required" pattern="" aria-describedby="suppliesPrice" placeholder="Enter supplies price -- 0.00">
                                </div>

                                <div class="form-group">
                                    <label for="suppliesStockInput">Stock Amount</label>
                                    <input type="number" class="form-control" id="suppliesStockInput" required="required" pattern="" aria-describedby="suppliesStock" placeholder="Enter stock amount -- 0">
                                </div>
                                
                                <div class="form-group">
                                    <label for="suppliesImageInput">Supplies Image URL</label>
                                    <input type="url" class="form-control" id="suppliesImageInput" pattern="" aria-describedby="suppliesImageUrl" placeholder="Enter image URL -- images/image.jpg -- not required">
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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