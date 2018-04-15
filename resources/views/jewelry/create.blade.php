@extends('layouts.app')

@section('content')
    <div class="row align-items-center" style="height: 100%;">
        <div class="col-sm"></div>
        <div class="col-sm-9">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                    <h2>Create New Jewelry Stock</h2>
                </div>
                <div class="card-body">
                    <div>
                        <h5 class="text-center"></h5>

                        <table class="table table-striped table-dark">


                            <form>

                                <div class="form-group">
                                    <label for="jewelryNameInput">Jewelry Name</label>
                                    <input type="text" class="form-control" id="jewelryNameInput" required="required" aria-describedby="jewelryName" placeholder="Describe jewelry name">
                                    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                </div>

                                <div class="form-group">
                                    <label for="jewelryTypeInput">Jewelry Type</label>
                                    <input type="text" class="form-control" id="jewelryTypeInput" required="required" aria-describedby="jewelryName" placeholder="Describe jewelry type">
                                </div>

                                <div class="form-group">
                                    <label for="jewelryDescriptionInput">Jewelry Description</label>
                                    <input type="text" class="form-control" id="jewelryDescriptionInput" required="required" aria-describedby="jewelryDescription" placeholder="Describe the jewelry">
                                </div>

                                <div class="form-group">
                                    <label for="jewelryPriceInput">Jewelry Price</label>
                                    <input type="number" class="form-control" id="jewelryPriceInput" required="required" pattern="" aria-describedby="jewelryPrice" placeholder="Enter jewelry price -- 0.00">
                                </div>

                                <div class="form-group">
                                    <label for="jewelryStockInput">Stock Amount</label>
                                    <input type="number" class="form-control" id="jewelryStockInput" required="required" pattern="" aria-describedby="jewelryStock" placeholder="Enter stock amount -- 0">
                                </div>
                                
                                <div class="form-group">
                                    <label for="jewelryImageInput">Jewelry Image URL</label>
                                    <input type="url" class="form-control" id="jewelryImageInput" pattern="" aria-describedby="jewelryImageUrl" placeholder="Enter image URL -- images/image.jpg -- not required">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-warning">Submit</button>
                                    <a href="javascript:history.back()" class="btn btn-danger"><i class="fas fa-chevron-left"></i>Cancel</a>
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
