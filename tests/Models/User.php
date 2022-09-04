<?php

namespace Ubmvn\Settings\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Ubmvn\Settings\HasSettings;

class User extends Model
{
    use HasSettings;

    protected $guarded = [];
}
