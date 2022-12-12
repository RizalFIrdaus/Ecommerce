<?php

namespace App\Imports;

use App\Models\Brands;
use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class BrandImport implements ToModel,WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $category = Category::where('name', $row['category'])->first();
        return $product =  new Brands([
            'category_id' => $category->id ?? null,
            'name' => $row['brand'],
            'slug' => Str::slug($row['brand'])
        ]);
    }
}
