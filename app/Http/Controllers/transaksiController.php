<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    //
    public function index(){
        return Transaksi::all();
    }

    public function create(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->id_request_order = $request->id_request_order;
        $transaksi->tanggal_pengambilan_barang = $request->id_request_order;
        $transaksi->save();
        return "Transaksi berhasil dibuat";
    }

    public function update(Request $request, $id)
    {
        $id_request_order = $request->id_request_order;
        $tanggal_pengambilan_barang = $request->tanggal_pengambilan_barang;

        $barang = Transaksi::find($id);

        $barang->id_request_order = $id_request_order;
        $barang->tanggal_pengambilan_barang = $tanggal_pengambilan_barang;
        $barang->save();

        return "Transaksi berhasil di update!";
    }

    public function delete($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return "Transaksi berhasil dihapus!";
    }

    public function indexView(){
        $data = Transaksi::all();
        return view('transaksi.transaksi', compact('data'));
    }

    public function createView(){
        return view('transaksi.create');
    }

    public function createData(Request $request){
        $transaksi = new Transaksi;
        $transaksi->id_request_order = $request->id_request_order;
        $transaksi->id_vendor = $request->id_vendor;
        $transaksi->nomor_resi = $request->nomor_resi;
        $transaksi->nama_transaksi = $request->nama_transaksi;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->save();
        
        return Redirect(route('transaksi'));
    }

    public function updateView($id)
    {
        $data = Transaksi::find($id);
        return view("transaksi.update", compact('data'));
    }

    public function updateData(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->id_request_order = $request->id_request_order;
        $transaksi->id_vendor = $request->id_vendor;
        $transaksi->nomor_resi = $request->nomor_resi;
        $transaksi->nama_transaksi = $request->nama_transaksi;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->save();

        return redirect(route('transaksi'));
    }
}
