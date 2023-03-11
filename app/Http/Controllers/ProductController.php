<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        // membuat Variable $product untuk menampung semua data Product
        $products = Product::all();
        // return view untuk menampilkan list data produk
        return view('pages.produk.index', [
            // Mengirimkan data produk ke halaman index
            'products' => $products
        ]);
    }

    public function create()
    {
        // membuat
        return view('pages.produk.tambah');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'namaproduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|integer',
            'gambar' => 'required|file|max:4096|mimes:jpg,png'
        ]);

        if ($request->file('gambar')) {
            $validasi['gambar'] = $request->file('gambar')->store('public/gambar');
        }

        Product::create($validasi);

        return redirect('/products')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        return view('pages.produk.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validasi = $request->validate([
            'namaproduk' => 'required|max:255',
            'deskripsi'  => 'required',
            'harga'      => 'required|integer'
        ]);

        Product::where('id', $product->id)->update($validasi);

        return redirect('/products')->with('success', 'Data produk berhasil diedit!');
    }

    public function destroy(Product $product)
    {
        if ($product->gambar) {
            Storage::delete($product->gambar);
        }

        Product::destroy($product->id);
        return redirect('/products')->with('success', 'Data produk berhasil dihapus!');
    }
}
