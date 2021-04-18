<div class="fixed z-10 overflow-y-auto ease-out duration-400">
    <form>
        <div class="bg-white">
            <div class="mb-4">
                <label for="codijo">Codijo</label>
                <input type="text" id="codijo" placeholder="Escriba el codijo" wire:model="codijo">
                @error('codijo')<span class="text-red">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Escriba el nombre" wire:model="nombre">
                @error('nombre')<span class="text-red">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="direccion">Direccion</label>
                <input type="text" id="direccion" placeholder="Escriba la direccion" wire:model="direccion">
                @error('direccion')<span class="text-red">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="telefono">Telefono</label>
                <input type="text" id="telefono" placeholder="Escriba el Telefono" wire:model="telefono">
                @error('telefono')<span class="text-red">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Escriba el email" wire:model="email">
                @error('email')<span class="text-red">{{ $message }}</span> @enderror
            </div>



            <div class="mb-4">
                <button wire:click.prevent="store()" type="button">Guardar</button>
                <button wire:click.prevent="closeModal()" type="button">Cerrar</button>
            </div>
        </div>
    </form>
</div>
