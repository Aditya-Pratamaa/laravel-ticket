<x-Navbar></x-Navbar>

<h1>Halaman Tambah Tiket</h1>

<form action="{{ route('ticket.store') }}" method="POST">
    @csrf
    <table>
        <tr>
            <td><label for="name">Nama</label></td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td><label for="email">Nama email</label></td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td><label for="title">Nama title</label></td>
            <td><input type="text" name="title" id="title"></td>
        </tr>
        <tr>
            <td><label for="description">Deskripsi</label></td>
            <td><textarea name="description" id="description"></textarea></td>
        </tr>
        <tr>
            <td><label for="ticket_type">Tipe Tiket</label></td>
            <td>
                <select name="ticket_type" id="ticket_type">
                    <option selected disabled hidden>Pilih Tipe Tiket</option>
                    @foreach($ticketTypes as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="project">Project</label></td>
            <td>
                <select name="project" id="project">
                    <option selected disabled hidden>Pilih Project</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        {{-- <tr>
            <td><label for="status">Status</label></td>
            <td>
                <select name="status" id="status">
                    <option selected disabled hidden>Pilih</option>
                    <option value="open" {{ old('status') == 'open' ? 'selected' : '' }}>Open</option>
                    <option value="progress" {{ old('status') == 'progress' ? 'selected' : '' }}>Progress</option>
                    <option value="closed" {{ old('status') == 'closed' ? 'selected' : '' }}>Closed</option>
                    <option value="cancel" {{ old('status') == 'cancel' ? 'selected' : '' }}>Cancel</option>
                </select>
            </td>
        </tr>
        <tr> --}}
            <td colspan="2"><button type="submit">Tambah Tiket</button></td>
        </tr>
    </table>
</form>
