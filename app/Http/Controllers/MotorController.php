<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;
use Session;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::all();
        return view('backend.motor.index', compact('motor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motor = Motor::all();
        return view('backend.motor.create', compact('motor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motor = new Motor();
        $motor->motor_kode = $request->motor_kode;
        $motor->motor_merk = $request->motor_merk;
        $motor->motor_type = $request->motor_type;
        $motor->motor_warna_pilihan = $request->motor_warna_pilihan;
        $motor->motor_harga = $request->motor_harga;
        $motor->motor_gambar = $request->motor_gambar;

        if ($request->hasFile('motor_gambar')) {
            $file = $request->file('motor_gambar');
            $Path = public_path() . '/assets/img/motor/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($Path, $filename);
            $motor->motor_gambar = $filename;
        }
    $motor->save();

        return redirect()->route('motor.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motor = Motor::findOrFail($id);
        return view('backend.motor.show', compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = Motor::findOrFail($id);
        return view('backend.motor.edit', compact('motor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $motor = Motor::findOrFail($id);
        $motor->motor_kode = $request->motor_kode;
        $motor->motor_merk = $request->motor_merk;
        $motor->motor_type = $request->motor_type;
        $motor->motor_warna_pilihan = $request->motor_warna_pilihan;
        $motor->motor_harga = $request->motor_harga;
        $motor->motor_gambar = $request->motor_gambar;

        if ($request->hasFile('motor_gambar')) {
            $file = $request->file('motor_gambar');
            $Path = public_path() . '/assets/img/motor/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($Path, $filename);

            if ($motor->motor_gambar) {
                $old_foto = $motor->motor_gambar;
                $filepath = public_path() . '/assets/img/motor/' . $motor->motor_gambar;
                try {
                    File::delete($filepath);
                }catch (FileNotFoundException $e) { }
            }
            $motor->motor_gambar = $filename;
        }
        // if ($motor->motor_gambar) {
        //     $old_foto = $motor->motor_gambar;
        //     $filepath = public_path() . '/assets/img/motor/' . $motor->motor_gambar;
        //     try {
        //         File::delete($filepath);
        //     }catch (FileNotFoundException $e) { }
        // }
        // $motor->motor_gambar = $filename;
    
    $motor->save();
        return redirect()->route('motor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $motor = Motor::findOrFail($id);
        if ($motor->motor_gambar) {
            $old_foto = $motor->motor_gambar;
            $filepath = public_path() . '/assets/img/motor/' . $motor->motor_gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }

        $motor = Motor::findOrFail($id);
        $motor->delete();
        return redirect()->route('motor.index');
    }
}
