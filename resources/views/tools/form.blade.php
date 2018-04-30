
    <div class="form-group">
        <label for="toolsNameInput">Tools Name</label>
        <input type="text" name="name" class="form-control" id="toolsNameInput" value="{{ @$tool ? $tool->name : '' }}" required="required" aria-describedby="toolsName" placeholder="Describe tool name">
    </div>

    <div class="form-group">
        <label for="toolsTypeInput">Tools Type</label>
        <input type="text" name="type" class="form-control" id="toolsTypeInput" value="{{ @$tool ? $tool->type : '' }}" required="required" aria-describedby="toolsName" placeholder="Describe tool type">
    </div>

    <div class="form-group">
        <label for="toolsDescriptionInput">Tools Description</label>
        <textarea class="form-control" name="description" id="toolsDescriptionInput" required="required" rows="3" aria-describedby="toolsDescription" placeholder="Describe the tool">{{ @$tool ? $tool->description : '' }}</textarea>
    </div>

    <div class="form-group">
        <label for="toolsPriceInput">Tools Price</label>
        <input type="text" name="price" class="form-control" id="toolsPriceInput" value="{{ @$tool ? $tool->price : '' }}" required="required" pattern="^[+-]?[0-9]{1,3}(?:,?[0-9]{3})*\.[0-9]{2}$" aria-describedby="toolsPrice" placeholder="Enter tool price -- 0.00">
    </div>

    <div class="form-group">
        <label for="toolsStockInput">Stock Amount</label>
        <input type="number" name="stock" class="form-control" id="toolsStockInput" value="{{ @$tool ? $tool->stock : '' }}" required="required" pattern="" aria-describedby="toolsStock" placeholder="Enter stock amount -- 0">
    </div>

    <div class="form-group">
        <label for="toolsImageInput">Tools Image URL</label>
        <select class="form-control" name="img" id="toolsImageInput" value="{{ @$tool ? $tool->img : '' }}" >
            <option>/images/default.jpg</option>
            <option>/images/gemIcon.jpg</option>
            <option>/images/jewelryIcon.jpg</option>
            <option>/images/metalIcon.jpg</option>
            <option>/images/toolIcon.jpg</option>
            <option>/images/supplyIcon.jpg</option>
        </select>
    </div>