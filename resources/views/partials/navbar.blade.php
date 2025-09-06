    @php
    $avatar = \Laravolt\Avatar\Facade::create(Auth::user()->name)->toBase64();
    @endphp

        <div id="navbar" class="gap-3 sticky-top border-bottom d-flex align-items-center justify-content-between"  style="z-index: 1030;">
                <div class="gap-3 d-none align-items-center" id="navbarLogo">
                    <button class="btn_transparent d-md-inline-flex d-none align-items-center" id="openSidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width="24" fill="var(--black)"><path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
                    </button>
                    <button class="btn_transparent d-md-none d-inline-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#smallSidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="24" width="24" fill="var(--black)"><path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>
                    </button>
                    <img src="assets/img/abdul_ahad_logo.png" width="35" height="auto" alt="abdul ahad logo">
                </div>
                <div class="d-md-inline-flex d-none me-auto">
                    <p class="m-0 fw-semibold fs_5">Dashboard</p>
                </div>
                <div class="gap-2 d-inline-flex align-items-center ms-auto">
                    <button class="btn_transparent d-inline-flex align-items-center newNotification" data-bs-toggle="offcanvas" data-bs-target="#notificationCentre">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="22" width="22"><path d="M10 21H14C14 22.1 13.1 23 12 23S10 22.1 10 21M21 19V20H3V19L5 17V11C5 7.9 7 5.2 10 4.3V4C10 2.9 10.9 2 12 2S14 2.9 14 4V4.3C17 5.2 19 7.9 19 11V17L21 19M17 11C17 8.2 14.8 6 12 6S7 8.2 7 11V18H17V11Z" /></svg>
                    </button>    
              
                   <div class="dropdown d-inline-flex align-items-center">

                       <button class="rounded btn_transparent d-inline-flex align-items-center profileBtn" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ $avatar }}" class="rounded-circle" width="32" height="32" alt="{{ Auth::user()->name }}">
                    </button>
                     
                    </div>
                </div>
            </div>