<?php 

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Lkp\LkpCategory;

class LkpCategoriesComposer
{
    public function compose(View $view){
        $view->with('LkpCategories', LkpCategory::all() );
    }
}