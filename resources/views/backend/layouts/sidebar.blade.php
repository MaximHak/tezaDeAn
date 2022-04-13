<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
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
                        <i class="bi bi-building"></i>
                        <span>Brand Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="{{route('brand.index')}}">All brands</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route('brand.create')}}">Add brand</a>
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
                        <i class="bi bi-bag-plus"></i>
                        <span>Carts Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">All carts</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-badge.html">Add cart</a>
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
                        <i class="bi bi-diagram-3-fill"></i>
                        <span>Post Category</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">All post categories</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-badge.html">Add post category</a>
                        </li>

                    </ul>
                </li>
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-bookmark"></i>
                        <span>Post tag</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">All post tags</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-badge.html">Add post tag</a>
                        </li>

                    </ul>
                </li>
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stickies"></i>
                        <span>Post Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">All posts</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-badge.html">Add post</a>
                        </li>

                    </ul>
                </li>
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-star"></i>
                        <span>Review Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">All reviews</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-badge.html">Add review</a>
                        </li>

                    </ul>
                </li>
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-star"></i>
                        <span>Coupon Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">All coupons</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-badge.html">Add coupon</a>
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
                <li
                    class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-chat-left-dots"></i>
                        <span>Comments section Management</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">All comments</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="component-badge.html">Add comment</a>
                        </li>

                    </ul>
                </li>
                <li
                    class="sidebar-item">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-gear"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
