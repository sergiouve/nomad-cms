<?php

namespace Nomad\NomadCMS\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'nomad_users';

    protected $fillable = ['name', 'email', 'password', 'active'];
}
