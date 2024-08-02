<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class CommentArtikel extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'artikel_id',
        'created_by',
        'content'
    ];

    protected $primaryKey = 'id';
    protected $table = 'comment_artikels';

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function artikelId()
    {
        return $this->belongsTo(MainArtikel::class, 'artikel_id');
    }
}
