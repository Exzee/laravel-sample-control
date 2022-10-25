<div class="nav mb-0">
    <div class="d-flex justify-content-between align-items-center w-auto mb-0 mb-md-0">
        <div class="d-flex justify-content-start align-items-center">
            <button id="toggle-navbar" onclick="toggleNavbar()">
                <img src="{{ asset('template/assets/img/global/burger.svg') }}" class="mb-1" alt="">
            </button>
            <h2 class="nav-title">{{ auth()->user()->name }}</h2>
        </div>
    </div>

    {{-- <div class="d-flex justify-content-between align-items-center nav-input-container">
        <div class="nav-input-group">
            <input type="text" class="nav-input" placeholder="Search people, team, project">
            <button class="btn-nav-input"><img src="{{ asset('template/assets/img/global/search.svg') }}" alt=""></button>
        </div>

        <button class="btn-notif d-none d-md-block"><img src="{{ asset('template/assets/img/global/bell.svg') }}" alt=""></button>
    </div> --}}
</div>
