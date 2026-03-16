<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
{
$categories = Category::latest()->paginate(10);
return view('admin.categories.index', compact('categories'));

}



   public function create()
{
    $categories = Category::all();

    return view('admin.categories.create',compact('categories'));
}


    public function store(Request $request)
{
    $request->validate([
'name' => 'required|unique:categories,name'
]);


    Category::create([
        'name' => $request->name,
        'parent_id' => $request->parent_id
    ]);

    return redirect()->route('categories.index')
    ->with('success','Category created');
}


    public function edit($id)
{
    $category = Category::findOrFail($id);

    $categories = Category::where('id','!=',$id)->get();

    return view('admin.categories.edit',
    compact('category','categories'));
}


    public function update(Request $request,$id)
{
    $request->validate([
        'name' => 'required'
    ]);

    $category = Category::findOrFail($id);

    $category->update([
        'name' => $request->name,
        'parent_id' => $request->parent_id
    ]);

    return redirect()->route('categories.index');
}


    public function destroy($id)
{

$category = Category::findOrFail($id);

if($category->subcategories()->count() > 0){

return back()->with('error','Delete subcategories first');

}

$category->delete();

return back()->with('success','Category deleted');

}


}
