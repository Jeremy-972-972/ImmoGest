{{$categories->name}}
<br>
@foreach ( $categories->products as $rowproduct )
{{$rowproduct->name}}
<br>
    
@endforeach

{{$product->categorie->name}}