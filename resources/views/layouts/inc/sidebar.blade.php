<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                @can('view dashboard')
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                @endcan

            </li>

            <li class="nav-item">
                @canany(['view all orders', 'view active orders', 'view complete orders', 'view unpaid orders'])
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>Orders<i class="right fas fa-angle-left"></i></p>
                    </a>
                @endcanany

                <ul class="nav nav-treeview">
                    @can('view all orders')
                        <li class="nav-item">
                            <a href="{{ route('order.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>All</p>
                            </a>
                        </li>
                    @endcan

                    @can('view active orders')
                        <li class="nav-item">
                            <a href="{{ route('order.active') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>Active</p>
                            </a>
                        </li>
                    @endcan

                    @can('view complete orders')
                        <li class="nav-item">
                            <a href="{{ route('order.complete') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>Complete</p>
                            </a>
                        </li>
                    @endcan

                    @can('view unpaid orders')
                        <li class="nav-item">
                            <a href="{{ route('order.unpaid') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>Unpaid</p>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>


            <li class="nav-item">
                @canany(['view blog category', 'view blog'])
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>Blogs<i class="right fas fa-angle-left"></i></p>
                    </a>
                @endcanany

                <ul class="nav nav-treeview">
                    @can('view blog category')
                        <li class="nav-item">
                            <a href="{{ route('blog-category.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>Blog Categories</p>
                            </a>
                        </li>
                    @endcan

                    @can('view blog')
                        <li class="nav-item">
                            <a href="{{ route('order.active') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>Blogs</p>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li class="nav-item">
                @can('view feedback')
                    <a href="{{ route('feedback.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Feedback</p>
                    </a>
                @endcan
            </li>

            <li class="nav-item">
                @canany(['view permission', 'view role', 'view user'])
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-lock"></i>
                        <p>
                            Security
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                @endcanany

                <ul class="nav nav-treeview">

                    @can('view permission')
                        <li class="nav-item">
                            <a href="{{ route('permission.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>Permissions</p>
                            </a>
                        </li>
                    @endcan

                    @can('view role')
                        <li class="nav-item">
                            <a href="{{ route('role.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                    @endcan

                    @can('view user')
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-asterisk"></i>
                                <p>User Manager</p>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>

        </ul>
    </nav>
</div>
