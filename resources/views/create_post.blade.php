@include('template.header')
<link rel="stylesheet" href="{{ asset('css/create_post.css') }}">
<form method="POST" action="{{ route('post.save') }}" enctype="multipart/form-data" class="h-100">
    @csrf
        <div class="container-fluid w-100 h-100">
            <div style="height: 70px; width: 200px; overflow:hidden;" >
                <img src="/insta_img/catchlogo2.png" alt="" height="100%" width="100%">
            </div>
            <div class="row h-100">
                
                <div class="col-md-6 d-flex create_form">
                    
                    <input name="post_title" placeholder="Post title" class="form-control input_box">
                    <input name="post_description" placeholder="Post description" class="form-control input_box">
                    <input type="file" name="post_image" id="post_image" class="form-control input_box" onchange="previewImage(event);"> 
                    <div class="d-grid w-100 ps-2 pe-2">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>

                    </div>
                    
                </div>
                <div class="col-md-6 photo-preview-container">
                    <img src="https://i.pinimg.com/originals/54/c0/69/54c06966162db98bbabf656179f766f3.jpg" alt="preview here" height="100%" width="100%" id="preview-selected-image">
                </div>
            </div>
            
        </div>
</form>
<script src="{{ asset('js/post_image.js') }}"></script>
@include('template.footer')