<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Project;
use App\Models\TicketType;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tickets = Ticket::all();
        return view('ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticketTypes = TicketType::all();
        $projects = Project::all();
        return view('ticket.create', compact('ticketTypes'), compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'title' => 'required',
            'description' => 'required',
            'ticket_type' => 'required',
            'project' => 'required',
        ]);

        Ticket::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'description' => $request->description,
            'ticket_type_id' => $request->ticket_type,
            'project_id' => $request->project,
            'status' => 'open',
        ]);

        return redirect()->route('ticket.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
        
        $ticketTypes = TicketType::all();
        $projects = Project::all();
        $ticket = Ticket::find($ticket->id);
        return view('ticket.update', compact('ticket', 'ticketTypes', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
        $request->validate([
            'status' => 'required',
        ], [
            'status.required' => 'Status harus diisi',
        ]);

        Ticket::where('id', $ticket->id)->update([
            'status' => $request->status,
        ]);

        return redirect()->route('ticket.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
