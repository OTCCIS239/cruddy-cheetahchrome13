
                                <div class="form-group">
                                    <label for="toolsNameInput">Tools Name</label>
                                    <input type="text" class="form-control" id="toolsNameInput" value="{{ @$tool ? $tool->name : '' }}" required="required" aria-describedby="toolsName" placeholder="Describe tool name">
                                </div>

                                <div class="form-group">
                                    <label for="toolsTypeInput">Tools Type</label>
                                    <input type="text" class="form-control" id="toolsTypeInput" value="{{ @$tool ? $tool->type : '' }}" required="required" aria-describedby="toolsName" placeholder="Describe tool type">
                                </div>

                                <div class="form-group">
                                    <label for="toolsDescriptionInput">Tools Description</label>
                                    <textarea class="form-control" id="toolsDescriptionInput" value="{{ @$tool ? $tool->description : '' }}" required="required" rows="3" aria-describedby="toolsDescription" placeholder="Describe the tool"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="toolsPriceInput">Tools Price</label>
                                    <input type="number" class="form-control" id="toolsPriceInput" value="{{ @$tool ? $tool->price : '' }}" required="required" pattern="" aria-describedby="toolsPrice" placeholder="Enter tool price -- 0.00">
                                </div>

                                <div class="form-group">
                                    <label for="toolsStockInput">Stock Amount</label>
                                    <input type="number" class="form-control" id="toolsStockInput" value="{{ @$tool ? $tool->stock : '' }}" required="required" pattern="" aria-describedby="toolsStock" placeholder="Enter stock amount -- 0">
                                </div>

                                <div class="form-group">
                                    <label for="toolsImageInput">Tools Image URL</label>
                                    <select class="form-control" id="toolsImageInput" value="{{ @$tool ? $tool->img : '' }}" >
                                    <option>/images/default.jpg</option>
                                    <option>/images/gemIcon.jpg</option>
                                    <option>/images/jewelryIcon.jpg</option>
                                    <option>/images/metalIcon.jpg</option>
                                    <option>/images/toolIcon.jpg</option>
                                    <option>/images/supplyIcon.jpg</option>
                                    </select>
                                </div>