@extends('home.layout')
@section('content')
    <div class="d-flex justify-content-between p-2">
        <div>
            @if (session('msg'))
                <div id="zxc"
                style="position: fixed;top: 0;left: 0;z-index:999;width:100%;background:rgb(145, 255, 0)" 
                class=" p-1 text-center alert-success display-4">
                <i class="fas fa-check"></i> 
                {{ session('msg') }}
            </div>
            @else
             <span id="zxc"></span>
            @endif
        </div>
        
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <?php $i = 0; ?>
            @foreach ($slider as $s)
                <li data-target="#demo" data-slide-to="{{ $i }}" @if ($i == 0) class="activel" @endif></li>
                <?php $i++; ?>
            @endforeach
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <?php $i = 0; ?>
            @foreach ($slider as $s)
                <div class="carousel-item @if ($i == 0) active @endif ">
                    @php $i++; @endphp
                    <img src=" {{ asset('slider/' . $s->image_slider) }}" width="100%">
                </div>
            @endforeach
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="container">


        {{-- <div class="d-flex justify-content-between"> --}}
        <form class="form-inline" action="{{ url('/loc') }}" method="post">@csrf
            <select class="form-control" name="iploaisp">
                <option value="0">Tất cả</option>
                @foreach ($lsp as $i)
                    <option value="{{ $i->id_loaisanpham }}">{{ $i->name_loaisanpham }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-info">Lọc</button>
        </form>

        {{-- <form class="form-inline" action="/timkiem" method="post">@csrf
        <input class="form-control" type="text" placeholder="Nhập từ khóa" name="tk" required>
        <button type="submit" class="btn btn-info">Tìm kiếm</button>
    </form>
</div> --}}
        <p class="alert-warning rounded text-center p-1">sản phẩm cao cấp</p>


        <div class="owl-carousel">
            @foreach ($sp as $s)
                <div class="card shadow mb-3 item ">
                    <img style="width:100%;height:150px;object-fit:contain" src="{{ $s['image_sanpham'] }}">
                    <div class="card-body ">
                        <p>{{ $s->name_sanpham }}</p>
                        <p class="card-text text-danger">{{ number_format($s->price_sanpham) }}₫</p>
                        <a href="{{ url('chitietsanpham/' . $s->id_sanpham . '/' . $s->id_loaisanpham) }}" class="btn btn-sm btn-block btn-dark">Chi tiết</a>
                        <a href="{{ url('themvaogiohang/' . $s->id_sanpham) }}" class="btn btn-sm btn-block btn-warning"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a>

                    </div>
                </div>
            @endforeach
        </div>
        <p class="alert-warning rounded text-center p-1">Tất cả sản phẩm</p>

        <div class="row">
            @foreach ($sp as $s)
                <div class="col-md-3 mb-2">
                    <div class=" shadow rounded h-100">
                        <img width="100%" style="object-fit:cover " src="{{ $s['image_sanpham'] }}">
                        <div class="px-2 pb-2">
                                <a class="text-dark" href="{{ url('chitietsanpham/' . $s->id_sanpham . '/' . $s->id_loaisanpham) }}" >{{ $s->name_sanpham }}
                                <br>
                                <b class="text-danger">{{ number_format($s->price_sanpham) }}₫</b>
                            </a>
                                <a href="{{ url('themvaogiohang/' . $s->id_sanpham) }}" class="btn btn-block btn-sm btn-warning "><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        setTimeout(()=>{
            var x = document.getElementById('zxc').style.display='none';
        }, 5000);   
    </script>
    {{-- <div class="d-flex justify-content-center">{!! $data->links() !!}</div> --}}
@endsection
@section('script')
    <script>

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            autoplaySpeed: 500,
            responsive: {
                0: {
                    items: 1
                },
                300: {
                    items: 2
                },
                700: {
                    items: 3
                },
                900: {
                    items: 4
                },
                1100: {
                    items: 5
                }
            }
        })
    </script>
  
@endsection
