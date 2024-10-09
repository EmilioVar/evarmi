<x-layout>
    <x-slot:styles>
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