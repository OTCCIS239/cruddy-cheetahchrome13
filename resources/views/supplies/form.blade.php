
                                <div class="form-group">
                                    <label for="suppliesNameInput">Supplies Name</label>
                                    <input type="text" class="form-control" id="suppliesNameInput" value="{{ @$supply ? $supply->name : '' }}" required="required" aria-describedby="suppliesName" placeholder="Describe supplies name">
                                </div>

                                <div class="form-group">
                                    <label for="suppliesTypeInput">Supplies Type</label>
                                    <input type="text" class="form-control" id="suppliesTypeInput" value="{{ @$supply ? $supply->type : '' }}" required="required" aria-describedby="suppliesName" placeholder="Describe supplies type">
                                </div>

                                <div class="form-group">
                                    <label for="suppliesDescriptionInput">Supplies Description</label>
                                    <textarea class="form-control" id="suppliesDescriptionInput" value="{{ @$supply ? $supply->description : '' }}" rows="3" required="required" aria-describedby="suppliesDescription" placeholder="Describe the supplies"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="suppliesPriceInput">Supplies Price</label>
                                    <input type="number" class="form-control" id="suppliesPriceInput" value="{{ @$supply ? $supply->price : '' }}" required="required" pattern="" aria-describedby="suppliesPrice" placeholder="Enter supplies price -- 0.00">
                                </div>

                                <div class="form-group">
                                    <label for="suppliesStockInput">Stock Amount</label>
                                    <input type="number" class="form-control" id="suppliesStockInput" value="{{ @$supply ? $supply->stock : '' }}" required="required" pattern="" aria-describedby="suppliesStock" placeholder="Enter stock amount -- 0">
                                </div>

                                <div class="form-group">
                                    <label for="suppliesImageInput">Supplies Image URL</label>
                                    <select class="form-control" id="suppliesImageInput" value="{{ @$supply ? $supply->img : '' }}" >
                                    <option>/images/default.jpg</option>
                                    <option>/images/gemIcon.jpg</option>
                                    <option>/images/jewelryIcon.jpg</option>
                                    <option>/images/metalIcon.jpg</option>
                                    <option>/images/toolIcon.jpg</option>
                                    <option>/images/supplyIcon.jpg</option>
                                    </select>
                                </div>