<?php

namespace App\Http\Controllers;

use App\Models\List_Karyawan;
use Illuminate\Http\Request;

class ListKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Book::create([
            'Name' => $request->Name,
            'Umur' => $request->Umur,
            'Alamat' => $request->Alamat,
            'Notelp' => $request->Notelp
        ]);
        return redirect(route('home'));
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\List_Karyawan  $list_Karyawan
     * @return \Illuminate\Http\Response
     */
    
    public function show()
    {
        return view('welcome', [
            'list__karyawans'=>List_Karyawan::all()]);
    }

   public function viewcreatetabel()
    {
        return view('addkaryawan');
    }

    public function editView($Name)
    {

        return view('update-list', [
            'list__karyawans' => List_Karyawan::find($Name)
        ]);
    }

    public function edit(Request $request, $Name)
    {
        $list_Karyawan = List_Karyawan::find($Name);
        $Name->update([
            'Name' => $request->Name,
            'Umur' => $request->Umur,
            'Alamat' => $request->Alamat,
            'Notelp' => $request->Notelp
        ]);

        return redirect(route('home'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\List_Karyawan  $list_Karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, List_Karyawan $list_Karyawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\List_Karyawan  $list_Karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($Name)
    {
        List_Karyawan::find($id)->delete();

        return redirect(route('home'));
    }
}
