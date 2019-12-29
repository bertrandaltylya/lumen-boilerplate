<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 
        'description',
        'start_date',
        'end_date',
        'delivery_date',
        'sells_start_date',
        'sells_end_date',
    ];
    /**
     * The attributes excluded from the model's JSON form.
    
     * @var array
     */
    protected $hidden = [
        
    ];
}
