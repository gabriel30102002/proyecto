<form action "{{route('producto.update', $post->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for "title">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="
            nombre"
            value="{{ $producto->nombre}}" required>
        </div>
        <div class="form-group">
            <label for="body">Descripcion</label>
            <textarea class="form-control" id="Descripcion" name="
            Descripcion" rows="3" required>{{ $producto->descripcion}}</
            textarea>
        </dic>
        <button type="submit" class "btn mt-3 btn-primary">Update</
    button>
</form>


