<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use App\Models\Product;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
  public function importForm(){
    
    $products = Product::get();
    return view ('import-form',compact('products'));
  }

  public  function SaveImportFile(Request $request){


  Excel::import(new ProductsImport,$request->file('file'));
  
  return  back();
  }

  public function export() 
  {
      return Excel::download(new ProductsExport, 'products.xlsx');
  }
}
