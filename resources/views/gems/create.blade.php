@extends('layouts.app')

@section('content')
                <div class="row align-items-center" style="height: 100%;">
                    <div class="col-sm"></div>
                    <div class="col-sm-9">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header text-center font-weight-bold text-white bg-warning mb-3">
                                <h2>Create New Gem Stock</h2>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h5 class="text-center"></h5>

                                    <table class="table table-striped table-dark">

                                        <form>

                                            <div class="form-group">
                                                <label for="gemNameInput">Gem Name</label>
                                                <input type="text" class="form-control" id="gemNameInput" required="required" aria-describedby="gemName" placeholder="Describe gem name">
                                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                            </div>

                                            <div class="form-group">
                                                <label for="gemTypeInput">Gem Type</label>
                                                <input type="text" class="form-control" id="gemTypeInput" required="required" aria-describedby="gemName" placeholder="Describe gem type">
                                            </div>

                                            <div class="form-group">
                                                <label for="gemCutInput">Gem Cut</label>
                                                <input type="text" class="form-control" id="gemCutInput" required="required" aria-describedby="gemCut" placeholder="Describe gem cut">
                                            </div>

                                            <div class="form-group">
                                                <label for="gemSizeInput">Gem Size</label>
                                                <input type="text" class="form-control" id="gemSizeInput" required="required" aria-describedby="gemSize" placeholder="Describe gem size">
                                            </div>

                                            <div class="form-group">
                                                <label for="gemDescriptionInput">Gem Description</label>
                                                <input type="text" class="form-control" id="gemDescriptionInput" required="required" aria-describedby="gemDescription" placeholder="Describe the gem">
                                            </div>

                                            <div class="form-group">
                                                <label for="gemPriceInput">Gem Price</label>
                                                <input type="number" class="form-control" id="gemPriceInput" required="required" pattern="" aria-describedby="gemPrice" placeholder="Enter gem price -- 0.00">
                                            </div>

                                            <div class="form-group">
                                                <label for="gemStockInput">Stock Amount</label>
                                                <input type="number" class="form-control" id="gemStockInput" required="required" pattern="" aria-describedby="gemStock" placeholder="Enter stock amount -- 0">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="gemImageInput">Gem Image URL</label>
                                                <input type="url" class="form-control" id="gemImageInput" pattern="" aria-describedby="gemImageUrl" placeholder="Enter image URL -- images/image.jpg -- not required">
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