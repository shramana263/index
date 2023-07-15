<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/instagram-logo.png">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>{{ env('APP_NAME') }}</title>
    <style>
        * {
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
        }

        .bodyy {
            height: 750px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(insta_img/insta_wallpaper_bg1.png);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .board {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* align-items: center; */
            border: 1px solid #000000;
            border-radius: 10px;
            width: 440px;
            height: 500px;
            z-index: 60px;
            background-color: #ffffff9f;
            /* backface-visibility: hidden; */
            /* padding: 30px; */
        }

        .heading {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
            row-gap: 5px;
        }

        .input-box {
            height: 40px;
            width: 380px;
            /* background: transparent; */
            background-color: #00000010;
            box-shadow: none;
            border: 1px solid #cbcbcb;
            border-radius: 6px;
            padding-left: 10px;
        }

        ::placeholder {
            color: #a6a5a5;
        }

        .login {
            width: 380px;
            margin-top: 10px;
        }

        .login a {
            color: #ffffff;
            text-decoration: none;
        }

        .forget-login {
            font-size: 12px;
            font-family: Verdana;
        }

        .forget-login a {
            text-decoration: none;
            font-size: 12px;
            font-weight: 800;
            font-family: unset;
            padding-left: 3px;
            color: #20046d;
        }

        .orr {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            column-gap: 5px;
        }

        .facebook {
            display: flex;
            /* justify-content: center;
            text-align: center; */
        }

        .foot-box {
            height: 50px;
            width: 100%;
            border-bottom: 1px solid #00000031;
        }

        .footer {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
            background-color: #0000001e;
            text-align: center;
            width: 100%;
        }

        .footer a {

            text-decoration: none;
            color: #dd0000;
            font-weight: bold;
        }

        @media screen and (max-width:450px) {

            .bodyy {
                height: 850px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .board {
                display: flex;
                flex-direction: column;
                justify-content: center;
                /* align-items: center; */
                border: 2px solid #000000;
                border-radius: 10px;
                width: 380px;
                height: 500px;
                /* padding: 30px; */
            }

            .input-box {
                height: 40px;
                width: 300px;
                /* background: transparent; */
                background-color: #00000010;
                box-shadow: none;
                border: 1px solid #cbcbcb;
                border-radius: 6px;
                padding-left: 10px;
            }

            .login {
                width: 300px;
                margin-top: 10px;
            }

            .forget-login {
                font-size: 11px;
                font-family: Verdana;
            }

            .orr {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                column-gap: 5px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body class="bodyy">
    <div>
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

        <div class="board">
            <div class="heading">
                <!-- <h1 class="headline">Instagram</h1> -->
                <img src="https://liveworkanywhere.com/wp-content/uploads/2014/02/Instagram-Logo-PNG7-610x343.png"
                    height="100px" width="200px">
            </div>
            <div class="form">
                <input class="input-box" placeholder="Enter username or email-id">
                <input class="input-box" type="password" placeholder="Enter password">
                <div class=" btn btn-primary login"><a href>Log In</a></div>
                <div class="forget-login">
                    <p>Forgot your login details?<a href>Get helped signing in</a></p>
                </div>
            </div>
            <div class="form">
                <div class="orr">
                    <div>
                        <hr style="width: 150px;">
                    </div>
                    <div>
                        <p>Or</p>
                    </div>
                    <div>
                        <hr style="width: 150px;">
                    </div>
                </div>
                <div>
                    <div class=" btn btn-primary login d-flex">
                        <a href="{{ route('home') }}" class="facebook">
                            <iconify-icon icon="ic:baseline-facebook" style="font-size: 23px;"></iconify-icon>Continue
                            with facebook
                        </a>
                        {{-- <a href="{{ route('abc') }}" class="facebook">
                            <iconify-icon icon="ic:baseline-facebook" style="font-size: 23px;"></iconify-icon>Continue
                            with facebook
                        </a> --}}
                    </div>
                </div>
            </div>

            <div class="foot-box"></div>
            <div class="footer">

                <div>
                    <p>Don't have an account?<a href>Sign up</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
