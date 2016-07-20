@section('product_delete')
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="dashboard-product-details">
            <h3>Delete Product</h3>
            <hr/>
            <table class="table table-striped dashboard-product-display-table">
                <thead>
                    <tr>
                        <td><i class="fa fa-times" aria-hidden="true"></i></td>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Discount</th>
                        <th>Sub Sub Category</th>
                        <th>Vendor</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i=1;$i<20;$i++)
                    <tr>
                        <td><i class="fa fa-times" aria-hidden="true"></i></td>
                        <td>Title Title Title Title {{$i}}</td>
                        <td>${{ 7.3 * $i }}</td>
                        <td>{{ 5 * $i }}</td>
                        <td>{{$i}}%</td>
                        <td>Sub Sub Category {{$i}}</td>
                        <td>Vendor {{$i}}</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>  
    </div>
</div>
@endsection