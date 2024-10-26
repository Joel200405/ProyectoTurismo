
<table class="min-w-full max-w-screen-md bg-white border">
    <thead class="bg-blue-900 text-white text-sm">
        <tr>
            <th class="py-2 px-4 border">ID</th>
            <th class="py-2 px-4 border">Nombre</th>
            <th class="py-2 px-4 border">Descripcion</th>
            <th class="py-2 px-4 border">Ubicacion</th>
            <th class="py-2 px-4 border">Precio</th>
            <th class="py-2 px-4 border">Popular</th>
            <th class="py-2 px-4 border">Imagen_url</th>
        </tr>
    </thead>
    <tbody class="text-sm">
        @foreach($destino as $destino)
        <tr>
            <td class="py-2 px-4 border">{{ $destino->id }}</td>
            <td class="py-2 px-4 border">{{ $destino->nombre }}</td>
            <td class="py-2 px-4 border">{{ $destino->descripcion }}</td>
            <td class="py-2 px-4 border">{{ $destino->ubicacion }}</td>
            <td class="py-2 px-4 border">{{ $destino->precio }}</td>
            <td class="py-2 px-4 border">{{ $destino->popular }}</td>
            <td class="py-2 px-4 border">{{ $destino->imagen_url }}</td>
            <td class="py-2 px-4 border">
                <a href="#" class="text-blue-500 hover:text-blue-700">Editar</a>
                |
                <a href="#" class="text-red-500 hover:text-red-700">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>