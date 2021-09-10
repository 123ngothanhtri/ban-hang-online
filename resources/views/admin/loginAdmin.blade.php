<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Đăng nhập vào Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Nunito', sans-serif
        }

        .spi {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background-image: url('https://upload-os-bbs.hoyolab.com/upload/2021/09/03/130782056/b31503a7af8389c2cb3ebb4115b11b7a_1755335770542533466.gif?x-oss-process=image/resize,s_740/quality,q_80/auto-orient,0/interlace,1/format,gif');
            background-size: cover;
            display: flex;
            z-index: 99;
            justify-content: center;
            align-items: center;
            animation: fadeOut ease 10s;
            -webkit-animation: fadeOut ease 10s;
            -moz-animation: fadeOut ease 10s;
            -o-animation: fadeOut ease 10s;
            -ms-animation: fadeOut ease 10s;

        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @-moz-keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @-webkit-keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @-o-keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @-ms-keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }

        }

    </style>
</head>

<body></body>
<div id="xc" class="spi"></div>
<div id="in" style="height:101vh ;background-image:url('https://i.ytimg.com/vi/r2eFW_rrs3A/maxresdefault.jpg');background-size:cover" class="d-flex justify-content-center align-items-center">
    <div class="bg-light rounded-lg shadow p-4" style="width:400px">
        <div class="text-center font-weight-bold mb-2">
          <img height="50px" src="https://i.ibb.co/HNt9VgZ/genshin-logo.png" alt="">
        </div>
        @if (session('er'))
            <div class="alert alert-danger">{{ session('er') }}</div>
        @endif
        @if (session('msg'))
            <div class="alert alert-info">{{ session('msg') }}</div>
        @endif
        <form action="{{ url('/xuly_login_admin') }}" method="POST">@csrf
            <input class="form-control mb-3" type="text" placeholder="Tài khoản" name="em" required>
            <input class="form-control mb-3" type="password" placeholder="Mật khẩu" name="pw" required>
            <button type="submit" class="btn btn-dark btn-block mb-3" style="background: rgb(150, 0, 137)">Đăng nhập</button>
        </form>
        <a style="color: blueviolet" href="{{ url('/') }}">Trở về trang chủ</a>
    </div>
</div>


</body>
<script type="text/javascript" src="{{ asset('genshin-electro.js') }}"></script>
<script>
    setTimeout(function() {
        var x = document.getElementById('xc').style.display = 'none'
    }, 3000)
</script>

</html>
