<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pesanan;
use App\PesananDetail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function pesan()
    {
        $barangs = Barang::all();
        return view('pesan', compact('barangs'));
    }
    public function cart(Request $request)
    {
        $barangs = Barang::all();
        foreach($barangs as $barang); 
        $tanggal = Carbon::now();
        
        
        $pesanan = new Pesanan;
        $pesanan->user_id = Auth::user()->id;
        $pesanan->tanggal = $tanggal;
        $pesanan->status = 0;
        $pesanan->jumlah_harga = $barang->harga * $request->jumlah_pesan;
        $pesanan->save();

        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        $pesanan_detail = new PesananDetail();
        $pesanan_detail->barang_id;
        $pesanan_detail->pesanan_id = $pesanan_baru->id;
        $pesanan_detail->jumlah = $request->jumlah_pesan;
        $pesanan_detail->jumlah_harga = $barang->harga * $request->jumlah_pesan;
        $pesanan_detail->save();

        return redirect('/home');

        
        
    }
    

}
