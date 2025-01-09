<x-Navbar></x-Navbar>

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        {{ session('success') }}
    </div>
@endif

<h1 class="text-2xl font-bold mb-4">Halaman Tiket</h1>

<form action="{{ route('ticket.create') }}" class="mb-4">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah Tiket</button>
</form>

<table class="min-w-full bg-white border border-gray-300">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">Nama</th>
            <th class="py-2 px-4 border-b">Email</th>
            <th class="py-2 px-4 border-b">Title</th>
            <th class="py-2 px-4 border-b">Deskripsi</th>
            <th class="py-2 px-4 border-b">Tipe Tiket</th>
            <th class="py-2 px-4 border-b">Project</th>
            <th class="py-2 px-4 border-b">Status</th>
            <th class="py-2 px-4 border-b">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tickets as $ticket)
            <tr class="hover:bg-gray-100">
                <td class="py-2 px-4 border-b">{{ $ticket->name }}</td>
                <td class="py-2 px-4 border-b">{{ $ticket->email }}</td>
                <td class="py-2 px-4 border-b">{{ $ticket->title }}</td>
                <td class="py-2 px-4 border-b">{{ $ticket->description }}</td>
                <td class="py-2 px-4 border-b">{{ $ticket->ticketType->name }}</td>
                <td class="py-2 px-4 border-b">{{ $ticket->project->name }}</td>
                <td class="py-2 px-4 border-b">{{ $ticket->status }}</td>
                <td class="py-2 px-4 border-b">
                    <form action="{{ route('ticket.edit', $ticket->id) }}">
                        <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>