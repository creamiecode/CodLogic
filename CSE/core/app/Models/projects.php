<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;

    protected $fillable = ['project_title','project_link','project_color','project_logo','project_icon'];

    protected $table = 'projects';

    protected $primaryKey = 'id';

}
