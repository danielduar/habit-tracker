<x-layout>
    <main class="py-10">

        <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mt-4">
            <h1 class="font-bold text-3xl mb-4">Faça seu login</h1>

            <p>
                Insira seus dados para acessar
            </p>

            <form action="{{ route('login.authenticate') }}" method="POST" class="flex flex-col">

                @csrf
                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">
                        Email:
                    </label>

                    <input type="email" name="email" placeholder="Seu@email.com"
                           class="bg-white -2 border-2 @error('email') border-red-500 @enderror">
                </div>
                @error('email')
                <p class="text-red-500 text-sm ">
                    {{$message}}
                </p>
                @enderror
                <div class="flex flex-col gap-2 mb-4">
                    <label for="password">
                        Senha:
                    </label>
                    <input type="password" name="password" placeholder="********"
                           class="bg-white  border-2 @error('password') border-red-500 @enderror">
                </div>

                @error('password')
                <p class="text-red-500 text-sm ">
                    {{$message}}
                </p>
                @enderror

                <button class="bg-white border-2 p-2" type="submit">
                    Entrar
                </button>
            </form>

        </section>
    </main>
</x-layout>
