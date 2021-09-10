@extends('admin.layout')
@section('content')
<style>
    .spi {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-image: url('https://i.ibb.co/VHwHczM/sogun.gif');
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
<div id="xc" class="spi"></div>
    <div class="pl-3 " style="position: relative">
        <img width="500px" src="https://i.ibb.co/DD59wNb/s.png" alt="" style="position: absolute; top:0;right:-15px">
        <br>
        <p style="font-size:30px">Thông tin admin</p>
        <h5>Tên: {{ $ad->name }}</h5>
        <h5>Email: {{ $ad->email }}</h5>
        <iframe src="https://streamable.com/e/bw5s41?autoplay=1&nocontrols=1" width="560" height="315" frameborder="0" allowfullscreen allow="autoplay"></iframe>
    </div>
    
    {{-- <p>Đổi mật khẩu</p>
    @if (session('ss'))
        <h6><code>{{ session('ss') }}</code></h6>
    @endif
    <form action="/admin/doimatkhau" method="POST">@csrf
        <input type="hidden" value="{{ $ad->id }}" name="ipid">
        <input class="mb-1" type="text" placeholder="Mật khẩu cũ" name="ipmkc" required><br>
        <input class="mb-3 form-control" style="width: 300px" type="text" placeholder="Nhập mật khẩu mới" name="ipmkm"
            required>
        <button type="submit" class="btn btn-dark">Đổi</button>
    </form> --}}
    <script>
        setTimeout(function() {
            var x = document.getElementById('xc').style.display = 'none'
        }, 8000)
    </script>
    <script src="{{ asset('genshin-geo.js') }}"></script>
@endsection
