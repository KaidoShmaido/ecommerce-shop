<?php

namespace App\Http\Controllers\frontend;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class FrontendHomeController extends Controller
{
    //
    public function index(){
        $featured_products=Product::where('trending','1')->take(15)->get();
        $trending_category=Category::where('popular','1')->take(15)->get();

        return view('frontend.index',compact('featured_products','trending_category'));
    }


    public function category(){
        $category=Category::where('status','0')->get();
        return view('frontend.category',compact('category'));
    }

    public function viewcategory($slug){
      if(Category::where('slug',$slug)->exists()){
        $category=Category::where('slug',$slug)->first();
        $products=Product::where('category_id',$category->id)->where("status",'0')->get();

        return view('frontend.products.index',compact('category','products'));
      }

      else{
        return redirect('/')->with('status','slug does not exist');
      }
    }

    public function productview($cate_slug,$prod_slug)
    {

        if(Category::where('slug',$cate_slug)->exists()){
            if(Product::where('slug',$prod_slug)->exists()){
                $products =Product::where('slug',$prod_slug)->first();
                return view('frontend.products.view', compact('products'));
            }
            else{
                return redirect('/')->with('status', 'the link is broken');
            }

        }
    }




}




