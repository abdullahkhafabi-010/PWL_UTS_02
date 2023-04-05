<?php
namespace App\Http\Controllers;
use App\Models\Teller;
use Illuminate\Http\Request;
class TellerController extends Controller
{
 /**
 * Display a listing of the resource.
 * * @return \Illuminate\Http\Response
 */
 public function index()
 {
 //fungsi eloquent menampilkan data menggunakan pagination
 $teller = Teller::all(); // Mengambil semua isi tabel
 $posts = Teller::orderBy('id', 'desc')->paginate(6);
 return view('Teller.index', compact('teller'))
 ->with('i', (request()->input('page', 1) - 1) * 5);
 }
 public function create()
 {
 return view('teller.create');
 }
 public function store(Request $request)
 {
 //melakukan validasi data
 $request->validate([
 'Id' => 'required',
 'No_Rekening' => 'required',
 'Nama' => 'required',
 'Alamat' => 'required',
 'Jenis_Tabungan' => 'required',
 'Saldo' => 'required',
 ]);
 //fungsi eloquent untuk menambah data
 Teller::create($request->all());
 //jika data berhasil ditambahkan, akan kembali ke halaman utama
 return redirect()->route('teller.index')
 ->with('success', 'Berhasil Menambahkan Teller');
 }
 public function show($id)
 {
 //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
 $Teller = Teller::find($id);
 return view('teller.detail', compact('Teller'));
 }
 public function edit($id)
 {
//menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
 $Teller = Teller::find($id);
 return view('teller.edit', compact('Teller'));
 }
 public function update(Request $request, $id)
 {
//melakukan validasi data
 $request->validate([
    'Id' => 'required',
    'No_Rekening' => 'required',
    'Nama' => 'required',
    'Alamat' => 'required',
    'Jenis_Tabungan' => 'required',
    'Saldo' => 'required',
 ]);
//fungsi eloquent untuk mengupdate data inputan kita
 Teller::find($id)->update($request->all());
//jika data berhasil diupdate, akan kembali ke halaman utama
 return redirect()->route('teller.index')
 ->with('success', 'Berhasil Mengupdate Teller');
 }
 public function destroy( $id)
 {
//fungsi eloquent untuk menghapus data
 Mahasiswa::find($Nim)->delete();
 return redirect()->route('teller.index')
 -> with('success', 'Berhasil Menghapus Teller');
 }
};