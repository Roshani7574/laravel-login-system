<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
<<<<<<< HEAD

class ProductController extends Controller
{
public function index(Request $request)
{

$query = Product::with(['category','subcategory']);

if($request->search){

$query->where('name','LIKE','%'.$request->search.'%');

}

$products = Product::latest()->paginate(10);
return view('admin.products.index', compact('products'));


}
public function create()
{
    $categories = \App\Models\Category::whereNull('parent_id')->get();
=======
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    // public function __construct()
    // {
    //    $this->middleware('auth');

    // }
public function index(Request $request)
{
    $search = $request->search;

    if($search){
        $products = Product::where('name', 'LIKE', "%$search%")->get();
    } else {
       $products = Product::paginate(5);

    }

    return view('admin.products.index', compact('products'));

}

public function create()
{
    $categories = Category::whereNull('parent_id')->get();
>>>>>>> d024ab1 (Update project: Like a E-commerce website)

    return view('admin.products.create', compact('categories'));
}



<<<<<<< HEAD
public function store(Request $request)
{
=======


public function store(Request $request)
{

>>>>>>> d024ab1 (Update project: Like a E-commerce website)
    $request->validate([
        'name' => 'required',
        'category_id' => 'required',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $imageName = null;

    if($request->hasFile('image')){
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('product_images'), $imageName);
    }

    Product::create([
        'name' => $request->name,
        'category_id' => $request->category_id,
        'subcategory_id' => $request->subcategory_id,
        'price' => $request->price,
        'description' => $request->description,
        'image' => $imageName
    ]);

    return redirect()->route('products.index')->with('success','Product added successfully');
}




   public function edit(Product $product)
{
    $categories = Category::whereNull('parent_id')->get();

    $subcategories = Category::whereNotNull('parent_id')->get();

    return view('admin.products.edit',
    compact('product','categories','subcategories'));
}

public function update(Request $request, Product $product)
{

$request->validate([
'name' => 'required',
'category_id' => 'required',
'price' => 'required|numeric',
'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
]);

$imageName = $product->image;

if($request->hasFile('image')){

$image = $request->file('image');

$imageName = time().'.'.$image->getClientOriginalExtension();

$image->move(public_path('product_images'), $imageName);

}

$product->update([

'name' => $request->name,
'category_id' => $request->category_id,
'subcategory_id' => $request->subcategory_id,
'price' => $request->price,
'description' => $request->description,
'image' => $imageName

]);

return redirect()->route('products.index');

}


    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return back();
    }
    public function getSubcategories($id)
{
    $subcategories = Category::where('parent_id',$id)->get();

    return response()->json($subcategories);
}
<<<<<<< HEAD
=======
public function show($id)
{
    $product = Product::find($id);

    // Get old viewed products
    $recent = session()->get('recent', []);

    // Remove if already exists
    $recent = array_diff($recent, [$id]);

    // Add current product to start
    array_unshift($recent, $id);

    // Keep only last 4
    $recent = array_slice($recent, 0, 4);

    session()->put('recent', $recent);

    // Fetch those products
    $recentProducts = Product::whereIn('id', $recent)->get();

    return view('frontend.product_detail', compact('product', 'recentProducts'));
}

public function placeOrder(Request $request)
{
    // Clear cart
    session()->forget('cart');

    return redirect('/order-success');
}
public function home()
{
    $products = Product::all(); // or paginate
    view('frontend.home');

}

>>>>>>> d024ab1 (Update project: Like a E-commerce website)


}
