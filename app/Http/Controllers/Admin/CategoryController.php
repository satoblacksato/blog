<?php

namespace App\Http\Controllers\Admin;

use App\Core\Entities\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Repositories\CategoryRPY;
class CategoryController extends Controller
{
   
   private $objCategoryRPY;

    function __construct(CategoryRPY $objCategoryRPY) {
         $this->objCategoryRPY=$objCategoryRPY;
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $table= $this->objCategoryRPY->forTables($request);
       //return view('catalogs.categories.index',compact('table'));
       return view('catalogs.categories.index')->with([
           'table'=>$table,'filter'=>$request->filter
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogs.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        ['name'=>'required|unique:categories,name','description'=>'required'],
        ['name.required'=>'El nombre es obligatorio',
         'description.required'=>'La descripcion es obligatoria']);
         $this->objCategoryRPY->forSave($request);
         return redirect()->route('catalogos.categories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Core\Entities\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('catalogs.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Core\Entities\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('catalogs.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Core\Entities\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,
        ['name'=>'required','description'=>'required'],
        ['name.required'=>'El nombre es obligatorio',
         'description.required'=>'El description es obligatorio']);
        
         $this->objCategoryRPY->forUpdate($request,$category);
         return redirect()->route('catalogos.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Core\Entities\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
