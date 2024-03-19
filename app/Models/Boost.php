<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boost extends Model
{
    use HasFactory;

    protected $table = 'boosts';

    protected $fillable = [
        'currentLeague',
        'leagueDivision',
        'leaguePoints',
        'targetLeague',
        'targetLeagueDivision',
        'price',
        'extraWin',
        'liveStream',
        'offlineMod',
        // 'user_id', // Bu satırı eklemeye gerek yok çünkü ilişkiyi belirtirken kullanacağız
    ];

    public $timestamps = true;

    // Kullanıcı-Boost ilişkisini tanımla
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
