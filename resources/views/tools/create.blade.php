@extends('layouts.app')

@section('content')
    <div class="row align-items-center" style="height: 100%;">
        <div class="col-sm"></div>
        <div class="col-sm-9">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header text-center font-weight-bold text-white bg-secondary mb-3">
                    <h2>Create New Tools Stock</h2>
                </div>
                <div class="card-body">
                    <div>
                        <h5 class="text-center"></h5>

                        <table class="table table-striped table-dark">


                            <form>

                                <div class="form-group">
                                    <label for="toolsNameInput">Tools Name</label>
                                    <input type="text" class="form-control" id="toolsNameInput" required="required" aria-describedby="toolsName" placeholder="Describe tool name">
                                    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                </div>

                                <div class="form-group">
                                    <label for="toolsTypeInput">Tools Type</label>
                                    <input type="text" class="form-control" id="toolsTypeInput" required="required" aria-describedby="toolsName" placeholder="Describe tool type">
                                </div>

                                <div class="form-group">
                                    <label for="toolsDescriptionInput">Tools Description</label>
                                    <textarea class="form-control" id="toolsDescriptionInput" rows="3" required="required" aria-describedby="toolsDescription" placeholder="Describe the tool"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="toolsPriceInput">Tools Price</label>
                                    <input type="number" class="form-control" id="toolsPriceInput" required="required" pattern="" aria-describedby="toolsPrice" placeholder="Enter tool price -- 0.00">
                                </div>

                                <div class="form-group">
                                    <label for="toolsStockInput">Stock Amount</label>
                                    <input type="number" class="form-control" id="toolsStockInput" required="required" pattern="" aria-describedby="toolsStock" placeholder="Enter stock amount -- 0">
                                </div>
                                
                                <div class="form-group">
                                    <label for="toolsImageInput">Tools Image URL</label>
                                    <input type="url" class="form-control" id="toolsImageInput" pattern="" aria-describedby="toolsImageUrl" placeholder="Enter image URL -- images/image.jpg -- This field not required">
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
