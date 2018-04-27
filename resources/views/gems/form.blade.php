
                                            <div class="form-group">
                                                <label for="gemNameInput">Gem Name</label>
                                                <input type="text" class="form-control" id="gemNameInput" value="{{ @$gem ? $gem->name : '' }}" required="required" aria-describedby="gemName" placeholder="Describe gem name">
                                                <!--<small id="" class="form-text text-muted"></small>-->
                                            </div>

                                            <div class="form-group">
                                                <label for="gemTypeInput">Gem Type</label>
                                                <input type="text" class="form-control" id="gemTypeInput" value="{{ @$gem ? $gem->type : '' }}" required="required" aria-describedby="gemName" placeholder="Describe gem type">
                                            </div>

                                            <div class="form-group">
                                                <label for="gemCutInput">Gem Cut</label>
                                                <input type="text" class="form-control" id="gemCutInput" value="{{ @$gem ? $gem->cut : '' }}" required="required" aria-describedby="gemCut" placeholder="Describe gem cut">
                                            </div>

                                            <div class="form-group">
                                                <label for="gemSizeInput">Gem Size</label>
                                                <input type="text" class="form-control" id="gemSizeInput" value="{{ @$gem ? $gem->size : '' }}" required="required" aria-describedby="gemSize" placeholder="Describe gem size">
                                            </div>

                                            <div class="form-group">
                                                <label for="gemDescriptionInput">Gem Description</label>
                                                <textarea class="form-control" id="gemDescriptionInput" value="{{ @$gem ? $gem->description : '' }}" rows="3" required="required" aria-describedby="gemDescription" placeholder="Describe the gem"></textarea>
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="gemPriceInput">Gem Price</label>
                                                <input type="number" class="form-control" id="gemPriceInput" value="{{ @$gem ? $gem->price : '' }}" required="required" pattern="" aria-describedby="gemPrice" placeholder="Enter gem price -- 0.00">
                                            </div>

                                            <div class="form-group">
                                                <label for="gemStockInput">Stock Amount</label>
                                                <input type="number" class="form-control" id="gemStockInput" value="{{ @$gem ? $gem->stock : '' }}" required="required" pattern="" aria-describedby="gemStock" placeholder="Enter stock amount -- 0">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="gemImageInput">Gem Image URL</label>
                                                <select class="form-control" id="gemImageInput" value="{{ @$gem ? $gem->img : '' }}" >
                                                <option>/images/default.jpg</option>
                                                <option>/images/gemIcon.jpg</option>
                                                <option>/images/jewelryIcon.jpg</option>
                                                <option>/images/metalIcon.jpg</option>
                                                <option>/images/toolIcon.jpg</option>
                                                <option>/images/supplyIcon.jpg</option>
                                                </select>
                                            </div>
                                           