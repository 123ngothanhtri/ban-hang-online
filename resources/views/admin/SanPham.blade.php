@extends('admin.layout')
@section('content')
    @if (session('tb'))
        <div class="alert alert-info">{{ session('tb') }}</div>
    @endif
    @if (session('msg_add'))
        <div class="alert alert-success"><i class="far fa-check-circle"></i> {{session('msg_add')}}<button type="button" class="close" data-dismiss="alert">&times;</button></div>
    @endif
    @if (session('msg_not'))
        <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> {{session('msg_not')}}<button type="button" class="close" data-dismiss="alert">&times;</button></div>
    @endif

    <p style="font-size:30px">Sản phẩm</p>
        <form class="form-inline" action="timkiem" method="post">@csrf
            <input class="form-control mr-2" style="width:300px" type="text" placeholder="Tìm kiếm sản phẩm" name="timkiem" required>
            <button class="btn btn-info" type="submit"><i class="fas fa-search"></i></button>
        </form>
        
    <br>
    <table class="table table-hover table-bordered table-sm bg-light">
        <tr class="font-weight-bold table-success">
            <td>id</td>
            <td>Hình ảnh</td>
            <td>Tên sản phẩm</td>
            <td>Loại</td>
            <td>Đơn giá</td>
            {{-- <td>Giảm giá</td> --}}
            <td>Mô tả</td>
            <td>
                <a class="btn btn-sm btn-primary" href="{{ route('sanpham.create') }}"><i class="fas fa-plus"></i></a>
            </td>
        </tr>
        @foreach ($data as $sp)
            <tr>
                <td>{{ $sp->id_sanpham }}</td>
                <td><img height="50px" src="{{ $sp->image_sanpham }}"></td>
                <td>{{ $sp->name_sanpham}}</td>
                <td>{{ $sp->name_loaisanpham}}</td>
                <td>{{ number_format($sp->price_sanpham)}}₫</td>
                {{-- <td>{{ number_format($sp->discount_sanpham) }}₫</td> --}}
                <td>{{ $sp->description_sanpham }}</td>
                <td>
                    <form action="{{ route('sanpham.destroy',$sp->id_sanpham) }}" method="post">@csrf @method('delete')
                        <button type="submit" onclick="return confirm('Xóa thật chứ ?');" class="mb-1 btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    <form action="{{ route('sanpham.edit',$sp->id_sanpham) }}" method="get">@csrf
                        <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{-- <div class="d-flex justify-content-center">{!!$dssp->links()!!}</div> --}}
    <script src="{{ asset('genshin-anemo.js') }}"></script>
@endsection
