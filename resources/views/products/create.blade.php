@section('product_create')
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="dashboard-product-details">
            <h1>Create Product</h1><hr/>
            <form>
                <div class="form-group">
                    <label for="name">Product Title</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Price</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">In Stock</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Discount</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Category</label>
                    <select class="form-control" id="sel1">
                        <option>Category 1</option>
                        <option>Category 2</option>
                        <option>Category 3</option>
                        <option>Category 4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Sub Category</label>
                    <select class="form-control" id="sel1">
                        <option>Sub Category 1</option>
                        <option>Sub Category 2</option>
                        <option>Sub Category 3</option>
                        <option>Sub Category 4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Sub Sub Category</label>
                    <select class="form-control" id="sel1">
                        <option>Sub Sub Category 1</option>
                        <option>Sub Sub Category 2</option>
                        <option>Sub Sub Category 3</option>
                        <option>Sub Sub Category 4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Vendor</label>
                    <select class="form-control" id="sel1">
                        <option>Vendor 1</option>
                        <option>Vendor 2</option>
                        <option>Vendor 3</option>
                        <option>Vendor 4</option>
                    </select>
                </div>
                <div class="dashboard-product-img">
                    <div class="dashboard-product-img-div">

                    </div>
                    <form>
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <input type="submit" value="Select Image" class="btn btn-success"/>
                    </form>
                </div>
                <div class="form-group">
                    <label for="name">Product Additional Details</label>
                    <textarea class="form-control" id="name" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="name">Product Promotion</label>
                    <select class="form-control" id="sel1">
                        <option>Promote</option>
                        <option>No Promote</option>
                    </select>
                </div>
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <input type="submit" value="Submit" class="btn btn-primary"/>
            </form>
        </div>
    </div>
</div>
@endsection
