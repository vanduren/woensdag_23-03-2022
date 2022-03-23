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
                    <form action="{{ route('products.index') }}" method="GET">
                        @csrf
                        <input type="text" name="name" value="{{ $product->name }}" readonly><br>
                        <input type="text" name="description" value="{{ $product->description }}" readonly><br>
                        <input type="submit" value="Terug">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
