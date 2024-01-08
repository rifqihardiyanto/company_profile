<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
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
        $blogs = Blog::all();
        return view('dashboard.blog.index', compact('blogs'));
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
            'judul' => 'required',
            'deskripsi_1' => 'required',
            'deskripsi_2' => 'required',
            'blockquote' => 'required',
            'gambar_1' => 'required|image|mimes:jpg,png,jpeg,webp',
            'gambar_2' => 'required|image|mimes:jpg,png,jpeg,webp',
            'gambar_3' => 'required|image|mimes:jpg,png,jpeg,webp',
            'gambar_4' => 'required|image|mimes:jpg,png,jpeg,webp'
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
            Blog::create($input);
        }
        return redirect()->route('blog.index')->with('success', 'Blog Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboard.blog.edit', compact('blog'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi_1' => 'required',
            'deskripsi_2' => 'required',
            'blockquote' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        
        if ($request->hasFile('gambar_1')) {
            // Delete the old image if it exists
            if ($blog->gambar_1) {
                $oldImagePath = public_path('uploads/' . $blog->gambar_1);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_1->getClientOriginalExtension();
            $request->gambar_1->move(public_path('uploads/'), $nama_gambar);
            $blog->gambar_1 = $nama_gambar;
        }
        if ($request->hasFile('gambar_2')) {
            // Delete the old image if it exists
            if ($blog->gambar_2) {
                $oldImagePath = public_path('uploads/' . $blog->gambar_2);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_2->getClientOriginalExtension();
            $request->gambar_2->move(public_path('uploads/'), $nama_gambar);
            $blog->gambar_2 = $nama_gambar;
        }
        if ($request->hasFile('gambar_3')) {
            // Delete the old image if it exists
            if ($blog->gambar_3) {
                $oldImagePath = public_path('uploads/' . $blog->gambar_3);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_3->getClientOriginalExtension();
            $request->gambar_3->move(public_path('uploads/'), $nama_gambar);
            $blog->gambar_3 = $nama_gambar;
        }
        if ($request->hasFile('gambar_4')) {
            // Delete the old image if it exists
            if ($blog->gambar_4) {
                $oldImagePath = public_path('uploads/' . $blog->gambar_4);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_4->getClientOriginalExtension();
            $request->gambar_4->move(public_path('uploads/'), $nama_gambar);
            $blog->gambar_4 = $nama_gambar;
        }


        $blog->judul = $request->judul;
        $blog->deskripsi_1 = $request->deskripsi_1;
        $blog->deskripsi_2 = $request->deskripsi_2;
        $blog->blockquote = $request->blockquote;
        $blog->save();
        return redirect('blog')->with('success' , 'Blog Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        File::delete('uploads/' . $blog->gambar);
        $blog->delete();

        return redirect('blog')->with('success', 'Blog Berhasil Dihapus!');
    }
}
