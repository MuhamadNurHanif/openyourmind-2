<?php

namespace App\Http\Controllers;

use App\Models\ClientCounseler;
use App\Models\Layanan;
use Illuminate\Http\Request;

class ClientCounselerController extends Controller
{
    public function index()
    {
        $clientCounselers = ClientCounseler::with('layanan')->get();
        return view('client_counseler.index', compact('clientCounselers'));
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
        return redirect()->route('client_counseler.index')->with('success', 'Data berhasil ditambahkan.');
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
