<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function purchaseItems () {
        return $this->hasMany(PurchaseItem::class);
    }

}
