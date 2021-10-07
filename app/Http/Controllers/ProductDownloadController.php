<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductDownloadController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function show(Product $product)
    {

        return Storage::disk('local')->download($product->file_path);
    }
}
