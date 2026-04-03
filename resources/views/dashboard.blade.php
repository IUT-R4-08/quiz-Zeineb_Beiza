<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Choisissez une catégorie pour commencer :</h3>
                    
                    @if($categories->isEmpty())
                        <p>Aucune catégorie disponible. Avez-vous lancé le seeder ?</p>
                    @else
                        <ul class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            @foreach($categories as $category)
                                <li class="bg-blue-500 text-white p-4 rounded shadow hover:bg-blue-600 transition text-center">
                                    <a href="#" class="block font-semibold">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
