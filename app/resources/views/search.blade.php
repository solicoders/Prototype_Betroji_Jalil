@foreach($products as $product)
<tr>
    <th>{{$product->nom}}</th>
    <td>{{$product->description}}</td>
    

</tr>
@endforeach
<tr>
    <td></td>
    <td colspan="3">
        <div class="w-25 container">
            {!! $products->links() !!}
        </div>
    </td>

</tr>