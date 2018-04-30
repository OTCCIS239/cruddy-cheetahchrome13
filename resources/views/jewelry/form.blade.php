
    <div class="form-group">
        <label for="jewelryNameInput">Jewelry Name</label>
        <input type="text" name="name" class="form-control" id="jewelryNameInput" value="{{ @$jewelry ? $jewelry->name : '' }}" required="required" aria-describedby="jewelryName" placeholder="Describe jewelry name">
    </div>

    <div class="form-group">
        <label for="jewelryTypeInput">Jewelry Type</label>
        <input type="text" name="type" class="form-control" id="jewelryTypeInput" value="{{ @$jewelry ? $jewelry->type : '' }}" required="required" aria-describedby="jewelryType" placeholder="Describe jewelry type">
    </div>
    
    <div class="form-group">
        <label for="jewelrySizeInput">Jewelry Size</label>
        <input type="text" name="size" class="form-control" id="jewelrySizeInput" value="{{ @$jewelry ? $jewelry->size : '' }}" required="required" aria-describedby="jewelrySize" placeholder="Describe jewelry size">

    <div class="form-group">
        <label for="jewelryDescriptionInput">Jewelry Description</label>
        <textarea class="form-control" type="text" name="description" id="jewelryDescriptionInput" rows="3 required="required" aria-describedby="jewelryDescription" placeholder="Describe the jewelry"">{{ @$jewelry ? $jewelry->description : '' }}</textarea>
    </div>

    <div class="form-group">
        <label for="jewelryPriceInput">Jewelry Price</label>
        <input type="text" name="price" class="form-control" id="jewelryPriceInput" value="{{ @$jewelry ? $jewelry->price : '' }}" required="required" pattern="^[+-]?[0-9]{1,3}(?:,?[0-9]{3})*\.[0-9]{2}$" aria-describedby="jewelryPrice" placeholder="Enter jewelry price -- 0.00">
    </div>

    <div class="form-group">
        <label for="jewelryStockInput">Stock Amount</label>
        <input type="number" name="stock" class="form-control" id="jewelryStockInput" value="{{ @$jewelry ? $jewelry->stock : '' }}" required="required" pattern="" aria-describedby="jewelryStock" placeholder="Enter stock amount -- 0">
    </div>

    <div class="form-group">
        <label for="jewelryImageInput">Jewelry Image URL</label>
        <select class="form-control" name="img" id="jewelryImageInput" value="{{ @$jewelry ? $jewelry->img : '' }}">
            <option>/images/default.jpg</option>
            <option>/images/gemIcon.jpg</option>
            <option>/images/jewelryIcon.jpg</option>
            <option>/images/metalIcon.jpg</option>
            <option>/images/toolIcon.jpg</option>
            <option>/images/supplyIcon.jpg</option>
        </select>
    </div>