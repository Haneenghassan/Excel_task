<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $existingRecord = Product::where('product_id', $row['product_id'])->first();

        if ($existingRecord) {

             $existingRecord->update([
                "price"=> $row['price']
                // other fields to update
            ]);

        }else{
            
        return new Product([
            "product_id" => $row['product_id'],
            "product" => $row['product'],
            "discount" => $row['discount'],
            "price"=> $row['price']
        ]);
    }
    }
}
