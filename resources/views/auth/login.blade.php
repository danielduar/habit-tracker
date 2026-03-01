<x-layout>
    <main class="py-10">
        <h1>Faça seu login</h1>
        <section class="mt-4">
            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf

                <div>
                    @error("email")
                    <p class="text-red-500 text-xl mt-1">
                        {{$message}}
                    </p>
                    @enderror
                </div>

                <input type="email" name="email" placeholder="Seuemail.com"
                       class="bg-white -2 border-2">


                <input type="password" name="password" placeholder="********"
                       class="bg-white  border-2">

                <button class="bg-white border-2 p-2" type="submit">
                    Entrar
                </button>
            </form>

        </section>
    </main>
</x-layout>
