<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Admin bán hàng</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <style>*{font-family: 'Nunito', sans-serif}
   
    
    
    </style>
</head>

<body style="background: lightgray; height:101vh">
    
    <nav class="navbar navbar-expand-sm navbar-dark" style="background: rgb(113, 0, 128)">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav font-weight-bold">
                <li class="nav-item">
                    <a class="btn mr-2 btn-info" href="{{ url('/')}}">Trang chủ <i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-info" href="{{ url('/admin/logout_admin')}}">Đăng xuất <i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul> 
        </div>
    </nav>
    <div class="d-flex">
        <div>
            <div class="list-group" style="width:150px">
                <a href="{{ route('thongke') }}" @if($_SERVER['REQUEST_URI']=='/banhangonline/public/admin/thongke') style="color:tomato" @endif class="list-group-item list-group-item-action bg-primary"><img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Pyro.png" alt=""> Thống kê </a>
                <a href="{{ route('loaisanpham.index') }}" @if($_SERVER['REQUEST_URI']=='/banhangonline/public/admin/loaisanpham') style="color:rgb(0, 217, 255)" @endif class="list-group-item list-group-item-action bg-primary "><img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Hydro.png" alt=""> Danh mục</a>
                <a href="{{ route('sanpham.index') }}" @if($_SERVER['REQUEST_URI']=='/banhangonline/public/admin/sanpham') style="color:rgb(21, 255, 0)" @endif class="list-group-item list-group-item-action bg-primary "><img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Anemo.png" alt=""> Sản phẩm</a>
                <a href="{{ route('donhang') }}" @if($_SERVER['REQUEST_URI']=='/banhangonline/public/admin/donhang') style="color:rgb(255, 0, 255)" @endif class="list-group-item list-group-item-action bg-primary "><img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Electro.png" alt=""> Đơn hàng</a>
                <a href="{{ route('slider.index') }}"  @if($_SERVER['REQUEST_URI']=='/banhangonline/public/admin/slider') style="color:cyan" @endif class="list-group-item list-group-item-action bg-primary "><img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Cryo.png" alt=""> Slider</a>
                <a href="{{ route('admin') }}" @if($_SERVER['REQUEST_URI']=='/banhangonline/public/admin/admin') style="color:rgb(255, 208, 0)" @endif class="list-group-item list-group-item-action bg-primary "><img width="30px" src="https://rerollcdn.com/GENSHIN/Elements/Element_Geo.png" alt=""> Admin</a>        
            </div>
              
              <div style="position: relative">
                <img width="147px" src="https://i.ibb.co/Btw7vxy/ss.png" alt="" style="position: absolute; top:0;left:0">
              </div>
        </div>
        <div class="flex-grow-1">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
