<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Dashboard</li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-home-alt"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>

                <li class="menu-title" key="t-menu">Catalog</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-box"></i>
                        <span key="t-ecommerce">Manage Products</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('departments.index')}}" key="t-products">Departments</a></li>
                        <li><a href="{{ route('product-types.index')}}" key="t-products">Product Types</a></li>
                        <li><a href="{{ route('brands.index') }}" key="t-products">Brands</a></li>
                        <li><a href="{{ route('colors.index') }}" key="t-products">Colors</a></li>
                        <li><a href="{{ route('size-scales.index') }}" key="t-products">Size Scales</a></li>
                        <li><a href="{{ route('products.index') }}" key="t-products">Products</a></li>
                    </ul>
                </li>
                <li >
                    <a href="{{ route('suppliers.index') }}" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-user">Manage Suppliers</span>
                    </a>
                </li>
                <li >
                    <a href="#" class="waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-user">Manage Customers</span>
                    </a>
                </li>
                <li >
                    <a href="{{ route('tags.index') }}" class="waves-effect">
                        <i class="bx bx-extension"></i>
                        <span key="t-user">Manage Tags</span>
                    </a>
                </li>
                <li class="menu-title" key="t-menu">Settings</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-cog"></i>
                        <span key="t-ecommerce">Settings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('settings.index')}}" key="t-products">Default Images</a></li>
                        <li><a href="{{ route('tax-settings.index')}}" key="t-products">Tax Settings</a></li>
                        <li><a href="{{ route('general-settings.index')}}" key="t-general-setting">General Settings</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>