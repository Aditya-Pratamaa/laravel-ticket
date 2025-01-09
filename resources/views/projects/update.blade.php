<x-Navbar></x-Navbar>

<h1>Halaman Edit Projects</h1>

<form action="{{ route('project.update', $project->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <label for="name">Nama Project</label>
    <input type="text" name="name" id="name" value="{{ $project->name }}">
    <button type="submit">Edit Projects</button>
</form>