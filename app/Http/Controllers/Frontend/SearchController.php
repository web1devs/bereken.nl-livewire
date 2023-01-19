<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchNews(Request $request)
    {
        $encrypt_search = Crypt::encrypt($request->search);
        return redirect()->to('/search-news?search=' . $encrypt_search . '');
    }

    public function searchCalculator(Request $request)
    {
        $calculatorsSql = 'select * from calculator_lists
         where calculator_name LIKE "%' . $request->keywords . '%" order by id DESC limit 10';

        if ($request->keywords) {
            $data = DB::select($calculatorsSql);

            foreach ($data as $row) {
                $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $row->calculator_name);
                //echo '<li><a href="/'.strtolower($slug).'">'.$row->calculator_name.'</a></li>';

                echo '<li>
                <div onclick="save_search(this)" data-name="'.$row->calculator_name.'" data-href="/'.strtolower($slug).'" class="flex pl-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                
                <label for="checkbox-item-11"
                class="py-2 ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">' . $row->calculator_name . '</label>
                
                </div>
            
            </li>';
            }
        }
    }
}
