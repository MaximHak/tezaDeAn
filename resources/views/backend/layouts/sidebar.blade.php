<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div  style="justify-content: center;" class="d-flex">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('backend/assets/images/logo/logo.png')}}" alt="Logo"
                                              srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li
                    class="sidebar-item active ">
                    <a href="{{route('admin')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-images"></i>
                        <span>Banner Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('banner.index')}}">All banners</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('banner.create')}}">Add banner</a>
                        </li>

                    </ul>
                </li>
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-diagram-3"></i>
                        <span>Category Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('category.index')}}">All categories</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('category.create')}}">Add Category</a>
                        </li>

                    </ul>
                </li>
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-diagram-2"></i>
                        <span>Products Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('product.index')}}">All products</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('product.create')}}">Add product</a>
                        </li>

                    </ul>
                </li>
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-building"></i>
                        <span>Cities Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('city.index')}}">All cities</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('city.create')}}">Add cities</a>
                        </li>

                    </ul>
                </li>
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Order Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">All orders</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-badge.html">Add order</a>
                        </li>

                    </ul>
                </li>
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-people"></i>
                        <span>User Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('user.index')}}">All users</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('user.create')}}">Add user</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
