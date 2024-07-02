<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Update</a>
                    <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $product->id }}').submit();">Delete</a>
                    <form id="delete-form-{{ $product->id }}" action="{{ route('products.delete', $product) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $products->appends(request()->except('page'))->links() }}