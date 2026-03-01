<x-layout>
    <main class="py-10">
        <p>Veja seus habitos criarem vida</p>
        @auth
            <p>
                Bem-vindo {{auth()->user()->name}}
            </p>
        @endauth
    </main>
</x-layout>
