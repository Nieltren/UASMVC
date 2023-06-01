@extends('layout')

@section('content')

<div>
    <a style="margin-left: -3rem" class="btn btn-primary" href="{{ route('products.create') }}">ADD NEW</a>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="banner">
        All Product
    </div>
    <div class="wrapper">
        <table id="table">
            <tr>
                <th>ID <span style="cursor: pointer; font-size: 12px;" onclick="sortTable(0)">&#9650 &#9660</span></th>
                <th>Jenis Produk <span style="cursor: pointer; font-size: 12px;" onclick="sortTable(1)">&#9650 &#9660</span></th>
                <th>Deskripsi <span style="cursor: pointer; font-size: 12px;" onclick="sortTable(2)">&#9650 &#9660</span></th>
                <th>Gambar</th>
                <th style="width: 5rem;">Created At</th>
                <th style="width: 5rem;">Updated At</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->jenis_produk }}</td>
                <td>{{ $product->deskripsi }}</td>
                <td><img src="{{ asset('images/' . $product->gambar) }}" width="100px" height="100px"></td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        <a href="{{ route('products.edit',$product->id) }}">
                            <img style="width: 2rem;" src="edit.png">
                        </a>
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure? you want to delete this?');" style="border: none; cursor: pointer;" type="submit"><img style="width: 2rem;" src="bin.png"></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

</div>

<script>
    function sortTable(columnIndex) {
        let table = document.getElementById("table");
        let rows = Array.from(table.rows).slice(1);
        rows.sort((a, b) => {
            let cellA = a.cells[columnIndex].textContent.trim();
            let cellB = b.cells[columnIndex].textContent.trim();

            return cellA.localeCompare(cellB, undefined, {
                numeric: true,
                sensitivity: "base"
            });
        });

        if (table.rows[0].cells[columnIndex].classList.contains("asc")) {
            rows.reverse();
            table.rows[0].cells[columnIndex].classList.remove("asc");
            table.rows[0].cells[columnIndex].classList.add("desc");
        } else {
            table.rows[0].cells[columnIndex].classList.remove("desc");
            table.rows[0].cells[columnIndex].classList.add("asc");
        }

        rows.forEach((row) => {
            table.appendChild(row);
        });
    }
</script>

@endsection