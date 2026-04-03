<x-layout>
    <main class="py-10">

        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
            <h1 class="font-bold text-3xl mb-4">Cadastre um Hábito</h1>

            <p>
               Preencha o formulário abaixo para cadastrar um hábito
            </p>

            <form action="{{route('habits.store')}}" method="POST" class="flex flex-col">

                @csrf
                <div class="flex flex-col gap-2 mb-4">
                    <label for="name">
                        Nome:
                    </label>

                    <input type="text" name="name" placeholder="EX: Caminhar "
                           class="bg-white -2 border-2 @error('name') border-red-500 @enderror">
                </div>
                @error('name')
                <p class="text-red-500 text-sm ">
                    {{$message}}
                </p>
                @enderror

                <button class="bg-white border-2 p-2" type="submit">
                    Cadastrar
                </button>
            </form>

        </section>
    </main>
</x-layout>
