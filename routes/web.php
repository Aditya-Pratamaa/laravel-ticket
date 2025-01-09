<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TicketTypeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/ticket-type', [TicketTypeController::class, 'index'])->name('ticket-type.index');
Route::get('/ticket-type/create', [TicketTypeController::class, 'create'])->name('ticket-type.create');
Route::post('/ticket-type', [TicketTypeController::class, 'store'])->name('ticket-type.store');
Route::get('/ticket-type/{ticketType}/edit', [TicketTypeController::class, 'edit'])->name('ticket-type.edit');
Route::patch('/ticket-type/{ticketType}', [TicketTypeController::class, 'update'])->name('ticket-type.update');
Route::delete('/ticket-type/{ticketType}', [TicketTypeController::class, 'destroy'])->name('ticket-type.delete');

Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('project.store');
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
Route::patch('/projects/{project}', [ProjectController::class, 'update'])->name('project.update');
Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('project.delete');

Route::get('ticket', [TicketController::class, 'index'])->name('ticket.index');
Route::get('ticket/create', [TicketController::class, 'create'])->name('ticket.create');
Route::post('ticket', [TicketController::class, 'store'])->name('ticket.store');
Route::get('ticket/{ticket}/edit', [TicketController::class, 'edit'])->name('ticket.edit');
Route::patch('/ticket/{ticket}', [TicketController::class, 'update'])->name('ticket.update');
