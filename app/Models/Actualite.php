<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'description', 'image_path','pays_id'];
    
    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }

}