<div class="left side-menu">

    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ url('cms/dashboard') }}" class="waves-effect"><i class="mdi mdi-home"></i><span> Dashboard </span></a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i></i><span> Menu <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('cms/menu') }}"><i class="mdi mdi-eye"></i> View menu</a></li>
                        <li><a href="{{ url('cms/menu/create') }}"><i class="mdi mdi-plus-circle-outline"></i> Add new link</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-lead-pencil"></i></i><span> Contents <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('cms/content') }}"><i class="mdi mdi-eye"></i> View contents</a></li>
                        <li><a href="{{ url('cms/content/create') }}"><i class="mdi mdi-plus-circle-outline"></i> Add new content</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted-type"></i></i><span> Categories <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('cms/categories') }}"><i class="mdi mdi-eye"></i> View categories</a></li>
                        <li><a href="{{ url('cms/categories/create') }}"><i class="mdi mdi-plus-circle-outline"></i> Add new category</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-shopping"></i></i><span> Products <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('cms/products') }}"><i class="mdi mdi-eye"></i> View products</a></li>
                        <li><a href="{{ url('cms/products/create') }}"><i class="mdi mdi-plus-circle-outline"></i> Add new product</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('cms/orders') }}" class="waves-effect"><i class="mdi mdi-package-variant"></i><span> Orders</span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-users"></i></i><span> Users <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('cms/users') }}"><i class="mdi mdi-eye"></i> View users</a></li>
                        <li><a href="{{ url('cms/users/create') }}"><i class="mdi mdi-plus-circle-outline"></i> Add new user</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cash-usd"></i><span> Ads <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('cms/ads') }}"><i class="mdi mdi-eye"></i> View ads</a></li>
                        <li><a href="{{ url('cms/ads/create') }}"><i class="mdi mdi-plus-circle-outline"></i> Add new ad</a></li>
                    </ul>
                </li>




            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>