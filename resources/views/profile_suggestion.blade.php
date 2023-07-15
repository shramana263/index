<div class="suggestions">
    <div class="my-profile mt-4">
       <div class="profile-icon">
            <img src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-business-user-profile-vector-png-image_1541960.jpg" alt="" height="100%" width="100%">
       </div>
       <div class="justify-content-center me-5">
            <a href="{{ route('profile') }}">
                {{ Auth::user()->name }}
            </a>
            <p class="small">Name</p>
       </div>
       <div class="switch-acc">
        <a href="">Switch</a>
       </div>
    </div>
    <div class="d-flex suggested-for-me">
        <p class="me-5">Suggested for you  </p>
        <a href="">See all</a>
   </div>
    <div>
        
    </div>
</div>