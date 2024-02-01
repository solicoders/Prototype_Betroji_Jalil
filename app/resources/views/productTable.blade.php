<table class="table table-striped  text-nowrap">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Prix</th>
            <th>Orders</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        <tr>
            <td>{{ $product->nom }}</td>
            <td class="truncate">{{ $product->description }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->prix }}</td>
            <td><a href="{{route('orders.index',['id' => $product->id])}}"
                class="btn btn-sm btn-default "><i class="fa-solid fa-eye"></i></a></td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Aucun comment trouvé.
        
            </td>
        </tr>

        @endforelse
    </tbody>
</table>