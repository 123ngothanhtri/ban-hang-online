@extends('home.layout')
@section('content')
<style>
    .spi{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-image: url('{{ asset('ganyu.gif') }}');
    background-size: cover;
    display: flex;
    z-index:99;
    justify-content: center;
    align-items: center;
    animation: fadeOut ease 8s;
  -webkit-animation: fadeOut ease 8s;
  -moz-animation: fadeOut ease 8s;
  -o-animation: fadeOut ease 8s;
  -ms-animation: fadeOut ease 8s;
  
}
@keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-moz-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-webkit-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-o-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
  }
}

@-ms-keyframes fadeOut {
  0% {
    opacity:1;
  }
  100% {
    opacity:0;
}

}
</style>
<div id="xc" class="spi"></div>
<div class="container">
    <div class="jumbotron alert-success text-center">
    <h1>Đặt hàng thành công <i class="far fa-thumbs-up"></i></h1>
    <h4>Chúng tôi sẽ liên hệ với bạn để giao hàng</h4>
    </div>
    <a class="btn btn-info btn-block" href="{{ url('/')}}"><i class="fas fa-shopping-cart"></i> Tiếp tục mua sắm <i class="fas fa-angle-double-right"></i></a><br>
</div>
<script>
    setTimeout(function(){
      var x =document.getElementById('xc').style.display='none'
    },2500)
    
  </script>
@endsection
