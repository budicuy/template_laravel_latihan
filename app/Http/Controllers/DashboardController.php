<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total = Product::count();
        return view('pages.dashboard', [
            'jumlah_produk' => $total
        ]);
    }
}
