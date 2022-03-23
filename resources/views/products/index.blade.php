<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2 class="text-purple-400">test</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href={{ route('products.create') }} class="btn btn-primary">Create</a>
                    <table>
                    @foreach ($products as $product)
                        <tr class="items-baseline">
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                <a href="{{ route('products.show', $product) }}">View</a>
                            </td>
                            <td>
                                <a href="{{ route('products.edit', $product) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('products.destroy', $product) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
