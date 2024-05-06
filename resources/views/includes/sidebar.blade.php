<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary" style="opacity: 0.9;">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            @foreach ($sidebars as $sidebar)
                <li class="nav-item">
                    <a wire:navigate href="{{ route($sidebar['link']) }}" class="nav-link align-middle px-0">
                        <i class="fs-4 bi-house"></i> <span
                            class="ms-1 d-none d-sm-inline
                            {{ Str::startsWith(Route::currentRouteName(), $sidebar['link']) ? 'text-white' : '' }}
                            ">{{ $sidebar['name'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
        <hr>
    </div>
</div>
