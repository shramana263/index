@include('template.header')
@include('template.sidebar')
<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <form method="POST" action="" class="h-100  ">
        <h1>
            Edit Profile
        </h1>
        <div>
            <div>
                <img src="" alt="">
            </div>
            <div>
                <p>Username</p>
                <label for="edit-img">Upload Image</label>
                <input type="file" id="edit-img">
            </div>
        </div>
        
        
    </form>
@include('template.footer')