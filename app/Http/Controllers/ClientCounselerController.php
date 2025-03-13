<?php

namespace App\Http\Controllers;

use App\Models\ClientCounseler;
use App\Models\Layanan;
use App\Models\JadwalCounselor;
use Illuminate\Http\Request;

class ClientCounselerController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        $jadwal = JadwalCounselor::all();
        $img = [
            asset("public/aset1.png"),
            asset("public/aset2.png"),
            asset("public/aset3.png")
        ];
        return view('client_counseler.service', compact('layanan', 'jadwal', 'img'));
    }

    public function create()
    {
        $layanans = Layanan::all(); // Data layanan untuk dropdown
        return view('client_counseler.create', compact('layanans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|string',
            'domisili' => 'required|string',
            'keluhan' => 'required|string',
            'jenis_layanan' => 'required|exists:layanans,id',
        ]);

        ClientCounseler::create($request->all());
        return redirect()->back()->with('success', 'Terima kasih telah percaya dengan layanan kami. Tim kami akan segera menghubungi Anda dari email dan/atau nomor HP yang telah dimasukkan.');
    }

    public function edit($id)
    {
        $clientCounseler = ClientCounseler::findOrFail($id);
        $layanans = Layanan::all();
        return view('client_counseler.edit', compact('clientCounseler', 'layanans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|string',
            'domisili' => 'required|string',
            'keluhan' => 'required|string',
            'jenis_layanan' => 'required|exists:layanans,id',
        ]);

        $clientCounseler = ClientCounseler::findOrFail($id);
        $clientCounseler->update($request->all());
        return redirect()->route('client_counseler.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $clientCounseler = ClientCounseler::findOrFail($id);
        $clientCounseler->delete();
        return redirect()->route('client_counseler.index')->with('success', 'Data berhasil dihapus.');
    }

}
