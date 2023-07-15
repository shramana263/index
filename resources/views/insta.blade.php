@include('template.header')
@include('setting_modal')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile_setting_modal.css') }}">
    <div class="container-fluid w-100">
        <div class="row">
            @include('template.sidebar')
            <div class="container bg-black cont-phn col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <div class="hidden-profile">
                            <div class="profile-head">
                                <img src="insta_img/profile_img.jpeg" class="profile-image">
                            </div>
                            <div class="hidden-edit-pro">
                                <div class="d-flex">
                                    <div class="id-name-phn">
                                        <a href>moonxsoul.__</a>
                                    </div>
                                    <!-- <div class="text-white ms-3 mt-1 set-phn"><iconify-icon icon="material-symbols:settings"
                                            class="set-phn-icon"></iconify-icon>
                                    </div> -->
                                </div>
                                <div>
                                    <button class="edit-prof-phn">Edit profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <div class="d-flex id-base flex-start mb-3">
                                <div class="id-name">
                                    <a href>moonxsoul.__</a>
                                </div>
                                <div class="d-flex flex-start ms-3">
                                    <a href="{{ route('edit_profile') }}" class="btn btn-light edit-prof">Edit profile</a>
                                    {{-- <div class="text-white ms-3 mt-1 set-pc"> --}}
                                        <button class="btn-set" id="myBtn">
                                            <iconify-icon icon="material-symbols:settings">

                                            </iconify-icon>
                                        </button>
                                    {{-- </div> --}}
                                </div>
                            </div>
                            <div class="text-white flwrs">
                                <p>17 posts</p>
                                <a href>
                                    <p>171 followers</p>
                                </a>
                                <a href>
                                    <p>156 following</p>
                                </a>
                            </div>
                            <div class="about p-0">
                                <p class="mb-0">♡_Piku_♡ </p>
                                <p class="mb-0">⛓️🌼𝓢𝓱𝓮/𝓱𝓮𝓻 🌼⛓️</p>
                                <p class="mb-0">🧚‍♀️🍓</p>
                                <p class="mb-0">WRITING HER OWN STORY, IN HER OWN WAY💜🥂✨</p>

                            </div>
                        </div>



                    </div>
                </div>
                <div class="highlight ms-0">
                    <a href="#high" class="high-cont">
                        <div class="highlight-img">
                            <img src="insta_img/hightlight0.jpg" height="100%" width="100%">
                        </div>
                        <p>Weirdo🖇</p>
                    </a>
                    <a href="#high" class="high-cont">
                        <div class="highlight-img">
                            <img src="insta_img/highlight1.jpg" height="100%" width="100%">

                        </div>
                        <p>Dominos🥂</p>
                    </a>
                    <a href="#high" class="high-cont">
                        <div class="highlight-img">
                            <img src="insta_img/highlight2.jpg" height="100%" width="100%">
                        </div>
                        <p>Groupie🖤🥂</p>
                    </a>
                    <a href="#high" class="high-cont">
                        <div class="highlight-img">
                            <img src="insta_img/highlight3.jpg" height="100%" width="100%">
                        </div>
                        <p>homiesss!!</p>
                    </a>
                    <!-- <a href="#high" class="high-cont">
                        <div class="highlight-img">
                            <iconify-icon icon="uil:plus" style="font-size: 60px;"></iconify-icon>
                        </div>
                        <p>New</p>
                    </a> -->

                </div>
                <section class=" container-fluid text-white flwrs-phn">
                    <div class="column active-flw">
                        <p class="m-0">17</p>
                        <p>posts</p>
                    </div>
                    <div class="column">
                        <p class="m-0">171</p>
                        <p>followers</p>
                    </div>
                    <div class="column">
                        <p class="m-0">156</p>
                        <p> following</p>
                    </div>
                </section>
                <div>

                </div>
            </div>

            <section class="container bg-black post">
                <div class="post-row">
                    <div class="col-post active-post">
                        <a href><svg aria-label="" class="_ab6-" color="rgb(168, 168, 168)" fill="rgb(245, 245, 245)"
                                height="12" role="img" viewBox="0 0 24 24" width="12">
                                <rect fill="none" height="18" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" width="18" x="3" y="3"></rect>
                                <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" x1="9.015" x2="9.015" y1="3" y2="21"></line>
                                <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" x1="14.985" x2="14.985" y1="3" y2="21"></line>
                                <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" x1="21" x2="3" y1="9.015" y2="9.015"></line>
                                <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" x1="21" x2="3" y1="14.985" y2="14.985"></line>
                            </svg></iconify-icon> POSTS</a>
                    </div>
                    <div class="col-post">
                        <a href><svg aria-label="" class="_ab6-" color="rgb(168, 168, 168)" fill="rgb(168, 168, 168)"
                                height="12" role="img" viewBox="0 0 24 24" width="12">
                                <polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg> SAVED</a>
                    </div>
                    <div class="col-post">
                        <a href><svg aria-label="" class="_ab6-" color="rgb(168, 168, 168)" fill="rgb(168, 168, 168)"
                                height="12" role="img" viewBox="0 0 24 24" width="12">
                                <path
                                    d="M10.201 3.797 12 1.997l1.799 1.8a1.59 1.59 0 0 0 1.124.465h5.259A1.818 1.818 0 0 1 22 6.08v14.104a1.818 1.818 0 0 1-1.818 1.818H3.818A1.818 1.818 0 0 1 2 20.184V6.08a1.818 1.818 0 0 1 1.818-1.818h5.26a1.59 1.59 0 0 0 1.123-.465Z"
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"></path>
                                <path
                                    d="M18.598 22.002V21.4a3.949 3.949 0 0 0-3.948-3.949H9.495A3.949 3.949 0 0 0 5.546 21.4v.603"
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"></path>
                                <circle cx="12.072" cy="11.075" fill="none" r="3.556" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                            </svg> TAGGED</a>
                    </div>
                </div>
                <div>

                </div>
            </section>
            <section class="post-phn">


                <svg aria-label="Posts" class="_ab6-" color="rgb(168, 168, 168)" fill="rgb(168, 168, 168)" height="24"
                    role="img" viewBox="0 0 24 24" width="24">
                    <rect fill="none" height="18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="18" x="3" y="3"></rect>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" x1="9.015" x2="9.015" y1="3" y2="21"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" x1="14.985" x2="14.985" y1="3" y2="21"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" x1="21" x2="3" y1="9.015" y2="9.015"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" x1="21" x2="3" y1="14.985" y2="14.985"></line>
                </svg>


                <svg aria-label="Feed" class="_ab6-" color="rgb(168, 168, 168)" fill="rgb(168, 168, 168)" height="24"
                    role="img" viewBox="0 0 24 24" width="24">
                    <rect fill="none" height="10" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="12" x="6" y="7"></rect>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                        stroke-width="2" x1="6.002" x2="18" y1="3.004" y2="3.004"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                        stroke-width="2" x1="6.002" x2="18" y1="21" y2="21"></line>
                </svg>

                <svg aria-label="Saved" class="_ab6-" color="rgb(168, 168, 168)" fill="rgb(168, 168, 168)" height="24"
                    role="img" viewBox="0 0 24 24" width="24">
                    <polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                </svg>

                <svg aria-label="Tagged" class="_ab6-" color="rgb(168, 168, 168)" fill="rgb(168, 168, 168)" height="24"
                    role="img" viewBox="0 0 24 24" width="24">
                    <path
                        d="M10.201 3.797 12 1.997l1.799 1.8a1.59 1.59 0 0 0 1.124.465h5.259A1.818 1.818 0 0 1 22 6.08v14.104a1.818 1.818 0 0 1-1.818 1.818H3.818A1.818 1.818 0 0 1 2 20.184V6.08a1.818 1.818 0 0 1 1.818-1.818h5.26a1.59 1.59 0 0 0 1.123-.465Z"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"></path>
                    <path d="M18.598 22.002V21.4a3.949 3.949 0 0 0-3.948-3.949H9.495A3.949 3.949 0 0 0 5.546 21.4v.603"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"></path>
                    <circle cx="12.072" cy="11.075" fill="none" r="3.556" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"></circle>
                </svg>


            </section>
        </div>
        <section class="post-grid">
            {{-- @foreach ($posts as $post)
            <div class="row wrap">
                <div class="col-md-3">
                    <img src="{{ asset('upload/post_image/' .$post->post_iamge) }}" alt="">
                </div>
            </div>
            @endforeach
        </section> --}}

    </div>
    
    <script src="{{ asset('js/profile_setting_modal.js') }}"></script>
  @include('template.footer')