
                                <div class="form-group">
                                    <label for="jewelryNameInput">Jewelry Name</label>
                                    <input type="text" class="form-control" id="jewelryNameInput" value="{{ @$jewelry ? $jewelry->name : '' }}" required="required" aria-describedby="jewelryName" placeholder="Describe jewelry name">
                                </div>

                                <div class="form-group">
                                    <label for="jewelryTypeInput">Jewelry Type</label>
                                    <input type="text" class="form-control" id="jewelryTypeInput" value="{{ @$jewelry ? $jewelry->type : '' }}" required="required" aria-describedby="jewelryType" placeholder="Describe jewelry type">
                                </div>
                                
                                <div class="form-group">
                                    <label for="jewelrySizeInput">Jewelry Size</label>
                                    <input type="text" class="form-control" id="jewelrySizeInput" value="{{ @$jewelry ? $jewelry->size : '' }}" required="required" aria-describedby="jewelrySize" placeholder="Describe jewelry size">

                                <div class="form-group">
                                    <label for="jewelryDescriptionInput">Jewelry Description</label>
                                    <textarea class="form-control" id="jewelryDescriptionInput" value="{{ @$jewelry ? $jewelry->description : '' }}" rows="3 required="required" aria-describedby="jewelryDescription" placeholder="Describe the jewelry""></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="jewelryPriceInput">Jewelry Price</label>
                                    <input type="number" class="form-control" id="jewelryPriceInput" value="{{ @$jewelry ? $jewelry->price : '' }}" required="required" pattern="" aria-describedby="jewelryPrice" placeholder="Enter jewelry price -- 0.00">
                                </div>

                                <div class="form-group">
                                    <label for="jewelryStockInput">Stock Amount</label>
                                    <input type="number" class="form-control" id="jewelryStockInput" value="{{ @$jewelry ? $jewelry->stock : '' }}" required="required" pattern="" aria-describedby="jewelryStock" placeholder="Enter stock amount -- 0">
                                </div>

                                <div class="form-group">
                                    <label for="jewelryImageInput">Jewelry Image URL</label>
                                    <select class="form-control" id="jewelryImageInput" value="{{ @$jewelry ? $jewelry->img : '' }}">
                                    <option>/images/default.jpg</option>
                                    <option>/images/gemIcon.jpg</option>
                                    <option>/images/jewelryIcon.jpg</option>
                                    <option>/images/metalIcon.jpg</option>
                                    <option>/images/toolIcon.jpg</option>
                                    <option>/images/supplyIcon.jpg</option>
                                    </select>
                                </div>