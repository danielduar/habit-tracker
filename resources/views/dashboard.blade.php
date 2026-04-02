<x-layout>
    <main class="py-10 mx-auto">
        <h1 class="font-bold text-4xl text-center">Dashboard</h1>
        <p class="mb-4">Bem-vindo(a) {{auth()->user()->name}} </p>


        @session('success')
        <p class="bg-green-300 border border-b-green-400 px-2 block mb-2 ">
            {{session('success')}}
        </p>
        @endsession

        <a href="{{route('habits.create')}}" class="p-2 border-2 bg-white font-bold block">
            Crie um novo Hábito
        </a>
        <h2 class="text-xl mt-4">Listagem dos Hábitos</h2>

        <ul class="flex flex-col gap-2">
            @forelse($habits as $habit)

                <li class="pl-4">
                    <div class="flex gap-2 items-center">
                        <p class="font-bold text-xl">-{{$habit->name}}</p>
                        <p>({{$habit->HabitLogs->count()}})</p>

                        <a href="{{route('habits.edit',$habit->id)}}"
                           class="bg-white  hover:opacity-70 rounded-md cursor-pointer">
                            <x-icons.edit/>
                        </a>
                        <form method="POST" action="{{route('habits.destroy',$habit)}}">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="bg-red-500 text-white p-2  hover:opacity-70 rounded-md cursor-pointer">
                                <x-icons.trash/>
                            </button>
                        </form>
                    </div>
                </li>
            @empty
                <p>Voce ainda nao tem habitos cadastrados</p>
            @endforelse
        </ul>

    </main>
</x-layout>
