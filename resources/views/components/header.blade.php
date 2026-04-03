<header class="bg-white border-b-2 flex items-center justify-between p-4">
    <div class=" font-bold habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">
        HT
    </div>


    <div>


        @auth
            <form action="{{route("login.logout")}}" method="POST" class="inline"
            >
                @csrf
                <button type="submit" class="habit-shadow-lg habit-btn p-2 border-2">
                    Sair
                </button>

            </form>
        @endauth

        {{--        Se o usuario estiver deslogado--}}
        @guest
            <div class="flex gap-2">
                <a href="{{route('register.index')}}" class=" p-2 inline habit-shadow-lg habit-btn">
                    Cadastrar
                </a>


                <a href="{{route('login')}}" class="bg-habit-orange p-2  inline habit-shadow-lg habit-btn">
                    Logar
                </a>
            </div>
        @endguest
    </div>


</header>
