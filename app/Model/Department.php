<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id_department',
        'title',
        'species_department'
    ];

    public function getId(): int
    {
        return $this->id;
    }
}
