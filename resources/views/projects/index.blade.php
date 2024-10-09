<x-layout>
        @session('alert')
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Listo!</strong>
                <span class="block sm:inline">{{ session('alert') }}</span>
            </div>
        @endsession
        <main class="p-10">
            <header>
                <h1 class="text-4xl font-bold text-gray-700">
                    Proyectos
                </h1>
            </header>
            <section class="flex flex-wrap">
                @foreach ($projects as $project)
                    <livewire:projects.card :project="$project" />
                @endforeach
            </section>
        </main>
</x-layout>