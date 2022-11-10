<div>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <input  type="hidden" wire:model="post_id">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="postName" type="text" placeholder="Nome" wire:model="name">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="descripition">
                Descripition
            </label>
            <input
                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="postDescription" type="text" placeholder='Descrição' wire:model="description">
        </div>
        <div class="flex items-center justify-between">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="button" wire:click.prevent="update({{$post_id}})">
                Atualizar
            </button>
            <button
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="button" wire:click.prevent="cancel()">
                Cancelar
            </button>
        </div>
    </form>
</div>
