<?php

namespace App\Models\Bridge;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CompanyLkpCategory extends Pivot
{
    protected $fillable = [
        'company_id', 'lkp_category_id',
    ];
}
