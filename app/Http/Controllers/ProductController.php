<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        // Middleware registration
        $this->middleware('auth');

        // Dependency injection or other setup tasks
        // For example, you can inject services or perform any other initialization here
    }
    public function index()
    {
        $products = Product::with('category')->get();
        $categories = Category::all();
        return view('dashboard.produk.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_kategori' => 'required',
            'nama_produk' => 'required',
            'deskripsi_1' => 'required',
            'deskripsi_2' => 'required',
            'gambar_1' => 'required|image|mimes:jpg,png,jpeg,webp',
            'gambar_2' => 'image|mimes:jpg,png,jpeg,webp',
            'gambar_3' => 'image|mimes:jpg,png,jpeg,webp',
            'gambar_4' => 'image|mimes:jpg,png,jpeg,webp',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $input = $request->all();
        if ($request->has('gambar_1')){
            $gambar = $request->file('gambar_1');
            $nama_gambar = time() . rand(1,9) . '.' .$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_1'] =  $nama_gambar;
        }
        if ($request->has('gambar_2')){
            $gambar = $request->file('gambar_2');
            $nama_gambar = time() . rand(1,9) . '.' .$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_2'] =  $nama_gambar;
        }
        if ($request->has('gambar_3')){
            $gambar = $request->file('gambar_3');
            $nama_gambar = time() . rand(1,9) . '.' .$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_3'] =  $nama_gambar;
        }
        if ($request->has('gambar_4')){
            $gambar = $request->file('gambar_4');
            $nama_gambar = time() . rand(1,9) . '.' .$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_4'] =  $nama_gambar;
        }

        {
            Product::create($input);
        }
        return redirect()->route('product.index')->with('success', 'Produk Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        $categories = Category::all();
        $category = Category::findOrFail($id)->first();
        return view('dashboard.produk.edit', compact('product', 'categories', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $request, $product)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'id_kategori' => 'required',
            'nama_produk' => 'required',
            'deskripsi_1' => 'required',
            'deskripsi_2' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        
        if ($request->hasFile('gambar_1')) {
            // Delete the old image if it exists
            if ($product->gambar_1) {
                $oldImagePath = public_path('uploads/' . $product->gambar_1);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_1->getClientOriginalExtension();
            $request->gambar_1->move(public_path('uploads/'), $nama_gambar);
            $product->gambar_1 = $nama_gambar;
        }
        if ($request->hasFile('gambar_2')) {
            // Delete the old image if it exists
            if ($product->gambar_2) {
                $oldImagePath = public_path('uploads/' . $product->gambar_2);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_2->getClientOriginalExtension();
            $request->gambar_2->move(public_path('uploads/'), $nama_gambar);
            $product->gambar_2 = $nama_gambar;
        }
        if ($request->hasFile('gambar_3')) {
            // Delete the old image if it exists
            if ($product->gambar_3) {
                $oldImagePath = public_path('uploads/' . $product->gambar_3);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_3->getClientOriginalExtension();
            $request->gambar_3->move(public_path('uploads/'), $nama_gambar);
            $product->gambar_3 = $nama_gambar;
        }
        if ($request->hasFile('gambar_4')) {
            // Delete the old image if it exists
            if ($product->gambar_4) {
                $oldImagePath = public_path('uploads/' . $product->gambar_4);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_4->getClientOriginalExtension();
            $request->gambar_4->move(public_path('uploads/'), $nama_gambar);
            $product->gambar_4 = $nama_gambar;
        }


        $product->id_kategori = $request->id_kategori;
        $product->nama_produk = $request->nama_produk;
        $product->deskripsi_1 = $request->deskripsi_1;
        $product->deskripsi_2 = $request->deskripsi_2;
        $product->save();
        return redirect('product')->with('success' , 'Produk Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        File::delete('uploads/' . $product->gambar);
        $product->delete();

        return redirect('product')->with('success', 'Produk Berhasil Dihapus!');
    }
}
