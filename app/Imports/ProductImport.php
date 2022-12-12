<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\Province;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Str;

class ProductImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */


    public function model(array $row)
    {
        $category = Category::where('name', $row['category'])->first();
        $province = Province::where('title', $row['province'])->first();
        return $product =  new Product([
            'category_id' => $category->id ?? null,
            'province_id' => $province->id ?? null,
            'name' => $row['name'],
            'slug' => Str::slug($row['name']),
            'brand' => $row['brand'] ?? null,
            'description' => $row['description'],
            'original_price' => $row['selling_price'],
            'selling_price' => $row['selling_price'],
            'quantity' => 1000,
            'weight' => $row['weight'],
            'trending' => 0,
            'status' => 1,
            'meta_tittle' => $row['meta_title'],
            'meta_keyword' => $row['meta_keyword'],
            'meta_description' => $row['meta_description'],
            'sold' => $row['sold'],
        ]);
    }
}
