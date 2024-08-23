<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/dashboard')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="mdi mdi-sale menu-icon"></i>
          <span class="menu-title">Sales</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#categories-menu" aria-expanded="false" aria-controls="categories-menu">
            <i class="mdi mdi-tag-multiple menu-icon"></i>
            <span class="menu-title">Categories</span>
            <i class="mdi mdi-chevron-down menu-arrow"></i>
        </a>
        <div class="collapse" id="categories-menu">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/category/create')}}">Add Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/category')}}">Manage Categories</a>
                </li>
            </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false" aria-controls="products">
            <i class="mdi mdi-plus-circle menu-icon"></i>
            <span class="menu-title">Products</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="products">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/products/create')}}">Add Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/products')}}">View Products</a>
                </li>
            </ul>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/brands')}}">
            <i class="mdi mdi-tag-heart menu-icon"></i>
            <span class="menu-title">Brands</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/events')}}">
            <i class="mdi mdi-tag-heart menu-icon"></i>
            <span class="menu-title">Events</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="offers.html">
            <i class="mdi mdi-gift menu-icon"></i>
            <span class="menu-title">Offers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="documentation/documentation.html">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>


