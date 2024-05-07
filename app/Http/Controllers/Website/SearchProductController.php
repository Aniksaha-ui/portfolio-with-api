<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use \stdClass;

class SearchProductController extends Controller
{
    public function categorywisesearch($categoryid){
        $category = DB::table('categories')->where('id',$categoryid)->value('category_name');
        
        $subcategory = '';
        $lastlevelName = '';
        $products = DB::table('products')->where('category_id',$categoryid)->get();
        return view('Website.product',compact('products','category','subcategory','lastlevelName'));
    }
 

    public function subcategorywisesearch($categoryId,$subCategoryId){

        $category = DB::table('categories')->where('id',$categoryId)->value('category_name');
        
        $subcategoryInfo =  DB::table('subcategories')
                        ->join('categories','subcategories.category_id','categories.id')
                        ->select('subcategories.*')
                        ->where('categories.id',$categoryId)
                        ->where('subcategories.id',$subCategoryId)
                        ->first();
            $subcategory = $subcategoryInfo->subcategory_name; 
    
            $lastlevelName = '';
        $products = DB::table('products')->where('category_id',$categoryId)->where('subcategory_id',$subCategoryId)->get();
        // dd($products);
        return view('Website.product',compact('products','category','subcategory','lastlevelName'));
    }

    public function nextcategorywisesearch($categoryId,$subCategoryId,$lastlevel){
        
        $category = DB::table('categories')->where('id',$categoryId)->value('category_name');
        
        $subcategoryInfo =  DB::table('subcategories')
                        ->join('categories','subcategories.category_id','categories.id')
                        ->select('subcategories.*')
                        ->where('categories.id',$categoryId)
                        ->where('subcategories.id',$subCategoryId)
                        ->first();
            $subcategory = $subcategoryInfo->subcategory_name; 

        $nextsubcategory = DB::table('lastlavels')
        ->join('categories','lastlavels.category_id','categories.id')
        ->join('subcategories','lastlavels.subcategory_id','subcategories.id')
        ->select('lastlavels.*','categories.category_name','subcategories.subcategory_name')
        ->where('categories.id',$categoryId)
        ->where('subcategories.id',$subCategoryId)
        ->where('lastlavels.id',$lastlevel)
        ->first();   
        
        // dd($nextsubcategory);
        


        $lastlevelName = $nextsubcategory->lastlevel;
        $products = DB::table('products')->where('category_id',$categoryId)->where('subcategory_id',$subCategoryId)->where('lastlavel_id',$lastlevel)->get();
        // dd($products);
        return view('Website.product',compact('products','category','subcategory','lastlevelName'));
    }


    public function getProducts(){
        $category ='';
        $subcategory='';
        $lastlevelName='';
        $products= DB::table('products')->get();
        return view('Website.product',compact('products','category','subcategory','lastlevelName'));
    }

    public function productDetails($productId){
        $productDetails = DB::table('products')->where('id',$productId)->first();
        $productCategory = DB::table('categories')->where('id',$productDetails->category_id);
        return view('Website.productDetails',compact('productDetails','productCategory'));
    }

}
