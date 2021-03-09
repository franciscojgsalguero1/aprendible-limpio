<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $table = 'projects';
    
    protected $guarded = ['id', 'updated_at', 'created_at'];
    
    public function getRouteKeyName() {
        return 'url';
    }
}
