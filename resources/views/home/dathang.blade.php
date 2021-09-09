@extends('home.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <a href="{{ url('/') }}" class="btn btn-info m-2">Tiếp tục mua hàng <i class="fas fa-angle-double-right"></i></a>
                @if (session('msg_not'))
                    <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> {{ session('msg_not') }}<button type="button" class="close" data-dismiss="alert">&times;</button></div>
                @endif
                <table class="table table-hover ">
                    @foreach (Cart::content() as $row)
                        <tr>
                            <td><img src="{{ asset( ($row->options->has('photo') ? $row->options->photo : '')) }}" height="50" width="auto"></td>
                            <td>{{ $row->name }}</td>
                            <td>
                                Số lượng
                                <div>
                                    <a class="badge badge-light" href="{{ url('giamsoluong/' . $row->rowId) }}"><i class="fas fa-minus"></i></a>
                                    {{ $row->qty }}
                                    <a class="badge badge-light" href="{{ url('tangsoluong/' . $row->rowId) }}"><i class="fas fa-plus"></i></a>
                                </div>
                            </td>
                            <td>{{ number_format($row->total) }}₫</td>
                            <td><a class="text-danger" href="{{ route('xoa', $row->rowId) }}"><i class="fas fa-times"></i></a></td>
                        </tr>
                    @endforeach
                </table>
                <h5 class="text-danger">Tổng tiền cần thanh toán: {{ number_format(Cart::total()) }}₫</h5>
            </div>
            <div class="col-md-5">
                <h5 class="my-3 font-weight-boid">Thanh toán khi nhận hàng</h5>

                <form action="{{ url('/xulydonhang') }}" method="post">@csrf
                    <input class="form-control" type="text" placeholder="Họ tên" name="ipname" required>
                    @error('ipname')<code>{{ $message }}</code>@enderror
                    <br>
                    <input class="form-control" type="number" placeholder="Số điện thoại" name="ipsdt" required>
                    @error('ipsdt')<code>{{ $message }}</code>@enderror
                    <br/>
                    <input class="form-control" type="email" placeholder="Email" name="ipemail" required>
                    @error('ipemail')<code>{{ $message }}</code>@enderror
                    <br>
                    <textarea style="height: 100px" class="form-control" type="text" placeholder="Địa chỉ giao hàng" name="ipdiachi" required></textarea>
                    @error('ipdiachi')<code>{{ $message }}</code>@enderror
                    <br/>
                    <input onclick="return confirm('Đặt hàng thật chứ ?');" class="btn btn-danger mb-3" type="submit" value="Đặt hàng">
                </form>




            </div>
        </div>
    </div>
@endsection
