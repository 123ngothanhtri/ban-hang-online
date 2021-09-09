@extends('admin.layout')
@section('content')
<h2>Đơn hàng</h2>
@foreach ($dh as $d)
    <div class="row bg-white m-2 rounded">

        <div class="col-md-6 px-3 py-2">
            <span>Đơn hàng {{ $d->id_donhang }}</span> <span class="badge">{{ $d->created_at }}</span>
            <div class="text-danger">Tổng tiền: {{ number_format($d->total_donhang) }}₫</div> 
            <div>Tên: {{ $d->name_donhang }}</div>
            <div>Email: {{ $d->email_donhang}}</div>
            <div>SĐT: {{ $d->phone_donhang}}</div>
            <div>Địa chỉ giao hàng: {{ $d->address_donhang}}</div>
            @if ($d->status_donhang == 0)
                <div class="text-warning">Chưa xác nhận</div>
            @else
                <div class="text-success">Đã xác nhận</div>
            @endif

            @if($d->status_donhang == 0)
                <a onclick="return confirm('Xác nhận thật chứ ?');" href="{{ url('admin/xacnhanstatus/'. $d->id_donhang )}}" class="btn btn-sm btn-dark">Xác nhận</a>
            @endif
            <a onclick="return confirm('Xóa thật chứ ?');" href="{{ url('admin/xoadonhang/'. $d->id_donhang  )}}" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
            
        </div>
        <div class="col-md-6">
            <table class="table mt-1">
                @foreach ($ctdh as $ct)
                    @if ($d->id_donhang == $ct->id_donhang)
                        @foreach ($sp as $s)
                            @if ($ct->id_sanpham == $s->id_sanpham)
                                
                                <tr>
                                    <td><img height="50px" src="{{ $s->image_sanpham }}"></td>
                                    <td>{{ $s->name_sanpham }}</td>
                                    <td>Đơn giá <span class="text-danger">{{ number_format($s->price_sanpham) }}₫</span> </td>
                                    <td>Số lượng x{{ $ct->quantity }}</td>
                                </tr>
                                
                            @endif
                        @endforeach
                    @endif
                    
                @endforeach
            </table>
        </div>
        
    </div>
    
@endforeach
    
<script src="{{ asset('genshin-electro.js') }}"></script>








    {{-- <p style="font-size:30px">Đơn hàng</p>
    <table class="table table-hover table-sm table-bordered">
        <tr class="font-weight-bold table-info">
            <td>Mã đơn hàng</td>
            <td>Hình ảnh</td>
            <td>Tên khách hàng</td>
            <td>Tên sản phẩm</td>
            <td>Số lượng bán</td>
            <td>Tổng tiền</td>
            <td>Địa chỉ giao hàng</td>
            <td>Email</td>
            <td>SĐT</td>
            <td>Ngày đặt</td>
            <td>Trạng thái</td>
            <td>Thao tác</td>
        </tr>
        @foreach ($ctdh as $sp)
            <tr>
                <td>{{ $sp->id_donhang }}</td>
                <td><img height="50px" src="{{ $sp->image_sanpham }}"></td>
                <td>{{ $sp->name_donhang }}</td>
                <td>{{ $sp->name_sanpham }}</td>
                <td>{{ $sp->quantity }}</td>
                <td>{{ number_format($sp->total_donhang) }}₫</td>
                <td>{{ $sp->address_donhang}}</td>
                <td>{{ $sp->email_donhang}}</td>
                <td>{{ $sp->phone_donhang}}</td>
                <td>{{ $sp->created_at }}</td>
                <td>
                    @if ($sp->status_donhang == 0)
                        <p class="text-danger">Chưa xác nhận</p>
                    @else
                        <p class="text-success">Đã xác nhận</p>
                    @endif
                </td>
                <td>
                    @if($sp->status_donhang == 0)
                    <a onclick="return confirm('Xác nhận thật chứ ?');" class="btn btn-sm btn-dark mb-1" href="{{ url('admin/xacnhanstatus/'. $sp->id_donhang )}}">Xác nhận</a>
                    <a onclick="return confirm('Xóa thật chứ ?');" href="{{ url('admin/xoadonhang/'. $sp->id_donhang .'/'. $sp->id_khachhang )}}" class="btn btn-sm btn-outline-danger">Xóa</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </table> --}}
    {{-- <div class="d-flex justify-content-center">{!!  $dssp->links() !!}</div> --}}
@endsection
