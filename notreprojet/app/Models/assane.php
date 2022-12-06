<?php

namespace App\Models;
use Eloquent;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as DatabaseEloquentModel;
use Jenssegers\Eloquent\Model as EloquentModel;
use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Jenssegers\Mongodb\Eloquent\Model;

class assane extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'email',
        'password',
        'role',
        'photo',
        'etat',
        'date_inscription',
        'date_archivage',
        'date_modification',
    ];

}
