<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class MainArtikel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'is_approve',
        'created_by'
    ];

    protected $primaryKey = 'id';
    protected $table = 'main_artikels';

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
