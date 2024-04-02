<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id_employee',
        'surname',
        'name',
        'patronymic',
        'gender',
        'date_birth',
        'address',
        'position',
        'id_department',
        'id_user'
    ];

    public function getId(): int
    {
        return $this->id;
    }
}
