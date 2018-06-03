<?php

namespace Nomad\NomadCMS\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'nomad_pages';

    protected $fillable = ['title', 'slug', 'status'];
}
