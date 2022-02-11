<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                {{-- @can('view dashboard') --}}
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
                {{-- @endcan --}}

            </li>

            <li class="nav-item">
                {{-- @canany(['view supplier', 'view product', 'view product category', 'view sale']) --}}
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>Orders<i class="right fas fa-angle-left"></i></p>
                    </a>
                {{-- @endcanany --}}

                <ul class="nav nav-treeview">
                    {{-- @can('view product category') --}}
                        <li class="nav-item">
                            <a href="{{ route('order.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>All</p>
                            </a>
                        </li>
                    {{-- @endcan --}}

                    {{-- @can('view product category') --}}
                        <li class="nav-item">
                            <a href="{{ route('order.active') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>Active</p>
                            </a>
                        </li>
                    {{-- @endcan --}}

                    {{-- @can('view supplier') --}}
                        <li class="nav-item">
                            <a href="{{ route('order.complete') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>Complete</p>
                            </a>
                        </li>
                    {{-- @endcan --}}

                    {{-- @can('view product') --}}
                        <li class="nav-item">
                            <a href="{{ route('order.unpaid') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>Unpaid</p>
                            </a>
                        </li>
                    {{-- @endcan --}}
                </ul>
            </li>


            <li class="nav-item">
                {{-- @can('view dashboard') --}}
                    <a href="{{ route('feedback.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Feedback</p>
                    </a>
                {{-- @endcan --}}
            </li>







            <li class="nav-item">
                {{-- @canany(['view permission', 'view role', 'view user']) --}}
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-lock"></i>
                    <p>
                        Security
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                {{-- @endcanany --}}

                <ul class="nav nav-treeview">

                    {{-- @can('view permission') --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-asterisk"></i>
                            <p>Permissions</p>
                        </a>
                    </li>
                    {{-- @endcan --}}

                    {{-- @can('view role') --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-asterisk"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                    {{-- @endcan --}}

                    {{-- @can('view user') --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-asterisk"></i>
                            <p>User Manager</p>
                        </a>
                    </li>
                    {{-- @endcan --}}

                </ul>
            </li>

        </ul>
    </nav>
</div>
