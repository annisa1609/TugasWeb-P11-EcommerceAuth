<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
class StoreController extends Controller {
 public function index(Request $request){$products=Product::with('category')->available()->latest()->paginate(12);$categories=Category::orderBy('name')->get();return view('store.index',compact('products','categories'));}
 public function dashboard(){return view('dashboard',['productCount'=>Product::count()]);}
}
