<x-Navbar></x-Navbar>

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div>
        {{ session('error') }}
    </div>
@endif

<h1>Update Tipe Tiket</h1>

<form action="{{ route('ticket-type.update', $ticketType->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <label for="name">Nama Tipe Tiket</label>
    <input type="text" name="name" id="name" value="{{ $ticketType->name }}">
    <button type="submit">Update</button>
</form>