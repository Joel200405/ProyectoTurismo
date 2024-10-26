
    <table class="min-w-full max-w-screen-md bg-white border">
        <thead class="bg-blue-900 text-white text-sm">
            <tr>
                <th class="py-2 px-4 border">ID</th>
                <th class="py-2 px-4 border">Nombre</th>
                <th class="py-2 px-4 border">Email</th>
                <th class="py-2 px-4 border">Telefono</th>
                <th class="py-2 px-4 border">Destino_id</th>
                <th class="py-2 px-4 border">User_id</th>
                <th class="py-2 px-4 border">Fecha</th>
                <th class="py-2 px-4 border">Personas</th>
                <th class="py-2 px-4 border">Comentarios</th>
                <th class="py-2 px-4 border">Estado</th>
            </tr>
        </thead>
        <tbody class="text-sm">
            @foreach($reservas as $reservas)
            <tr>
                <td class="py-2 px-4 border">{{ $reservas->id }}</td>
                <td class="py-2 px-4 border">{{ $reservas->nombre }}</td>
                <td class="py-2 px-4 border">{{ $reservas->email }}</td>
                <td class="py-2 px-4 border">{{ $reservas->telefono }}</td>
                <td class="py-2 px-4 border">{{ $reservas->destino_id }}</td>
                <td class="py-2 px-4 border">{{ $reservas->user_id }}</td>
                <td class="py-2 px-4 border">{{ $reservas->fecha }}</td>
                <td class="py-2 px-4 border">{{ $reservas->personas }}</td>
                <td class="py-2 px-4 border">{{ $reservas->comentarios }}</td>
                <td class="py-2 px-4 border">{{ $reservas->estado }}</td>
                <td class="py-2 px-4 border">
                    <a href="#" class="text-blue-500 hover:text-blue-700">Editar</a>
                    |
                    <a href="#" class="text-red-500 hover:text-red-700">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

