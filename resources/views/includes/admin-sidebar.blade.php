<div class="col-2 vh-100 p-0 left-sidebar">
            <nav class="admin-navbar">
                <ul class="p-0">
                    <li><a href="#"><i class="fa-solid fa-house text-white"></i>Dashboard</a></li>
                    <li><a href="#"><i class="fa-brands fa-blogger text-white"></i>Blog</a></li>
                    <li><a href="{{ URL::to('admin/all-products') }}"><i class="fa-solid fa-shop"></i>Products</a>
                        <ul class="p-0">
                            <li><a href="{{ URL::to('admin/all-products') }}">All Products</a></li>
                            <li><a href="{{ URL::to('admin/add-product') }}">Add New</a></li>
                            <li><a href="{{ URL::to('admin/add-category') }}">Categories</a></li>
                            <li><a href="#">Tags</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
</div>
      
