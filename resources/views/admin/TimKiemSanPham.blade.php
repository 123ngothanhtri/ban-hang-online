@extends('admin.layout')
@section('content')
    <p style="font-size:30px">Sản phẩm</p>
    <div class="d-flex justify-content-between">
        <form class="form-inline" action="{{ url('timkiem')}}" method="post">@csrf
            <input class="form-control mr-2" value="{{ $tukhoa }}" style="width:300px" type="text" placeholder="Tìm kiếm sản phẩm" name="timkiem">
            <input class="btn btn-info" type="submit" value="Tìm kiếm">
        </form>
        <a class="btn btn-info" href="{{ route('sanpham.index') }}">Trở lại</a>    
    </div>
    <p>Tìm thấy {{ count($data) }} kết quả</p>

    <table class="table table-hover table-bordered table-sm bg-light">
        <tr class="font-weight-bold table-success">
            <td>id</td>
            <td>Hình ảnh</td>
            <td>Tên sản phẩm</td>
            <td>Loại</td>
            <td>Đơn giá</td>
            {{-- <td>Giảm giá</td> --}}
            <td>Số lượng tồn</td> 
            <td>Mô tả</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('sanpham.create') }}">Thêm</a>
            </td>
        </tr>
        @foreach ($data as $sp)
            <tr>
                <td>{{ $sp->id_sanpham }}</td>
                <td><img height="50px" src="{{ $sp['image_sanpham'] }}"></td>
                <td>{{ $sp->name_sanpham}}</td>
                <td>{{ $sp->name_loaisanpham}}</td>
                <td>{{ number_format($sp->price_sanpham)}}₫</td>
                {{-- <td>{{ number_format($sp->discount_sanpham) }}</td> --}}
                <td>{{$sp->amount_sanpham }}</td>
                <td>{{ $sp->description_sanpham }}</td>
                <td>
                    <form action="{{ route('sanpham.destroy',$sp->id_sanpham) }}" method="post">@csrf @method('delete')
                        <button type="submit" onclick="return confirm('Xóa thật chứ ?');" class="mb-1 btn btn-sm btn-outline-danger">Xóa</button>
                    </form>
                    <form action="{{ route('sanpham.edit',$sp->id_sanpham) }}" method="get">@csrf
                        <button type="submit" class="btn btn-sm btn-dark">Sửa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection

    
    