<x-Navbar></x-Navbar>

<h1>Tambah Tipe Tiket</h1>

<form action="{{ route('ticket-type.store') }}" method="POST">
    @csrf
    <label for="name">Nama Tipe Tiket</label>
    <input type="text" name="name" id="name">
    <button type="submit">Tambah</button>
</form>