@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        
        <div class="col-md-12">
            @foreach($barangs as $key => $barang)
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ url('/home') }}" class="btn btn-success"><i class="fa fa-arrow-left"></i>Kembali</a>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ url('img/lamara.png') }}" class="rounded mx-auto d-block" width="100%">
                        </div>
                        <div class="col-md-6 mt-5">
                            <img src="{{ url('img/logo.png') }}" width="200">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp.{{ number_format($barang->harga) }}.000.000,00</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>{{ number_format($barang->stok) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ ($barang->keterangan) }}
                                            <ul>
                                                <li>Daily Nourishing Cleanser</li>
                                                <li>Skin Activating Toner</li>
                                                <li>Radiance Oil</li>
                                                <li>Revealing Eye Cream</li>
                                                <li>Moisture Boost Emulsion</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td>:</td>
                                        <td>
                                            <form action="{{ url('/pesan') }}" method="POST">
                                                @csrf
                                            <input type="text" name="jumlah_pesan" class="form-control" required>
                                            <button type="submit" class="btn btn-success btn-lg mt-2"><i class="fa fa-cart-plus"></i> Pesan</button>
                                            </form>
                                        </td>
                                    </tr>
                                   
                                       
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        
            
        


        
    </div>
</div>
  



@endsection

