<html>
    <body>
        <h1>Hello,</h1>
         
        @foreach ($proyecto as $proyecto)
            <li>{{$proyecto->nombre}}</li>
            <a href="{{route('producto.edit',['producto' => $producto])}}">
            Editar</a>
        @endforeach
  

    </body>
</html>