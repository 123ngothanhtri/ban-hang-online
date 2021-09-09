<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Bán sản phẩm</title>
    <meta charset="utf-8">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('fontawesome/css/all.css')}}">
	<link rel="stylesheet" href="{{ asset('css/owl-carousel.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/stylee.css') }}" rel="stylesheet">
    <style>*{font-family: 'Nunito', sans-serif;}</style>
</head>

<body>
    <nav class="nav-nav">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo-genshin">
            <a href="{{ url('/login_admin') }}"><img height="50px" src="https://cdn-www.bluestacks.com/bs-images/Logo_com.netease.g93na.png"></a>
        </label>
        <ul class="nav-ul">
            <li class="nav-li"><a class=" btn btn-warning" href="{{ url('/') }}">Trang chủ</a></li>
          </ul>
          <ul class="nav-ul">
            <li class="nav-li"><a class="btn btn-warning" href="{{ url('giohang') }}"><i class="fas fa-shopping-cart"></i> Xem giỏ hàng</a></li>
          </ul>
        </nav>
      <section>
        <div style="margin-top:70px">
            @yield('content')
        </div>
      </section>
    
    <footer class="alert-secondary text-center text-lg-start" style="background-color:rgb(156, 156, 156)">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5>Thông tin liên hệ</h5>
                    <p>© 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.
                        Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. Xem chính sách sử dụng</p>
                 </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Menu</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a class="text-dark" href="{{ url('/') }}">Trang chủ</a>
                        </li>
                        <li>
                            <a class="text-dark" href="{{ url('/login_admin') }}">Admin</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <ul class="list-unstyled">
                        <li><a>Email: banhang@gmail.com</a></li>
                        <li><a>Số điện thoại: 0123456789 </a></li>
                    </ul>
                    <h5><i class="fab fa-facebook-square"></i>
                    <i class="fab fa-facebook-messenger"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-tiktok"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-twitter"></i></h5>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p>Copyright © 2021 - Bán sản phẩm siêu cấp</p>
        </div>
    </footer>


    <script src="{{ asset('js/jquery.js')}}"></script>
	<script src="{{ asset('js/bootstrap.js')}}"></script>
	<script src="{{ asset('js/owl-carousel.js')}}"></script>
    @yield('script')
</body>

</html>
