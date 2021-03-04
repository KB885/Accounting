<?php

namespace App\Models;

use App\Traits\Uuids;
use Laratrust\Models\LaratrustTeam;

class Team extends LaratrustTeam
{
    use Uuids;
    public $guarded = [];
}
