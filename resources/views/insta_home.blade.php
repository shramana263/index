@include('template.header')
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<link rel="stylesheet" href="{{ asset('css/create_post.css') }}">
<link rel="stylesheet" href="{{ asset('css/post_react.css') }}">
<link rel="stylesheet" href="{{ asset('css/flw_suggestions.css') }}">
<div>
    @include('template.sidebar')
    <div class="home-feed">
        <div class="feed">
            <div class="stories">
                <a href="#javascript" class="story-box">
                    <div class="story-bg">
                        <div class="story-div">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-business-user-profile-vector-png-image_1541960.jpg"
                                class="story-img">
                        </div>
                    </div>
                    <div>
                        username
                    </div>
                </a>
                <a href="#javascript" class="story-box">
                    <div class="story-bg">
                        <div class="story-div">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-business-user-profile-vector-png-image_1541960.jpg"
                                class="story-img">
                        </div>
                    </div>
                    <div>
                        username
                    </div>
                </a>
                <a href="#javascript" class="story-box">
                    <div class="story-bg">
                        <div class="story-div">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-business-user-profile-vector-png-image_1541960.jpg"
                                class="story-img">
                        </div>
                    </div>
                    <div>
                        username
                    </div>
                </a>
                <a href="#javascript" class="story-box">
                    <div class="story-bg">
                        <div class="story-div">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-business-user-profile-vector-png-image_1541960.jpg"
                                class="story-img">
                        </div>
                    </div>
                    <div>
                        username
                    </div>
                </a>
                <a href="#javascript" class="story-box">
                    <div class="story-bg">
                        <div class="story-div">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-business-user-profile-vector-png-image_1541960.jpg"
                                class="story-img">
                        </div>
                    </div>
                    <div>
                        username
                    </div>
                </a>
                <a href="#javascript" class="story-box">
                    <div class="story-bg">
                        <div class="story-div">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-business-user-profile-vector-png-image_1541960.jpg"
                                class="story-img">
                        </div>
                    </div>
                    <div>
                        username
                    </div>
                </a>
                <a href="#javascript" class="story-box">
                    <div class="story-bg">
                        <div class="story-div">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-business-user-profile-vector-png-image_1541960.jpg"
                                class="story-img">
                        </div>
                    </div>
                    <div>
                        username
                    </div>
                </a>
                <a href="#javascript" class="story-box">
                    <div class="story-bg">
                        <div class="story-div">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-business-user-profile-vector-png-image_1541960.jpg"
                                class="story-img">
                        </div>
                    </div>
                    <div>
                        username
                    </div>
                </a>
                <a href="#javascript" class="story-box">
                    <div class="story-bg">
                        <div class="story-div">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-business-user-profile-vector-png-image_1541960.jpg"
                                class="story-img">
                        </div>
                    </div>
                    <div>
                        username
                    </div>
                </a>
                <a href="#javascript" class="story-box">
                    <div class="story-bg">
                        <div class="story-div">
                            <img src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-business-user-profile-vector-png-image_1541960.jpg"
                                class="story-img">
                        </div>
                    </div>
                    <div>
                        username
                    </div>
                </a>


            </div>
            <div class="posts">
                {{-- @dd($posts) --}}
                @foreach ($posts as $post)
                    <div class="user-post">
                        <div class="profile-detail">
                            <div class="profile-img-div">
                                <img src="https://media.istockphoto.com/vectors/businessman-profile-icon-male-portrait-flat-vector-id530838817?k=20&m=530838817&s=170667a&w=0&h=uv1NsUb1a5aC3C8FK14TSxLvEyA77rZJVwdlQh66JQU="
                                    height="100%" width="100%">
                            </div>
                            <div class="username">
                                <a href>{{ $post->user->name }}</a>
                                <a href>{{ date('d-M-Y', strtotime($post->created_at)) }}</a>
                            </div>
                            <div class="information">
                                <a href>
                                    <iconify-icon icon="gridicons:ellipsis" style="font-size: 20px"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="post_title">
                            <p style="color: #fff" class="ps-5">
                                {{ $post->post_title }}
                            </p>
                        </div>
                        <div class="post-media">
                            <div class="post-img">
                                <img src="{{ asset('upload/post_image/' . $post->post_image) }}" height="100%"
                                    width="100%">
                            </div>

                        </div>
                       
                        <div class="post-react">
                            <button style="background: transparent; border:none; width:40px;height:35px" id="react-btn" 
                            class="btn-like like">
                                <iconify-icon icon="ph:heart-bold" style="position: absolute;"
                                    class=" icon"></iconify-icon>
                                <iconify-icon icon="ph:heart-fill" class="icon-bg"></iconify-icon>
                            </button>
                            <button style="background: transparent; border:none;">
                                <iconify-icon icon="fa-regular:comment" class="react-icons"></iconify-icon>
                            </button>
                            <button style="background: transparent; border:none;">
                                <iconify-icon icon="tabler:send" class="react-icons"></iconify-icon>
                            </button>
                            <div class="post-save">
                                <button style="background: transparent; border:none;">
                                    <iconify-icon icon="majesticons:bookmark-line" style="position: absolute"
                                        class="react-img out-color" id="save-out"></iconify-icon>
                                    <iconify-icon icon="mdi:bookmark" class="react-img bg-color" id="save">
                                    </iconify-icon>
                                </button>
                            </div>

                        </div>
                        <div class="post_description pt-2">
                            <a href="">
                                {{ $post->user->name }}:
                            </a>
                            <p>
                                {{ $post->post_description }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <style>
            .btn-like *{
                pointer-events: none;
            }
            
            .like .icon {
                color: #ffffff;
                font-size: 27px;
            }

            .like .icon-bg {
                color: #000000;
                font-size: 27px;
            }

            .liked .icon {
                color: red;
                font-size: 27px;
            }

            .liked .icon-bg {
                color: red;
                font-size: 27px;
                animation-name: reacteffect;
                animation-duration: 0.3s;
            }
            @keyframes reacteffect {
                0%{font-size: 25px;}
                50%{font-size: 31px;}
                100%{font-size: 27px;}
            }
        </style>
        @include('profile_suggestion')
    </div>
</div>
<script src="{{ asset('js/react_post.js') }}"></script>
@include('template.footer')
