<html>
    <head>
        <title>Show all products</title>
    </head>
    <body>
      <style>
        form{
          display:inline-block;

        }
      button{
        display:inline-block;
      }
        .button1{
          background-color:blue;
        }
      .button1:hover{
        background-color:rgb(142, 142, 240)
      }
      .button2{
        background-color:red;
      }
      .button2:hover{
        background-color:rgb(241, 168, 168);
      }
      </style>
<table class="table" border="1" width=100%  cellpadding="4xp">
    <caption><h1 style="color: blueviolet">list of all products</h1></caption>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
      <th scope="col">prossecing</th>
    </tr>
  </thead>
  <tbody>
     @foreach ($products as $product)
    <tr> 
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->name }}</td>
      <td>{{ $product->description }}</td>
      <td>{{ $product->price }}</td>  
      <td>
     <form action="{{ route('product.edit' , $product->id) }}" method=get>
       <button class=button1 style='color:white' type=submit>edit</button>
    </form>
    <form  action="{{ route('product.delete' , $product->id) }}" method=POST>
      @csrf
      @method('DELETE')
       <button class=button2 style="color:white" type=submit>delete</button>
    </form>
    </td>
    </tr>
       @endforeach
    </tbody>
</table>
  </body>
  </html>