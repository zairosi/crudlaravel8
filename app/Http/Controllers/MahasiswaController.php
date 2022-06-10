<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\UplodedFile;
use PDF;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Mahasiswa::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
        } else {
            $data = Mahasiswa::paginate(5);
        }
        $jumlah = Mahasiswa::count();
        $jumlahlaki = Mahasiswa::where('jenis_kelamin','L')->count();
        $jumlahpr = Mahasiswa::where('jenis_kelamin','P')->count();
        return view('datamahasiswa',compact('data','jumlah','jumlahlaki','jumlahpr'));
    }
    public function tambahmahasiswa()
    {
        return view('tambahdata');
    }
    public function insertdata(Request $request)
    {
        $data = Mahasiswa::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()-> route('mahasiswa')->with('success','Data Berhasil di Tambahkan');
    }
    public function tampilkandata($id)
    {
        $data = Mahasiswa::find($id);
        return view('tampildata',compact('data'));
    }
    public function updatedata(Request $request, $id)
    {
        $data = Mahasiswa::find($id);
        $data->nama = $request->input('nama');
        $data->jenis_kelamin = $request->input('jenis_kelamin');
        $data->tempat_lahir = $request->input('tempat_lahir');
        $data->tanggal_lahir = $request->input('tanggal_lahir');
        $data->alamat = $request->input('alamat');
        $data->telepon = $request->input('telepon');
        if ($request->hasFile('foto')) {
            $destination = 'fotomahasiswa/'.$data->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }
        $data->update();
        return redirect()-> route('mahasiswa')->with('success','Data Berhasil di Update');
    }
    public function delete($id)
    {
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()-> route('mahasiswa')->with('success','Data Berhasil di Hapus');
    }
    public function detaildata($id)
    {
        $data = Mahasiswa::find($id);
        return view('detaildata',compact('data'));
    }
    public function exportpdf()
    {
        $data = Mahasiswa::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('datamahasiswa-pdf');
        return $pdf->download('Data Mahasiswa.pdf');
    }
}
