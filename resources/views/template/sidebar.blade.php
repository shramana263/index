<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
<div class="sidenav col-md-5">
    <div class="container p-0 ms-0 mb-3">
        <a href="https://www.instagram.com/moonxsoul.__/" type="button"><img
                src="/insta_img/catchlogo2.png"
                height="90px"></a>
    </div>
    <div class="container btn-made d-flex mt-2 btn">
        <a href="{{ route('home') }}">
            <div>
                <iconify-icon icon="majesticons:home-line" style="font-size: 30px;"></iconify-icon>
            </div>
            <div>
                <p class="word ps-2">Home</p>
            </div>
        </a>
    </div>
    <div class="container btn-made d-flex mt-2 btn">
        <a href="#javascript">
            <div><iconify-icon icon="material-symbols:search"
                        style="font-size: 30px;"></iconify-icon>
            </div>
            <div>
                <p class="word ps-2">Search</p>
            </div>
        </a>
    </div>
    <div class="container btn-made d-flex mt-2 btn">
        <a href="">
            <div>
               <iconify-icon icon="material-symbols:explore"
                        style="font-size: 30px;"></iconify-icon>
            </div>
            <div>
                <p class="word ps-2">Explore</p>
            </div>
        </a>
    </div>
    <div class="container btn-made d-flex ps-3 pt-0 mt-1 btn">
        <a href="">
            <div>
               <img src="insta_img/reel_iscon.png" height="22px">
            </div>
            <div>
                <p class="word mt-2 ps-2 ms-1">Reels</p>
            </div>
        </a>
    </div>
    <div class="container btn-made d-flex  mt-2 btn">
        <a href="">
            <div>
                <iconify-icon icon="lucide:send" style="font-size: 27px;"></iconify-icon>
            </div>
            <div>
                <p class="word ps-2">Message</p>
            </div>
        </a>
    </div>
    <div class="container btn-made d-flex  mt-2 btn">
        <a href="">
            <div>
                <iconify-icon icon="uil:heart" style="font-size: 30px;"></iconify-icon>
            </div>
            <div>
                <p class="word ps-2">Notification</p>
            </div>
        </a>
    </div>
    <div class="container btn-made d-flex mt-2 btn">
        <a href="{{ route('create') }}">
            <div>
                <iconify-icon icon="mdi:plus-box-outline" style="font-size: 30px;"></iconify-icon>
            </div>
            <div>
                <p class="word ps-2">Create</p>
            </div>
        </a>
    </div>
    <div class="container btn-made d-flex mt-2 btn">
        <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            <div>
                <iconify-icon icon="ic:round-logout" style="font-size: 30px"></iconify-icon>
                {{-- {{ __('Logout') }} --}}
                
            </div>
            <div>
                <p class="word ps-2">Log Out</p>
            </div>
        </a>
    </div>
    <div class="container btn-made d-flex mt-2 pt-2 btn">
        <a href="{{ route('profile') }}">
            <div class="profile_icon">
                <img src="insta_img/profile_img.jpeg" class="rounded-circle" height="30px">
            </div>
            <div class="active">
                <p class="word ps-2 pt-3">Profile</p>
            </div>
        </a>
    </div>

</div>