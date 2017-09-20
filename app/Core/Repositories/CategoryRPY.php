<?php
namespace App\Core\Repositories;
use Illuminate\Http\Request;
use App\Core\Entities\Category;
class CategoryRPY{

    public function forTables(Request $request){
        
        if($request->ajax()){
            //para datatable
        }else{
            $result=Category::orderBy('name','ASC')->paginate(2);
            return $result;
        }
    }

}