<x-Navbar></x-Navbar>

<h1>Halaman Edit Tiket</h1>

<form action="{{ route('ticket.update', $ticket->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <table>
            <td><label for="status">Status</label></td>
            <td>
                <select name="status" id="status">
                    <option selected disabled hidden>Pilih</option>
                    <option value="open" {{ old('status', $ticket->status) == 'open' ? 'selected' : '' }}>Open</option>
                    <option value="progress" {{ old('status', $ticket->status) == 'progress' ? 'selected' : '' }}>Progress</option>
                    <option value="closed" {{ old('status', $ticket->status) == 'closed' ? 'selected' : '' }}>Closed</option>
                    <option value="cancel" {{ old('status', $ticket->status) == 'cancel' ? 'selected' : '' }}>Cancel</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Edit Tiket</button></td>
        </tr>
    </table>
</form>