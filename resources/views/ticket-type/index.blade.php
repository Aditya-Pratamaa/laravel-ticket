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

<h1>Halaman Ticket Type</h1>

<form action="{{ route('ticket-type.create') }}">
    <button>Tambah Tipe Tiket</button>
</form>

<table>
    <thead>
        <tr>
            <th>Nama Tipe Tiket</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ticketTypes as $ticketType)
            <tr>
                <td>{{ $ticketType->name }}</td>
                <td>
                    <form action="{{ route('ticket-type.edit', $ticketType->id) }}">
                        <button>Edit</button>
                    </form>
                    <form action="{{ route('ticket-type.delete', $ticketType->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>