<x-Navbar></x-Navbar>

<h1>Halaman Projects</h1>

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


<form action="{{ route('project.create') }}">
    <button>Tambah Projects</button>
</form>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Project</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $project->name }}</td>
                <td>
                    <form action="{{ route('project.edit', $project->id) }}">
                        <button>Edit</button>
                    </form>
                    <form action="{{ route('project.delete', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>