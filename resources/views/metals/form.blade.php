
    <div class="form-group">
        <label for="metalNameInput">Metal Name</label>
        <input type="text" name="name" class="form-control" id="metalNameInput" value="{{ @$metal ? $metal->name : '' }}" required="required" aria-describedby="metalName" placeholder="Describe metal name">
        
    </div>

    <div class="form-group">
        <label for="metalTypeInput">Metal Type</label>
        <input type="text" name="type" class="form-control" id="metalTypeInput" value="{{ @$metal ? $metal->type : '' }}" required="required" aria-describedby="metalType" placeholder="Describe metal type">
    </div>

    <div class="form-group">
        <label for="metalFormInput">Metal Form</label>
        <input type="text" name="form" class="form-control" id="metalFormInput" value="{{ @$metal ? $metal->form : '' }}" required="required" aria-describedby="metalForm" placeholder="Describe metal form">
    </div>

    <div class="form-group">
        <label for="metalDescriptionInput">Metal Description</label>
        <textarea class="form-control" name="description" id="metalDescriptionInput" value="{{ @$metal ? $metal->description : '' }}" rows="3" required="required" aria-describedby="metalDescription" placeholder="Describe the metal"></textarea>
    </div>

    <div class="form-group">
        <label for="metalPriceInput">Metal Price</label>
        <input type="number" name="price" class="form-control" id="metalPriceInput" value="{{ @$metal ? $metal->price : '' }}" required="required" pattern="" aria-describedby="metalPrice" placeholder="Enter metal price -- 0.00">
    </div>

    <div class="form-group">
        <label for="metalStockInput">Stock Amount</label>
        <input type="number" name="stock" class="form-control" id="metalStockInput" value="{{ @$metal ? $metal->stock : '' }}" required="required" pattern="" aria-describedby="metalStock" placeholder="Enter stock amount -- 0">
    </div>
    
    <div class="form-group">
        <label for="metalImageInput">Metal Image URL</label>
        <select class="form-control" name="img" id="metalImageInput" value="{{ @$metal ? $metal->img : '' }}" >
            <option>/images/default.jpg</option>
            <option>/images/gemIcon.jpg</option>
            <option>/images/jewelryIcon.jpg</option>
            <option>/images/metalIcon.jpg</option>
            <option>/images/toolIcon.jpg</option>
            <option>/images/supplyIcon.jpg</option>
        </select>
    </div>