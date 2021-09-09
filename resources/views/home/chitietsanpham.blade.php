@extends('home.layout')
@section('content')
<div class="container">
    <div class="row h-100 p-3" >
        <div class="col-md-3">
            <img width="100%" src="{{ $ctsp->image_sanpham }}" alt="">
        </div>
        <div class="col-md-9">
                <div>
                <h1>{{ $ctsp->name_sanpham }}</h1><hr>
                <p>{{ $ctsp->description_sanpham }}<p>
                <p>Bảo hành 6 tháng</p>
                <p>Tình trạng: còn hàng</p>
                <p> Giá:<span class="text-danger"> {{ number_format($ctsp->price_sanpham)}}₫ </span></p>
               <a class="btn btn-info" href="{{ url('themvaogiohang/' . $ctsp->id_sanpham) }}">Thêm vào giỏ hàng</a>
             </div>
        </div>
    </div>
</div>

<div class="container">
   <div class="bg-warning p-1 pl-3">Sản phẩm liên quan</div>
    <div class="d-flex flex-wrap">
        {{-- @for($i=0;$i<3;$i++) --}}
        @foreach ($sp as $s)
        
                <div class="card  p-1 m-1">
                    <img style="width:250px;height:250px;object-fit:cover " src="{{ $s->image_sanpham }}">
                    <div class="card-body">
                        <h6 class="card-title">{{ $s->name_sanpham }}</h6>
                        <b class="text-danger">{{ number_format($s->price_sanpham) }}₫</b>
                        <div class="d-flex justify-content-between">
                            <a href="{{ url('themvaogiohang/' . $s->id_sanpham) }}" class="btn btn-sm btn-info ">
                                Thêm vào giỏ hàng
                            </a>
                            <a href="{{ url('chitietsanpham/'. $s->id_sanpham.'/'.$s->id_loaisanpham )}}" class="btn btn-sm btn-dark">Chi tiết</a>
                        </div>
                    </div>
                </div>
            
        @endforeach
        {{-- @endfor --}}
    </div>
</div>
<script type="text/javascript" src="http://webquangnam.com/jsShare/hoa-mai-roi.js"></script>
@endsection
