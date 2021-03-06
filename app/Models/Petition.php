<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;

    //  /**
    //   * The attributes that are mass assignable.
    //   *
    //   * @var array
    //   */
    //  protected $fillable = [
    //      'title',
    //      'info',
    //  ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}