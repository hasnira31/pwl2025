<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'position',
        'salary',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'salary' => 'decimal:2',
    ];

    /**
     * Format the salary as rupiah currency.
     *
     * @return string
     */
    public function getFormattedSalaryAttribute()
    {
        return 'Rp ' . number_format($this->salary, 0, ',', '.');
    }
}
