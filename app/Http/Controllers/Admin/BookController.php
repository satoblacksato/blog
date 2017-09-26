<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\BookRequest;
use App\Core\Entities\Category;
use App\Core\Entities\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Storage;
use File;
class BookController extends Controller
{
    
    public function store(BookRequest $request)
    {
      
        $category=Category::findOrFail($request->categoria);
        $objBook=new Book();
        $objBook->fill($request->validated());
        $objBook->user_id=Auth::user()->id;
        Storage::disk('public')
            ->put($objBook->picture, File::get($request->picture));
        $category->books()->save($objBook);
        return response()->json('GUARDADO CORRECTAMENTE',200);
    }

   
    public function show($path)
    {
        $objBook = Book::findBySlugOrFail($path);
       return view('blog.book_details',compact('objBook'));
    }

}
