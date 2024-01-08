<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Management;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::skip(0)->take(4)->get();
        $blogs = Blog::skip(0)->take(3)->get();
        return view('home.welcome', compact('blogs', 'categories'));
    }

    public function about()
    {
        $managements = Management::all();
        return view('home.about', compact('managements'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('home.blog', compact('blogs'));
    }
    public function single_blog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('home.singleblog', compact('blog'));
    }
    public function produk()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('home.produk', compact('products', 'categories'));
    }
    public function single_produk($id)
    {
        $product = Product::findOrFail($id);
        return view('home.singleproduk', compact('product'));
    }
    public function kategori($id_kategori)
    {
        $category = Category::findOrFail($id_kategori);
        $categories = Category::all();
        $product = Product::where('id_kategori', $id_kategori)->get();
        return view('home.kategori', compact('product', 'category', 'categories'));
    }
    public function kontak()
    {
        $contact = Contact::first();
        return view('home.kontak', compact('contact'));
    }

    public function notFound()
    {
        return view('home.404'); // Use the appropriate view file path
    }
}
