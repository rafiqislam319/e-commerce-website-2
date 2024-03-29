<div class="sidebar-collapse">
    <ul class="nav" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
            </div>
            <!-- /input-group -->
        </li>
        <li>
            <a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('add-category') }}"> Add category </a>
                </li>
                <li>
                    <a href="{{ route('manage-category') }}">Manage category </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Brand Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('add-brand') }}"> Add Brand </a>
                </li>
                <li>
                    <a href="{{ route('manage-brand') }}">Manage Brand </a>
                </li>
            </ul>

            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Product Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('add-product') }}"> Add Product </a>
                </li>
                <li>
                    <a href="{{ route('manage-product') }}">Manage Product </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('manage-order')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Manage Order <span class="fa arrow"></span></a>
        </li>

    </ul>
    <!-- /#side-menu -->
</div>
