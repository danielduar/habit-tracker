<x-layout>
    <main class="py-10">

        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
            <h1 class="font-bold text-3xl mb-4">Registre-se</h1>

            <p>
                Preencha as informações para cadastrar seus habitos.
            </p>

            <form action="{{ route('register.store') }}" method="POST" class="flex flex-col">

                @csrf
                <div class="flex flex-col gap-2 mb-4">
                    <label for="name">
                        Nome:
                    </label>

                    <input type="text" name="name" placeholder="Seu nome"
                           class="bg-white -2 border-2 @error('name') border-red-500 @enderror">
                </div>
                @error('name')
                <p class="text-red-500 text-sm ">
                    {{$message}}
                </p>
                @enderror

                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">
                        Email:
                    </label>

                    <input type="email" name="email" placeholder="Seu@email.com"
                           class="bg-white border-2 @error('email') border-red-500 @enderror">
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

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password_confirmation">
                        Repita sua senha:
                    </label>
                    <input type="password" name="password_confirmation" placeholder="********"
                           class="bg-white  border-2 @error('password') border-red-500 @enderror">
                </div>


                <button class="bg-white border-2 p-2" type="submit">
                    Cadastrar
                </button>
            </form>
            <p class="text-center mt-4">
                Ainda não tem uma conta?
                <a href="{{route('login')}}" class="underline hover:opacity-50 transition">
                    Faça login
                </a>
            </p>
        </section>
    </main>
</x-layout>
