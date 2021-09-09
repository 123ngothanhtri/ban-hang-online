@extends('admin.layout')
@section('content')
    
    <h4 class="bg-white py-3 mb-3 rounded text-center">
        <i class="far fa-chart-bar"></i> Thống kê
    </h4>

    <h5>Top 3 sản phẩm bán được nhiều nhất</h5>
    <div class="row mb-3">

        @foreach ($sanPhamDaBanNhieuNhat as $index => $i)
            <div class="col-md-4">
                <div class="m-1 py-2 px-3 bg-white rounded">
                    <h5 class="text-danger"><i class="fas fa-trophy"></i> Top {{ $index + 1 }}</h5>
                    <img height="50px" src="{{ $i->image_sanpham }}">
                    <div>{{ $i->name_sanpham }}</div>
                    <div class="text-warning">{{ number_format($i->price_sanpham) }}₫</div>
                    <div>Đã bán {{ $i->daban }}</div>
                </div>
            </div>
        @endforeach

    </div>
    <hr>
    <div class="row">
        
        <div class="col-md-3">
            <div class="bg-white rounded my-2 py-3 h-10 text-center text-danger">
                <h5>{{ $dhcxn }}</h5>
                <p>Đơn hàng chưa xác nhận</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-white rounded my-2 py-3 h-10 text-center text-success">
                <h5>{{ $dh }}</h5>
                <p>Tổng số đơn hàng</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-white rounded  my-2 py-3 h-10 text-center text-info">
                <p> Tổng danh thu</p>
                <h5><i class="fas fa-coins"></i> {{ number_format($tongDanhThu->tongdanhthu) }}₫</h5>

            </div>
        </div>
        <div class="col-md-3">
            <div class="bg-white rounded my-2 py-3 h-10 text-center text-warning">
                <p>Tổng số lượng sản phẩm bán được</p>
                <h5>{{ $tongSoLuongBan->tongsoluongban }} chiếc</h5>

            </div>
        </div>
        <div class="col-md-3 ">
            <div class="bg-white rounded my-2 py-3  text-center text-warning">
                <p>Tổng số loại sản phẩm</p>
                <h5>{{ $sp }} cái</h5>

            </div>
        </div>
    </div>

    <script src="{{ asset('genshin-pyro.js') }}"></script>
@endsection
