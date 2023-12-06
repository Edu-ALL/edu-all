<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center">
        <a href="/admin/dashboard" class="logo d-flex align-items-center">
            <img data-original="{{ asset('uploaded_files/'.'website-settings/'.$website_data->website_primary_logo) }}" alt="">
            {{-- <img data-original="{{ asset('assets/img/logo/logo-allin.png') }}" alt=""> --}}
        </a>
        <i class="fa-solid fa-bars toggle-sidebar-btn ms-2"></i>
    </div>
    <div class="ms-auto me-4">
        <div class="d-flex flex-row align-items-center gap-3">
            <a class="setting d-flex flex-row align-items-center justify-content-center gap-1" href="/admin/settings">
                <i class="fa-solid fa-gear me-md-1 me-0"></i>
                {{-- <i class="fa-solid fa-gears me-md-1 me-0" style="transform: scaleY(-1);"></i> --}}
                <p class="d-md-inline d-none m-0 lh-1"> Settings</p>
            </a>
            <a class="clear-cache d-flex flex-row align-items-center justify-content-center gap-1" href="/admin/clear-cache">
                <i class="fa-solid fa-brush me-md-1 me-0" id="brush" style="transform: scaleY(-1);"></i>
                <p class="d-md-inline d-none m-0 lh-1"> Clear Cache</p>
            </a>
        </div>
    </div>
</header>