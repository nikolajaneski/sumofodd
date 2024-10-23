<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'body', 'category_id'];

    function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }



    public static function calculate($request)  {
        $start = $request->startNumber;
        $end = $request->endNumber;
        $sum = 0;

        // return !$start || !$end;

        for ($i=$start; $i <= $end; $i++) { 
            if($i % 2 == 1) {
                $sum += $i;
            }
        }

        return $sum;
    }


}