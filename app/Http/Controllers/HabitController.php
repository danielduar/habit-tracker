<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\HabitRequest;
use App\Models\Habit;
use App\Models\HabitLog;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HabitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $habits = auth()->user()->habits;
        return view('dashboard', compact('habits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('habits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {

        $validated = $request->validated();
        Auth::user()->habits()->create($validated);
        return redirect()->route('habits.index')
            ->with('success', 'Hábito cadastrado com sucesso!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habit $habit)
    {
        return view('habits.edit', compact('habit'));
    }

    public function manage()
    {
        $habits = Auth::user()->habits;

        return view('habits.manage', compact('habits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        if ($habit->user_id !== Auth::user()->id) {
            abort(403, 'Ação nao autorizada');
        }
        $habit->update($request->all());
        return redirect()
            ->route('habits.index')->with("success", "Hábito atualizado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if ($habit->user_id !== Auth::user()->id) {
            abort(403, 'Ação nao autorizada');
        }
        $habit->delete();
        return redirect()->route('habits.index')->with("success", "Hábito removido com sucesso!");
    }

    public function toogle(Habit $habit)
    {
        if ($habit->user_id !== Auth::user()->id) {
            abort(403, 'Ação nao autorizada');
        }

        $today = Carbon::today()->toDateTimeString();
        $log = HabitLog::query()->where("habit_id", $habit->id)
            ->where("completed_at", $today)->first();
        if ($log) {
            $log->delete();
            $message = "Hábito desmarcado";
        } else {
            HabitLog::create([
                "user_id" => Auth::id(),
                "habit_id" => $habit->id,
                "completed_at" => $today
            ]);
            $message = "Hábito concluido";
        }
        return redirect()->route('habits.index')->with("success", $message);

    }
}
