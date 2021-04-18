<x-slot name="header">
    <h2>Reguistro semana 13</h2>
</x-slot>

<div>
    @if(session()->has('message'))
        <p>{{ session('message') }}</P>
    @endif

    <button wire:click="create()">Create alumnos</button>
    @if($isOpen)
    @include('livewire.create')
    @endif
    <table class="table-fiex w-full">
        <thead>

        <table>
        <table width="70%" border="1px" align="center">
        
<tr>
            <tr>
                <th class="px-4 py-2">Id</th>
                <th class="px-4 py-2">Codigo</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Direccion</th>
                <th class="px-4 py-2">Telefono</th>
                <th class="px-4 py-2">Email</th>
            </tr>

</tr>
        </thead>
        <tbody>
            @foreach($alumno as $alumnos)
            <tr>
                <td>{{ $alumnos->id }}</td>
                <td>{{ $alumnos->codijo }}</td>
                <td>{{ $alumnos->nombre }}</td>
                <td>{{ $alumnos->direccion }}</td>
                <td>{{ $alumnos->telefono }}</td>
                <td>{{ $alumnos->email }}</td>
            </tr>
            <tr>
                <td>
                    <button wire:click="edit({{ $alumnos->id }})">Editar</button>
                    <button wire:click="delete({{ $alumnos->id }})">Eliminar</button>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
