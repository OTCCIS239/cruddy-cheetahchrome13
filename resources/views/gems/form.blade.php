
    <div class="form-group">
        <label for="gemNameInput">Gem Name</label>
        <input type="text" name="name" class="form-control" id="gemNameInput" value="{{ @$gem ? $gem->name : '' }}" required="required" placeholder="Describe gem name">
        <!-- need javascript to repopulate fields on page return for entry errors if using is-invalid bootstrap class - blade limits you here-->
    </div>

    <div class="form-group">
        <label for="gemTypeInput">Gem Type</label>
        <input type="text" name="type" class="form-control" id="gemTypeInput" value="{{ @$gem ? $gem->type : '' }}" required="required" placeholder="Describe gem type">
    </div>

    <div class="form-group">
        <label for="gemCutInput">Gem Cut</label>
        <input type="text" name="cut" class="form-control" id="gemCutInput" value="{{ @$gem ? $gem->cut : '' }}" required="required" placeholder="Describe gem cut">
    </div>

    <div class="form-group">
        <label for="gemSizeInput">Gem Size</label>
        <input type="text" name="size" class="form-control" id="gemSizeInput" value="{{ @$gem ? $gem->size : '' }}" required="required" placeholder="Describe gem size">
    </div>

    <div class="form-group">
        <label for="gemDescriptionInput">Gem Description</label>
        <textarea class="form-control" name="description" id="gemDescriptionInput" rows="3" required="required" placeholder="Describe the gem">{{ @$gem ? $gem->description : '' }}</textarea>
    </div>

    <div class="form-group">
        <label for="gemPriceInput">Gem Price</label>
        <input type="text" name="price" class="form-control" id="gemPriceInput" value="{{ @$gem ? $gem->price : '' }}" pattern="^[+-]?[0-9]{1,3}(?:,?[0-9]{3})*\.[0-9]{2}$" required="required" placeholder="Enter gem price -- 0.00">
    </div>

    <div class="form-group">
        <label for="gemStockInput">Stock Amount</label>
        <input type="number" name="stock" class="form-control" id="gemStockInput" value="{{ @$gem ? $gem->stock : '' }}" pattern="" required="required" placeholder="Enter stock amount -- 0">
    </div>

    <div class="form-group">
        <label for="gemImageInput">Gem Image URL</label>
        <select name="img" class="form-control" id="gemImageInput" required="required" value="{{ @$gem ? $gem->img : '' }}" >
            <option>/images/default.jpg</option>
            <option>/images/gemIcon.jpg</option>
            <option>/images/jewelryIcon.jpg</option>
            <option>/images/metalIcon.jpg</option>
            <option>/images/toolIcon.jpg</option>
            <option>/images/supplyIcon.jpg</option>
        </select>
    </div>
                                            