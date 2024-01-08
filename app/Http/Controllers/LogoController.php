<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LogoController extends Controller
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
        $logo = Logo::first();
        return view('dashboard.logo.edit', compact('logo'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        $validator = Validator::make($request->all(), [
            'id_kategori' => '',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        
        if ($request->hasFile('logo_header')) {
            // Delete the old image if it exists
            if ($logo->logo_header) {
                $oldImagePath = public_path('uploads/' . $logo->logo_header);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->logo_header->getClientOriginalExtension();
            $request->logo_header->move(public_path('uploads/'), $nama_gambar);
            $logo->logo_header = $nama_gambar;
        }
        if ($request->hasFile('logo_header_mobile')) {
            // Delete the old image if it exists
            if ($logo->logo_header_mobile) {
                $oldImagePath = public_path('uploads/' . $logo->logo_header_mobile);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->logo_header_mobile->getClientOriginalExtension();
            $request->logo_header_mobile->move(public_path('uploads/'), $nama_gambar);
            $logo->logo_header_mobile = $nama_gambar;
        }
        if ($request->hasFile('logo_footer')) {
            // Delete the old image if it exists
            if ($logo->logo_footer) {
                $oldImagePath = public_path('uploads/' . $logo->logo_footer);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->logo_footer->getClientOriginalExtension();
            $request->logo_footer->move(public_path('uploads/'), $nama_gambar);
            $logo->logo_footer = $nama_gambar;
        }


        $logo->save();
        return redirect('logo')->with('success' , 'Logo Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
