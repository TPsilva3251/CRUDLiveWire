<div>
    @if ($updatePost)
    @include('livewire.update')
    @else
    @include('livewire.create')
    @endif
    <table class="table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 border-solid border-2 border-gray-600">Título</th>
                <th class="px-4 py-2 border-solid border-2 border-gray-600">Descrição</th>
                <th class="px-4 py-2 border-solid border-2 border-gray-600">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="border-solid border-2 border-gray-600">{{ $post->name }}</td>
                    <td class="border-solid border-2 border-gray-600">{{ $post->description }}</td>
                    <td class="border-solid border-2 border-gray-600">
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded"
                        wire:click="edit({{$post->id}})">
                            Editar
                          </button>
                          <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded"
                          wire:click="delet({{$post->id}})">
                            Deletar
                          </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
