<?php

namespace App\Models\Entity;

use App\Models\AppModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Laptop extends AppModel
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'laptops';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'name',
        'category',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        //
    ];

    public function getCategoryColorAttribute() {
        if ($this->category == "Standar") {
           return "#CECE5A";
        } 
        elseif ($this->category == "Gaming") {
            return "#F24C3D";
        }
        elseif ($this->category == "Ultrabook") {
            return "#FD8D14";
        } 
        else {
            return "#FFE17B";
        }
    }
}
