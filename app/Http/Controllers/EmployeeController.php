<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Barang;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Employee List';

        $barang = DB::select('
        select *, barang.id as barangs_id, satuan.nama_satuan as satuans_name_satuan
        from barang
        left join satuan on barang.satuan_id = satuan.id
    ');


        return view('employee.index',[
            'pageTitle' => $pageTitle,
            'barang' => $barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Employee';
            // RAW SQL Query
        $barang = DB::select('select * from barang');

        return view('employee.create', compact('pageTitle', 'barang'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'unique' => ':Attribute sudah ada dalam basis data.',
            'numeric' => 'Isi :attribute dengan angka.'
        ];
    
        $validator = Validator::make($request->all(), [
            'kodeBarang' => 'required|unique:barang,kode_barang',
            'namaProduk' => 'required|unique:barang,nama_barang',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable',
            'satuanID' => 'required|numeric', // Menambahkan aturan validasi untuk 'satuan_id'
        ], $messages);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        // Simpan data menggunakan model Barang
        $barang = new Barang();
        $barang->kode_barang = $request->kodeBarang;
        $barang->nama_barang = $request->namaProduk;
        $barang->harga_barang = $request->harga;
        $barang->deskripsi_barang = $request->deskripsi;
        $barang->satuan_id = $request->satuanID;
        $barang->save();

    return redirect()->route('employees.index');

    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::find($id)->delete();
        return redirect()->route('employees.index');
    }
}
