@include('template.header')
@include('template.sidebar')
<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('css/edit_profile.css') }}">
    <form method="POST" action="" class="h-100 edit-prof-form ">
        <h1>
            Edit Profile
        </h1>
        <div class="d-flex ">
            <div class="image-cont">
                <img onclick="input_func()" src="https://media.istockphoto.com/vectors/businessman-profile-icon-male-portrait-flat-vector-id530838817?k=20&m=530838817&s=170667a&w=0&h=uv1NsUb1a5aC3C8FK14TSxLvEyA77rZJVwdlQh66JQU="
                 alt="" height="100%" width="100%">
            </div>
            <div>
                <p>Username</p>
                <label for="edit-img" >Upload Image</label>
                <input type="file" id="edit-img" class="form-control d-none">
            </div>
            
        </div>
        <div class="d-flex">
            <label for="bio">Bio</label>
            <input type="text" id="bio" class="input-bx" >
        </div>
        <div class="d-flex">
            <label for="gender">Gender</label>
            <input type="option" id="gender" class="input-bx">
        </div>
        <div>
            <p>Show Account Suggestions on Profiles</p>
            <input type="radio"><p>Choose whether people can see similar account suggestions on your profile, and whether your account can be suggested on other profiles.</p>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Save</button>

    </form>
    <script>
        function input_func(){
            $('#edit-img').click();
        }
    </script>
@include('template.footer')