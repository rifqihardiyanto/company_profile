<?php

namespace App\Http\Controllers;

use App\Models\Management;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class ManagementController extends Controller
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
        $managements = Management::all();
        return view('dashboard.management.index', compact('managements'));
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
            'nama' => 'required',
            'jabatan' => 'required',
            'deskripsi_1' => '',
            'deskripsi_2' => '',
            'deskripsi_3' => '',
            'email' => '',
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
            Management::create($input);
        }
        return redirect()->route('management.index')->with('success', 'Management Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $management = Management::findOrFail($id);
        return view('dashboard.management.edit', compact('management'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Management $management)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Management $management)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jabatan' => 'required',
            'deskripsi_1' => '',
            'deskripsi_2' => '',
            'deskripsi_3' => '',
            'email' => '',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        
        if ($request->hasFile('gambar')) {
            // Delete the old image if it exists
            if ($management->image) {
                $oldImagePath = public_path('uploads/' . $management->gambar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('uploads/'), $nama_gambar);
            $management->gambar = $nama_gambar;
        }


        $management->nama = $request->nama;
        $management->jabatan = $request->jabatan;
        $management->deskripsi_1 = $request->deskripsi_1;
        $management->deskripsi_2 = $request->deskripsi_2;
        $management->deskripsi_3 = $request->deskripsi_3;
        $management->email = $request->email;
        $management->save();
        return redirect('management')->with('success' , 'Management Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Management $management)
    {
        File::delete('uploads/' . $management->gambar);
        $management->delete();

        return redirect('management')->with('success', 'Management Berhasil Dihapus!');
    }
}
