<x-Navbar></x-Navbar>

<h1>Halaman Tambah Projects</h1>

<form action="{{ route('project.store') }}" method="POST">
    @csrf
    <label for="name">Nama Project</label>
    <input type="text" name="name" id="name">
    <button type="submit">Tambah Projects</button>
</form>