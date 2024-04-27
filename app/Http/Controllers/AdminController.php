<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\DetailPenjualan;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('dashboard');
        
    }
    public function adminlogin(){
        return view('login');
    }
    public function ceklogin(Request $request){
        $p = new Admin();
        if($p->where('Username',$request->input('Username'))->where('Password',$request->input('Password')) ->exists()){
         $petugas = $p->first();
            session(['admin'=>$petugas]);
         return redirect('dashboard');
        }
        return back()->with('pesan','Username dan Password Salah');
    } 
    public function logoutt(){
        session()->flush();
        return back();
    }
    public function tambahproduk(){
        return view('tambahproduk');
    }
    public function cektambahproduk(Request $request){
        $a = new Produk();
        $cek = $request->validate(([
            'NamaProduk'=>'required',
            'Harga'=>'required',
            'Stok'=>'required'
        ]));
        $a->create($request->all());
        return redirect('produk');
    }
    public function dataproduk(){
        $a = new Produk();
        return view('produk',['data'=>$a->all()]);
    }
    public function cekdataproduk(Request $request){
        $a = new Produk();
        $cek = $request->validate(([
            'NamaProduk'=>'required',
            'Harga'=>'required',
            'Stok'=>'required'
        ]));
        $a->create($request->all());
    }

    public function editproduk($id){
        $a = new Produk();
        return view('editproduk',['data'=>$a->find($id)]);
    }

    public function updateproduk(Request $request,$id){
        $validasi = $request->validate([
            // 'NamaProduk'=>'required',
            // 'Harga'=>'required',
            // 'Stok'=>'required'
        ]);

        $produk = new Produk();
        $produk = $produk->find($id);
        $produk->update($request->all());
        return redirect('produk');
    }
    public function hapusproduk($id){ 
        $produk = new Produk(); 
        $produk = $produk->find($id); 
        $produk->delete(); 
        return back();
    }

    public function tambahpelanggan(){
        return view('tambahpelanggan');
    }
    public function cektambahpelanggan(Request $request){
        $a = new Pelanggan();
        $cek = $request->validate(([
            'NamaPelanggan'=>'required',
            'Alamat'=>'required',
            'NomorTelepon'=>'required'
        ]));
        $a->create($request->all());
        return redirect('pelanggan');
    }

    public function datapelanggan(){
        $a = new Pelanggan();
        return view('pelanggan',['data'=>$a->all()]);
    }
    public function cekdatapelanggan(Request $request){
        $a = new Pelanggan();
        $cek = $request->validate(([
            'NamaPelanggan'=>'required',
            'Alamat'=>'required',
            'NomorTelepon'=>'required'
        ]));
        $a->create($request->all());
    }

    public function editpelanggan($id){
        $a = new Pelanggan();
        return view('editpelanggan',['data'=>$a->find($id)]);
    }
    public function updatepelanggan(Request $request,$id){
        $validasi = $request->validate([
            'NamaPelanggan'=>'required',
            'Alamat'=>'required',
            'NomorTelepon'=>'required'
        ]);

        $p = new Pelanggan();
        $p = $p->find($id);
        $p->update($request->all());
        return redirect('pelanggan');
    }
    public function hapuspelanggan($id){ 
        $p = new Pelanggan(); 
        $p = $p->find($id); 
        $p->delete(); 
        return back();
    }

    public function tambahadmin(){
        return view('tambahadmin');
    }
    public function cektambahadmin(Request $request){
        $a = new Admin();
        $cek = $request->validate(([
            'NamaLengkap'=>'required',
            'Alamat'=>'required',
            'Telepon'=>'required',
            'Username'=>'required',
            'Password'=>'required',
            'Akses'=>'required',
        ]));
        $a->create($request->all());
        return redirect('dataadmin');
    }
    public function dataadmin(){
        $a = new Admin();
        return view('dataadmin',['data'=>$a->all()]);
    }
    public function cekdataadmin(Request $request){
        $a = new Admin();
        $cek = $request->validate(([
            'NamaLengkap'=>'required',
            'Alamat'=>'required',
            'Telepon'=>'required',
            'Username'=>'required',
            'Password'=>'required'
        ]));
        $a->create($request->all());
    }

    public function editadmin($id){
        $a = new Admin();
        return view('editadmin',['data'=>$a->find($id)]);
    }
    public function updateadmin(Request $request,$id){
        $validasi = $request->validate([
            // 'NamaLengkap'=>'required',
            // 'Alamat'=>'required',
            // 'Telepon'=>'required',
            // 'Username'=>'required',
            // 'Password'=>'required'
        ]);

        $p = new Admin();
        $p = $p->find($id);
        $p->update($request->all());
        return redirect('dataadmin');
    }
    public function hapusadmin($id){ 
        $p = new Admin(); 
        $p = $p->find($id); 
        $p->delete(); 
        return back();
    }

    public function transaksi(){
        return view ('transaksi');

    }

    public function cektransaksi(Request $request){
        $a = new Penjualan();
        $cek = $request->validate(([
            'PenjualanID'=>'required',
            'TanggalPenjualan'=>'required',
            'TotalHarga'=>'required',
            'PelangganID'=>'required'
        ]));
        return redirect('transaksi');
    }



    
}
