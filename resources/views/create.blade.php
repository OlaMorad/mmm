<h1 style="color: rgb(91, 164, 233)">create your product</h1>
<form action="{{ url('product/insert') }}" method="POST">
    @csrf
    <input type="text" placeholder=" Enter name" name="name"> <br><br>
    <input type="text" placeholder=" Enter description" name="description"> <br><br>
    <input type="number" placeholder=" Enter price" name="price"> <br><br>
    <button type="submit" style="color: blue">create</button>
</form>