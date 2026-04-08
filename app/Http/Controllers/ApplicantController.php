<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('applicant.index', compact('applicant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('applicant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namausaha' => 'required',
            'nib' => 'required',
            'npwp' => 'required',
            'omset' => 'required',
            'jumlahkaryawan' => 'required',
            'jumlahusaha' => 'required',
        ]);

        applicant::create([
            'namausaha' => $request->namausaha,
            'nib' => $request->nib,
            'npwp' => $request->npwp,
            'omset' => $request->omset,
            'jumlahkaryawan' => $request->jumlahkaryawan,
            'jumlahusaha' => $request->jumlahusaha,
        ]);

        return redirect()->route('applicant.index')->with('Berhasil', 'berhasil mengajukan pengajuan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('applicant.index', compact('applicant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('applicant.edit', compact('applicant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Applicant $applicant )
    {
        $request->validate([
            'namausaha'=> 'required',
            'nib'=> 'required',
            'npwp'=> 'required',
            'omset'=> 'required',
            'jumlahkaryawan'=> 'required',
            'jumlahusaha'=> 'required',
        ]);

        $applicant->update([
            'namausaha' => $request->namausaha,
            'nib' => $request->nib,
            'npwp' => $request->npwp,
            'omset' => $request->omset,
            'jumlahkaryawan' => $request->julahkaryawan,
            'jumlahusaha' => $request->jumlahusaha,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicant $applicant)
    {
        $applicant->delete();
        return redirect()->route('applicant.index') ->with('Berhasil', 'Berhasil menghapus pengajuan');
    }
}
