@extends('layouts.app')

@section('content')
    <div class="row align-items-center" style="height: 100%;">
        <div class="col-sm"></div>
        <div class="col-sm-9">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                    <h2>Create New Metal Stock</h2>
                </div>
                <div class="card-body">
                    <div>
                        <h5 class="text-center"></h5>

                        <table class="table table-striped table-dark">


                            <form>

                                <div class="form-group">
                                    <label for="metalNameInput">Metal Name</label>
                                    <input type="text" class="form-control" id="metalNameInput" required="required" aria-describedby="metalName" placeholder="Describe metal name">
                                    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                </div>

                                <div class="form-group">
                                    <label for="metalTypeInput">Metal Type</label>
                                    <input type="text" class="form-control" id="metalTypeInput" required="required" aria-describedby="metalType" placeholder="Describe metal type">
                                </div>

                                <div class="form-group">
                                    <label for="metalFormInput">Metal Form</label>
                                    <input type="text" class="form-control" id="metalFormInput" required="required" aria-describedby="metalForm" placeholder="Describe metal form">
                                </div>

                                <div class="form-group">
                                    <label for="metalDescriptionInput">Metal Description</label>
                                    <textarea class="form-control" id="metalDescriptionInput" rows="3" required="required" aria-describedby="metalDescription" placeholder="Describe the metal"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="metalPriceInput">Metal Price</label>
                                    <input type="number" class="form-control" id="metalPriceInput" required="required" pattern="" aria-describedby="metalPrice" placeholder="Enter metal price -- 0.00">
                                </div>

                                <div class="form-group">
                                    <label for="metalStockInput">Stock Amount</label>
                                    <input type="number" class="form-control" id="metalStockInput" required="required" pattern="" aria-describedby="metalStock" placeholder="Enter stock amount -- 0">
                                </div>
                                
                                <div class="form-group">
                                    <label for="metalImageInput">Metal Image URL</label>
                                    <input type="url" class="form-control" id="metalImageInput" pattern="" aria-describedby="metalImageUrl" placeholder="Enter image URL -- images/image.jpg&emsp;&emsp;This field not required">
                                </div>
                                
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
