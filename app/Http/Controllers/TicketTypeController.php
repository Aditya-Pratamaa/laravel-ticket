<?php

namespace App\Http\Controllers;

use App\Models\TicketType;
use Illuminate\Http\Request;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('ticket-type.index', [
            'ticketTypes' => TicketType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ticket-type.ticket-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
        ]);

        TicketType::create([
            'name' => $request->name,
        ]);

        return redirect()->route('ticket-type.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketType $ticketType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketType $ticketType)
    {
        //
        $ticketType = TicketType::find($ticketType->id);
        return view('ticket-type.ticket-update', compact('ticketType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TicketType $ticketType)
    {
        //
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
        ]);

        $ticketType = TicketType::find($ticketType->id);

        if (!$ticketType) {
            return redirect()->route('ticket-type.index')->with('error', 'Data tidak ditemukan');
        }

        $ticketType->update([
            'name' => $request->name,
        ]);

        return redirect()->route('ticket-type.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketType $ticketType)
    {
        //
        TicketType::where('id', $ticketType->id)->delete();
        $ticketType = TicketType::find($ticketType->id);
        if($ticketType) {
            return redirect()->route('ticket-type.index')->with('error', 'Data tidak berhasil dihapus');
        }
        return redirect()->route('ticket-type.index')->with('success', 'Data berhasil dihapus');
    }
}
