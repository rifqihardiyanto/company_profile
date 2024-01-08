<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
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
        $sliders = Slider::all();
        return view('dashboard.slider.index', compact('sliders'));
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
            'sub_judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,webp'
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $input = $request->all();
        if ($request->has('gambar')){
            $gambar = $request->file('gambar');
            $nama_gambar = time() . rand(1,9) . '.' .$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar'] =  $nama_gambar;
        }

        {
            Slider::create($input);
        }
        return redirect()->route('slider.index')->with('success', 'Slider Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $slider = Slider::findOrFail($id);
        return view('dashboard.slider.edit', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'sub_judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        
        if ($request->hasFile('gambar')) {
            // Delete the old image if it exists
            if ($slider->image) {
                $oldImagePath = public_path('uploads/' . $slider->gambar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('uploads/'), $nama_gambar);
            $slider->gambar = $nama_gambar;
        }


        $slider->judul = $request->judul;
        $slider->sub_judul = $request->sub_judul;
        $slider->deskripsi = $request->deskripsi;
        $slider->save();
        return redirect('slider')->with('success' , 'Slider Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        File::delete('uploads/' . $slider->gambar);
        $slider->delete();

        return redirect('slider')->with('success', 'Slider Berhasil Dihapus!');
    }
}
