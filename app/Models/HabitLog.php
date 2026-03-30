<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HabitLog extends Model
{
    use HasFactory;

    protected $fillable =
        [
            'user_id',
            'habit_id',
            'completed_at'
        ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Registros pertencem a somente um usuario (BelongsTo)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Um registro tem somente um habito (BelongsTo)
     */
    public function habit(): BelongsTo
    {
        return $this->belongsTo(Habit::class);
    }
}
