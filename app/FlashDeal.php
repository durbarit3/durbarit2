<?php

namespace App;

use App\FlashDealDetail;
use Illuminate\Database\Eloquent\Model;

class FlashDeal extends Model
{
    protected $fillable = [

        'title',
        'start_date',
        'end_date',
        'is_deleted',
        'status',

    ];

    public function flash_deal_details()
    {
        return $this->hasMany(FlashDealDetail::class);
    }

}
