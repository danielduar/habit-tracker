<header class="bg-white border-b-2 flex items-center justify-between p-4">
    {{--    logo--}}
    <div>
        logo
    </div>

    {{--    github--}}
    <div>
        github
        {{--    Ser o usuario estiver logado --}}

        @auth
            <form action="{{route("login.logout")}}" method="POST" class="inline"
            >
                @csrf
                <button type="submit" class="bg-white p-2 border-2">
                    Sair
                </button>

            </form>
        @endauth

        {{--        Se o usuario estiver deslogado--}}
        @guest
            <a href="{{route('login')}}" class="bg-white p-2 border-2 inline">
                Login
            </a>
        @endguest
    </div>


</header>
