<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}" style="{{ request()->routeIs('dashboard') ? '' : 'background-color: #fff; color: #012970;' }}">
                <i class="bi bi-grid" style="{{ request()->routeIs('dashboard') ? '' : 'color: #7B7D7D;' }}"></i><span>{{ __('Dashboard') }}</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#resources-nav" data-bs-toggle="collapse" href="#" style="{{ request()->routeIs('post.index') ? 'background-color: #f6f9ff; color: #4154f1;' : '' }}">
                <i class="bi bi-menu-button-wide" style="{{ request()->routeIs('post.index') ? 'color: #4154f1;' : '' }}"></i><span>{{ __('Resources') }}</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="resources-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('post.index') }}" style="{{ request()->routeIs('post.index') ? 'color: #4154f1;' : '' }}">
                        <i class="bi bi-circle" ></i><span>{{ __('Posts') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('comment.index') }}" style="{{ request()->routeIs('comment.index') ? 'color: #4154f1;' : '' }}">
                        <i class="bi bi-circle" ></i><span>{{ __('Comments') }}</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
