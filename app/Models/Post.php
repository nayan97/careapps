<?php

namespace App\Models;

use App\Models\User;
use App\Models\Posttag;
use App\Models\Postcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    Protected $guarded =[];

    public function author()
    {
        return $this -> belongsTo(User::class, 'admin_id', 'id');
    }

    public function category()
    {
        return $this -> belongsToMany(Postcategory::class);
    }

    public function tag()
    {
        return $this -> belongsToMany(Posttag::class);
    }



}
