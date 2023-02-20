<?php

namespace App\Models\System\Repository;

use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class PassportIssuer extends Model
{
    use AsSource;

    protected $fillable = [
        'fullname',
        'code',
    ];

    public function getFormattedAttribute()
    {
        return "{$this -> fullname} ({$this -> code})";
    }
}
