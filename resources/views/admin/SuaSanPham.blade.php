@extends('admin.layout')
@section('content')
  <div style="width:600px;margin-left:100px">
    <h1 class="display-4">Sửa sản phẩm</h1>
      <form action="{{ route('sanpham.update',$data->id_sanpham) }}" method="post" enctype="multipart/form-data">@csrf @method('put')
        
        <input class="form-control" value="{{ $data->name_sanpham }}" type="text" placeholder="Tên sản phẩm" name="ipname" required><br/>
        {{-- <select class="form-control" name="iploaisp">
            @foreach ($data2 as $x)
            <option value="{{ $x->id_loaisanpham }}">{{ $x->name_loaisanpham }}</option>
            @endforeach
        </select><br> --}}
        <input class="form-control" value="{{ $data->price_sanpham }}" type="number" placeholder="Giá bán" name="ipgiaban" required><br/>
        {{-- <input class="form-control" value="{{ $data->discount_sanpham }}" type="number" placeholder="Giảm giá" name="ipgiamgia"><br/> --}}
        <input class="form-control" value="{{ $data->description_sanpham }}" row="5" type="text" placeholder="Mô tả" name="ipmota"><br/>
        <div>
          <input onchange="showImg()" value="{{ $data->image_sanpham }}" type="text" name="ipimg" id="link_image" maxlength="900" placeholder="Link hình ảnh" required class="form-control">
          <img id="output_image" src="{{ $data->image_sanpham }}" style="width: 200px" />
      </div>
        <input class="btn btn-info" type="submit" value="Lưu lại">
      </form>
  </div><br>
  <script>
    function showImg() {
        var x = document.getElementById('link_image').value;
        document.getElementById("output_image").src = x;
    }
</script>
@endsection