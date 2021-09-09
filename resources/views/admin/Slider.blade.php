@extends('admin.layout')
@section('content')
    @if (session('msg_add'))
        <div class="alert alert-success"><i class="fas fa-dragon"></i> {{session('msg_add')}}<button type="button" class="close" data-dismiss="alert">&times;</button></div>
    @endif
    @if (session('msg_delete'))
        <div class="alert alert-warning"><i class="fas fa-dragon"></i> {{session('msg_delete')}}<button type="button" class="close" data-dismiss="alert">&times;</button></div>
    @endif
    <h2 class="text-info">Slider</h2>
    
    
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Thêm slider</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">@csrf
                    <input class="form-control" type="text" placeholder="Tên slider" name="ipname" required><br/>
                    <input type="file" class="form-control" name="ipimg" required><br>
                    <input class="btn btn-info" type="submit" value="Thêm">
                  </form>
            </div>
          </div>
        </div>
      </div>
      
    <table class="table table-hover table-bordered table-sm bg-light">
        <tr class="font-weight-bold bg-info">
            <td>id</td>
            <td>Tên slider</td>
            <td>Hình ảnh</td>
            <td>
              <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i></button>
            </td>
        </tr>
        @foreach ($data as $x)
            <tr class="text-info">
                <td>{{ $x->id_slider }}</td>
                <td>{{ $x->name_slider }}</td>
                <td><img height="50px" src="{{ asset('slider/'.$x['image_slider']) }}"></td>
                <td>
                  <form action="{{ route('slider.destroy',$x->id_slider) }} " method="POST">@csrf @method('delete')
                    <button onclick="return confirm('Xóa thật chứ ?');" type="submit" class="btn btn-outline-info"><i class="fas fa-trash-alt"></i></button>
                  </form>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="{{ asset('genshin-cryo.js') }}"></script>
@endsection
