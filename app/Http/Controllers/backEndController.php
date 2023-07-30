<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Category;

class backEndController extends Controller
{
    function login(){
        return view('admin/login');
    }
    
    function admin(Request $req){
      $dbs = Admin::all();
      $q=(($req->input('email') == $dbs[0]->email) || ($req->input('email') == $dbs[0]->username)) && ($req->input('password') == $dbs[0]->password);
      if($q){
       return $q;
      }
      else{
        return $q;
      }
    }
    
    function dashboard(){
        return view('admin/dashboard');
    }

    function AllProduct(){
        $members = Product::all();
        return view('admin/product/all-products',['members'=>$members]);
    }

    function AddProduct(){
        return view('admin/product/add-product');
    }

    function DeleteProduct($id){
        $dbs = Product::find($id);
        $dbs->delete();
        return redirect('admin/all-products');
    }

    function EditProduct($id){
        $dbs = Product::find($id);
        return view('admin/product/update-product', ['dbs'=>$dbs]);
    }

    function UpdateProduct(Request $req)
    {
      
      $dbs = Product::find($req->id);

      if (!$dbs) {
        // Handle product not found error
        return redirect()->back()->with('error', 'Product not found.');
      }
    
        // Check if a new image is uploaded for updating
      if ($req->hasFile('file')) {
        $image = $req->file('file');
        $name = $image->getClientOriginalName();
        $image->storeAs('public/images', $name);
        
      }
         
      
      $dbs->name = $req->pname;
      $dbs->description = $req->pdescription;
      $dbs->file = $name;
      $dbs->category = $req->category;
      $dbs->subcategory = $req->subcategory;
      $result = $dbs->save();
      return redirect('admin/all-products');
    }

    function WpAddProduct(Request $req){
        
        $image = $req->file('file');;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/images', $name);
        $dbs = new Product(); 
        $dbs->name = $req->input('pname');
        $dbs->description = $req->input('pdescription');
        $dbs->file = $name;
        $dbs->category = $req->input('category');
        $dbs->subcategory = $req->input('subcategory');
        $dbs->save();
        return redirect('admin/all-products');
    }

    function AddCategory(){
        return view('admin/product/add-category');
    }

    function WpAddCategory(Request $req){
        $dbs = new Category(); 
        $dbs->name = $req->input('cname');
        $dbs->slug = $req->input('slug');
        $dbs->description = $req->input('cdescription');
        $dbs->image = $req->input('file');
        $dbs->category = $req->input('pcategory');
        $result = $dbs->save();
        return view('admin/product/add-category', ['name'=> $result]);
    }

}