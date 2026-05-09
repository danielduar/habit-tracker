<nav>
    <ul class="flex gap-4 items-center">
        <li>
            <a href="{{route("habits.index")}}"
               class="{{Route::is("habits.index") ? 'font-bold' : ''}} text-md border-r-2 border-habit-orange pr-2">
                Hoje
            </a>
        </li>

        <li>
            <a href="{{route('habits.manage')}}"
               class=" text-md border-r-2
                       border-habit-orange pr-2 hover:underline">
                Histórico
            </a>
        </li>

        <li>
            <a href="#"
               class=" text-md border-r-2 border-habit-orange pr-2 hover:underline">
                Calendário
            </a>
        </li>

        <li>
            <a href="{{route('habits.manage')}}"
               class=" {{Route::is("habits.manage") ? 'font-bold' : ''}}">
                Gerenciar Hábitos
            </a>
        </li>


    </ul>
</nav>
