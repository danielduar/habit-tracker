<x-layout>
    <main class="py-10 mx-auto min-h[(100vh-100px)]">
        <x-navbar/>


        @session('success')
        <p class="bg-green-300 border border-b-green-400 px-2 block mb-2 ">
            {{session('success')}}
        </p>
        @endsession
        <h2 class="text-xl mt-8 mb-2">{{date('d-m-Y')}}</h2>

        <ul class="flex flex-col gap-2">


            @forelse($habits as $habit)

                @php
                    $hasCompletedToday = $habit->habitLogs->where("user_id",auth()->id())
                    ->where("completed_at",\Carbon\Carbon::today()->toDateString())->isNotEmpty();

                @endphp
                <li class="habit-shadow-lg p-2 bg-[#FFDAAE]">
                    <form action="{{route("habits.toogle",$habit->id)}}" method="POST" class="flex gap-2 items-center"
                          id="form-{{$habit->id}}">

                        @csrf
                        <input type="checkbox" class="w-5 h-5" {{$habit->is_completed ? 'checked' : ''}}
                            {{$hasCompletedToday ? 'checked' : ''}}
                        onchange="document.getElementById('form-{{$habit->id}}').submit()"/>
                        <p class="font-bold text-lg">{{$habit->name}}</p>

                    </form>
                </li>
            @empty
                <p>Voce ainda nao tem habitos cadastrados</p>
            @endforelse
        </ul>

    </main>
</x-layout>


{{--<a href="{{route('habits.edit',$habit->id)}}"--}}
{{--   class="bg-white  hover:opacity-70 rounded-md cursor-pointer">--}}
{{--    <x-icons.edit/>--}}
{{--</a>--}}
{{--<form method="POST" action="{{route('habits.destroy',$habit)}}">--}}

{{--    @csrf--}}
{{--    @method('DELETE')--}}

{{--    <button type="submit"--}}
{{--            class="bg-red-500 text-white p-2  hover:opacity-70 rounded-md cursor-pointer">--}}
{{--        <x-icons.trash/>--}}
{{--    </button>--}}
{{--</form>--}}
