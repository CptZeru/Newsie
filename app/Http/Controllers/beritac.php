<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;

class beritac extends Controller
{
  //store Data
  public function create(request $request){
    $berita = new berita;
    $berita->judul = $request->judul;
    $berita->penulis = $request->penulis;
    $berita->tanggal_terbit = $request->tanggal_terbit;
    $berita->isi = $request->isi;
    $berita->gambar = $request->gambar;
    $berita->save();

    return "Berita berhasil dimasukkan";
  }
  public function index(){
    return Berita::all();
  }

  public function update(request $request, $id){
    $judul = $request->judul;
    $penulis = $request->penulis;
    $isi = $request->isi;
    $gambar = $request->gambar;

    $berita = Berita::find($id);
    $berita->judul = $judul;
    $berita->penulis = $penulis;
    $berita->isi = $isi;
    $berita->gambar = $gambar;

    return "Berita berhasil di perbaharui";
  }

  public function delete($id){
    $berita = Berita::find($id);
    $berita->delete();

    return "Berita berhasil dihapus";
  }
}
