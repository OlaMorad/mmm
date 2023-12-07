<h1 style="color: rgb(91, 164, 233)">Edit product</h1>
<form action="{{ route('product.update',$p->id) }}" method="POST">
    @csrf
    <input type="text"  name="name" value="{{$p->name}}"> <br><br>
    <input type="text"  name="description"  value="{{$p->description}}" > <br><br>
    <input type="number"  name="price" value="{{$p->price}}"> <br><br>
    <button type="submit" style="color: blue">edit</button>
</form>