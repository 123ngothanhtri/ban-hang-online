<?php
namespace App\Http\Controllers;
use App\Models\sanpham;
use App\Models\loaisanpham;
use App\Models\slider;
use App\Models\khachhang;
use App\Models\donhang;
use App\Models\chitietdonhang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use File;
use Cart;
use Illuminate\Support\Facades\DB;
class c extends Controller
{


    function tangsoluong($rowid){
        $ww=Cart::get($rowid);
        $quantity=$ww->qty;
        Cart::update($rowid,$quantity+=1);
        return back();
    }
    function giamsoluong($rowid){
        $ww=Cart::get($rowid);
        $quantity=$ww->qty;
        Cart::update($rowid,$quantity-=1);
        return back();
    }
    public function cart()
    {
        return view('home.giohang');
    }
    public function addToCart($id)
    {
        $p = sanpham::find($id);
        Cart::add($p->id_sanpham,$p->name_sanpham,1,$p->price_sanpham,0,['photo'=>$p->image_sanpham]);
        return redirect('/')->with('msg','Đã thêm vào giỏ hàng!');
    }
    function xoahang($id){
        Cart::remove($id);
        return back();
    }



    function xulydonhang(Request $r){
        // $this->validate($r,[
        //     'ipname'=>'required|min:3|max:90',
        //     'ipdiachi'=>'required|min:10|max:200',
        //     'ipsdt'=>'required|min:10|max:20',
        //     'ipemail'=>'min:15|max:90',
        // ],[
        //     'ipname.min'=>'Tên phải từ 3 đến 10 kí tự ',
        //     'ipname.max'=>'Tên phải từ 3 đến 10 kí tự',
        //     'ipdiachi.min'=>'Địa chỉ phải nhiều hơn 10 ký tự',
        //     'ipsdt.min'=>'Số điện thoại phải đủ 10 số',
        //     'ipemail.min'=>'Email phải đúng định dạng',
        // ]);
        $check=Cart::total();
        if($check==0){
            return back()->with('msg_not','Không có sản phẩm để đặt hàng');
        }

        $dh=new donhang;
        $dh->total_donhang=Cart::total();
        $dh->name_donhang=$r->ipname;
        $dh->email_donhang=$r->ipemail;
        $dh->phone_donhang=$r->ipsdt;
        $dh->address_donhang=$r->ipdiachi;
        $dh->save();
        
        foreach(Cart::content() as $c){
            $cthd = new chitietdonhang;
            $cthd->id_donhang=$dh->id_donhang;
            $cthd->id_sanpham=$c->id;
            $cthd->quantity=$c->qty;
            $cthd->save();
            
        }
        

        Cart::destroy();
        return view('home.dathangthanhcong');
    }
//=============================================================================================
    function trangchu(){
        $sp=sanpham::all();//paginate(10);
        $spgg=sanpham::where('discount_sanpham','>','0')->get();
        $lsp=loaisanpham::all();
        $slider=slider::all();
        return view('home.trangchu',compact('slider','sp','spgg','lsp'));
    }

//=============================================================================================
    function donhang(){
        $dh=donhang::orderBy('id_donhang','desc')->get();
        $ctdh=chitietdonhang::all();
        $sp=sanpham::all();
        return view('admin.DonHang',compact('dh','ctdh','sp'));
    }

//=============================================================================================  
    function chitietsanpham($id,$maloai){
        $ctsp=sanpham::find($id);
        $sp=sanpham::all()->where('id_loaisanpham',$maloai);//paginate(10);
        $spgg=sanpham::where('discount_sanpham','>','0')->get();
        $lsp=loaisanpham::all();
        return view('home.chitietsanpham',compact('ctsp','sp','spgg','lsp'));
    }
    function xoadonhang($iddh){
        $xoa = chitietdonhang::where('id_donhang',$iddh)->delete();
        donhang::destroy($iddh);
        return back();
    }

//==========================================================================================
function thongke(){
    
    $sanPhamDaBanNhieuNhat = DB::table('sanpham')
    ->select('name_sanpham','price_sanpham','image_sanpham')
    ->selectRaw('(select SUM(quantity) FROM chitietdonhang WHERE chitietdonhang.id_sanpham=sanpham.id_sanpham) as daban ')
    ->havingRaw('daban is not null')
    ->orderByRaw('daban desc')
    ->limit(3)
    ->get();

    $tongDanhThu = DB::table('donhang')
    ->selectRaw('sum(total_donhang) as tongdanhthu')
    ->first();

    $tongSoLuongBan = DB::table('chitietdonhang')
    ->selectRaw('sum(quantity) as tongsoluongban')
    ->first();

    
    // ->selectRaw('(select SUM(quantity) FROM chitietdonhang WHERE chitietdonhang.id_sanpham=sanpham.id_sanpham) as daban ')
    // ->havingRaw('daban is not null')
    // ->orderByRaw('daban desc')
    // ->limit(3)
    // ->get();

   
    //return $loaiSanPhamDaBanNhieuNhat;

    //return $sanPhamDaBanNhieuNhat;

    // $w= DB::table('sanpham')
    // ->select('name_sanpham','name_loaisanpham')
    // ->join('loaisanpham','loaisanpham.id_loaisanpham','sanpham.id_loaisanpham')
    // ->get();
    // return $w;
    $dhcxn = DB::table('donhang')->where('status_donhang','0')->count('id_donhang');
    $dh = DB::table('donhang')->count('id_donhang');
    $lsp = DB::table('loaisanpham')->count('id_loaisanpham');
    $sp = DB::table('sanpham')->count('id_sanpham');

    return view('admin.ThongKe',compact('dhcxn','sp','tongSoLuongBan','tongDanhThu','lsp','dh','sanPhamDaBanNhieuNhat'));
}

//========================================================================================
function xacnhanstatus($id){
    $xn=donhang::find($id);
    $xn->status_donhang=1;
    $xn->save();
    return back();
}
//===========================================================================================
    
    function timkiem(Request $r){
        $tukhoa=$r['timkiem'];
        $data=sanpham::join('loaisanpham', 'sanpham.id_loaisanpham', 'loaisanpham.id_loaisanpham')
                    ->where('name_sanpham','like',"%$tukhoa%")
                    ->orWhere('id_sanpham','like',"%$tukhoa%")
                    ->orWhere('name_loaisanpham','like',"%$tukhoa%")
                    ->get();//->stake(30)->paginate(5);
        return view('admin.TimKiemSanPham',compact('data','tukhoa'));
    }
    
     
    
    function loc(Request $r){
        if($r->iploaisp==0){
            $sp=sanpham::all();
        }
        else {
            $sp=sanpham::all()->where('id_loaisanpham',$r->iploaisp);
        }
        $spgg=sanpham::where('discount_sanpham','>','0')->get();
        $lsp=loaisanpham::all();
        $slider=slider::all();
        return view('home.trangchu',compact('slider','sp','spgg','lsp'));

    }
    
    
    function dathang(){
        return view('home.dathang');
    }
    

}