@section('dashboard_content')
<div class="dashboard-left-dropdown">
    <div class="dashboard-left-dropdown-item">
        <h5 class="dashboard-left-dropdown-item-header" onclick="dashBoardItemDisplay(this.id)" id="dropdown-item-header-1">
            Product
            <i class="fa fa-chevron-right" id="fa-chevron-right-1" aria-hidden="true"></i>
        </h5>
        <div id="dashboard-left-dropdown-item-option-list-1" class="dashboard-left-dropdown-item-option-list">
            <a id="dashboard-left-dropdown-1-item-option-1" class="dashboard-left-dropdown-item-option" href="#" onclick="dashBoardItemShowContent(this.id)">
                New Product
            </a>
            <a id="dashboard-left-dropdown-1-item-option-2" class="dashboard-left-dropdown-item-option" href="#"  onclick="dashBoardItemShowContent(this.id)">
                Edit Product
            </a>
            <a id="dashboard-left-dropdown-1-item-option-3" class="dashboard-left-dropdown-item-option" href="#" onclick="dashBoardItemShowContent(this.id)">
                Show Product
            </a>
            <a id="dashboard-left-dropdown-1-item-option-4" class="dashboard-left-dropdown-item-option" href="#" onclick="dashBoardItemShowContent(this.id)">
                Delete Product
            </a>
            <a id="dashboard-left-dropdown-1-item-option-5" class="dashboard-left-dropdown-item-option" href="#" onclick="dashBoardItemShowContent(this.id)">
                Search Product
            </a>
        </div>
    </div>
    <div class="dashboard-left-dropdown-item">
        <h5 class="dashboard-left-dropdown-item-header" onclick="dashBoardItemDisplay(this.id)" id="dropdown-item-header-2">
            Category
            <i class="fa fa-chevron-right" id="fa-chevron-right-2" aria-hidden="true"></i>
        </h5>
        <div id="dashboard-left-dropdown-item-option-list-2" class="dashboard-left-dropdown-item-option-list">
            <a id="dropdown-item-link-1" class="dashboard-left-dropdown-item-option" href="#">New Category</a>
            <a id="dropdown-item-link-2" class="dashboard-left-dropdown-item-option" href="#">Edit Category</a>
            <a id="dropdown-item-link-3" class="dashboard-left-dropdown-item-option" href="#">Show Category</a>
            <a id="dropdown-item-link-4" class="dashboard-left-dropdown-item-option" href="#">Delete Category</a>
            <a id="dropdown-item-link-5" class="dashboard-left-dropdown-item-option" href="#">Show Product</a>
        </div>
    </div>
    <div class="dashboard-left-dropdown-item">
        <h5 class="dashboard-left-dropdown-item-header" onclick="dashBoardItemDisplay(this.id)" id="dropdown-item-header-3">
            Vendor
            <i class="fa fa-chevron-right" id="fa-chevron-right-3" aria-hidden="true"></i>
        </h5>
        <div id="dashboard-left-dropdown-item-option-list-3" class="dashboard-left-dropdown-item-option-list">
            <a id="dropdown-item-link-1" class="dashboard-left-dropdown-item-option" href="#">New Vendor</a>
            <a id="dropdown-item-link-2" class="dashboard-left-dropdown-item-option" href="#">Edit Vendor</a>
            <a id="dropdown-item-link-3" class="dashboard-left-dropdown-item-option" href="#">Show Vendor</a>
            <a id="dropdown-item-link-4" class="dashboard-left-dropdown-item-option" href="#">Delete Vendor</a>
            <a id="dropdown-item-link-5" class="dashboard-left-dropdown-item-option" href="#">Search Vendor</a>
        </div>
    </div>
    <div class="dashboard-left-dropdown-item">
        <h5 class="dashboard-left-dropdown-item-header" onclick="dashBoardItemDisplay(this.id)" id="dropdown-item-header-4">
            Sales
            <i class="fa fa-chevron-right" id="fa-chevron-right-4" aria-hidden="true"></i>
        </h5>
        <div id="dashboard-left-dropdown-item-option-list-4" class="dashboard-left-dropdown-item-option-list">
            <a id="dropdown-item-link-1" class="dashboard-left-dropdown-item-option" href="#">New Product</a>
            <a id="dropdown-item-link-2" class="dashboard-left-dropdown-item-option" href="#">Edit Product</a>
            <a id="dropdown-item-link-3" class="dashboard-left-dropdown-item-option" href="#">Show Product</a>
            <a id="dropdown-item-link-4" class="dashboard-left-dropdown-item-option" href="#">Delete Product</a>
            <a id="dropdown-item-link-5" class="dashboard-left-dropdown-item-option" href="#">Image Update</a>
        </div>
    </div>
    <div class="dashboard-left-dropdown-item">
        <h5 class="dashboard-left-dropdown-item-header" onclick="dashBoardItemDisplay(this.id)" id="dropdown-item-header-5">
            Accounts
            <i class="fa fa-chevron-right" id="fa-chevron-right-5" aria-hidden="true"></i>
        </h5>
        <div id="dashboard-left-dropdown-item-option-list-5" class="dashboard-left-dropdown-item-option-list">
            <a id="dropdown-item-link-1" class="dashboard-left-dropdown-item-option" href="#">New Product</a>
            <a id="dropdown-item-link-2" class="dashboard-left-dropdown-item-option" href="#">Edit Product</a>
            <a id="dropdown-item-link-3" class="dashboard-left-dropdown-item-option" href="#">Show Product</a>
            <a id="dropdown-item-link-4" class="dashboard-left-dropdown-item-option" href="#">Delete Product</a>
            <a id="dropdown-item-link-5" class="dashboard-left-dropdown-item-option" href="#">Image Update</a>
        </div>
    </div>
    <div class="dashboard-left-dropdown-item">
        <h5 class="dashboard-left-dropdown-item-header" onclick="dashBoardItemDisplay(this.id)" id="dropdown-item-header-6">
            Customer
            <i class="fa fa-chevron-right" id="fa-chevron-right-6" aria-hidden="true"></i>
        </h5>
        <div id="dashboard-left-dropdown-item-option-list-6" class="dashboard-left-dropdown-item-option-list">
            <a id="dropdown-item-link-1" class="dashboard-left-dropdown-item-option" href="#">New Product</a>
            <a id="dropdown-item-link-2" class="dashboard-left-dropdown-item-option" href="#">Edit Product</a>
            <a id="dropdown-item-link-3" class="dashboard-left-dropdown-item-option" href="#">Show Product</a>
            <a id="dropdown-item-link-4" class="dashboard-left-dropdown-item-option" href="#">Delete Product</a>
            <a id="dropdown-item-link-5" class="dashboard-left-dropdown-item-option" href="#">Image Update</a>
        </div>
    </div>
    <div class="dashboard-left-dropdown-item">
        <h5 class="dashboard-left-dropdown-item-header" onclick="dashBoardItemDisplay(this.id)" id="dropdown-item-header-7">
            Review
            <i class="fa fa-chevron-right" id="fa-chevron-right-7" aria-hidden="true"></i>
        </h5>
        <div id="dashboard-left-dropdown-item-option-list-7" class="dashboard-left-dropdown-item-option-list">
            <a id="dropdown-item-link-1" class="dashboard-left-dropdown-item-option" href="#">New Product</a>
            <a id="dropdown-item-link-2" class="dashboard-left-dropdown-item-option" href="#">Edit Product</a>
            <a id="dropdown-item-link-3" class="dashboard-left-dropdown-item-option" href="#">Show Product</a>
            <a id="dropdown-item-link-4" class="dashboard-left-dropdown-item-option" href="#">Delete Product</a>
            <a id="dropdown-item-link-5" class="dashboard-left-dropdown-item-option" href="#">Image Update</a>
        </div>
    </div>
    <div class="dashboard-left-dropdown-item">
        <h5 class="dashboard-left-dropdown-item-header" onclick="dashBoardItemDisplay(this.id)" id="dropdown-item-header-8">
            HR
            <i class="fa fa-chevron-right" id="fa-chevron-right-8" aria-hidden="true"></i>
        </h5>
        <div id="dashboard-left-dropdown-item-option-list-8" class="dashboard-left-dropdown-item-option-list">
            <a id="dropdown-item-link-1" class="dashboard-left-dropdown-item-option" href="#">New Product</a>
            <a id="dropdown-item-link-2" class="dashboard-left-dropdown-item-option" href="#">Edit Product</a>
            <a id="dropdown-item-link-3" class="dashboard-left-dropdown-item-option" href="#">Show Product</a>
            <a id="dropdown-item-link-4" class="dashboard-left-dropdown-item-option" href="#">Delete Product</a>
            <a id="dropdown-item-link-5" class="dashboard-left-dropdown-item-option" href="#">Image Update</a>
        </div>
    </div>
</div>
@endsection