@section('product_show')
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="dashboard-product-details">
            <h3>Show Product List</h3>
            <hr/>
            <table class="table table-striped dashboard-product-display-table">
                <thead>
                    <tr>
                        <td><i class="fa fa-search" aria-hidden="true"></i></td>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Discount</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Sub Sub Category</th>
                        <th>Vendor</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i=1;$i<20;$i++)
                    <tr>
                        <td><i class="fa fa-search" aria-hidden="true"></i></td>
                        <td>Title Title Title Title {{$i}}</td>
                        <td>${{ 7.3 * $i }}</td>
                        <td>{{ 5 * $i }}</td>
                        <td>{{$i}}%</td>
                        <td>Category {{$i}}</td>
                        <td>Sub Category {{$i}}</td>
                        <td>Sub Sub Category {{$i}}</td>
                        <td>Vendor {{$i}}</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>  
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="dashboard-product-details">
            <h3>Show Product Information</h3>
            <hr/>
        </div>    
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-6">
        <div class="dashboard-product-details">
            <form>
                <div class="form-group">
                    <label for="name">Product Title</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Product Price</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Product Discount</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Product Stock</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Product Category</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <div class="dashboard-product-details">
            <form>
                <div class="form-group">
                    <label for="name">Product Title</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Product Price</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Product Discount</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Product Stock</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
                <div class="form-group">
                    <label for="name">Product Category</label>
                    <input type="text" class="form-control" id="name"/>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection