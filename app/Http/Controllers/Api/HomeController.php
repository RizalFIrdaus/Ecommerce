<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HastagResource;
use App\Models\Brands;
use App\Models\Cargo;
use App\Models\Category;
use App\Models\Country;
use App\Models\HomeVideo;
use App\Models\News;
use App\Models\ProductHastags;
use App\Models\Province;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAllCategory()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
    public function getAllCargo()
    {
        $cargo = Cargo::all();
        return response()->json($cargo);
    }
    public function getAllNews()
    {
        $news = News::all();
        return response()->json($news);
    }
    public function getAllVideoBanner()
    {
        $homevideo = HomeVideo::all();
        return response()->json($homevideo);
    }
    public function getAllBrands()
    {
        $brands = Brands::all();
        return response()->json($brands);
    }
    public function getAllProvince()
    {
        $province = Province::all();
        return response()->json($province);
    }
    public function getAllCountry()
    {
        $country = Country::all();
        return response()->json($country);
    }
    public function getViralHastag()
    {
        $viral = ProductHastags::where('hastags_id', '1')->get();
        return HastagResource::collection($viral);
    }
    public function getRebahanHastag()
    {
        $rebahan = ProductHastags::where('hastags_id', '3')->get();
        return HastagResource::collection($rebahan);
    }
    public function getKopiTehHastag()
    {
        $kopiTeh = ProductHastags::where('hastags_id', '6')->get();
        return HastagResource::collection($kopiTeh);
    }
    public function getRekomendasiHastag()
    {
        $kopiTeh = ProductHastags::where('hastags_id', '7')->get();
        return HastagResource::collection($kopiTeh);
    }
    public function getDapurHastag()
    {
        $dapur = ProductHastags::where('hastags_id', '8')->get();
        return HastagResource::collection($dapur);
    }
    public function getBundlingHastag()
    {
        $bundling = ProductHastags::where('hastags_id', '11')->get();
        return HastagResource::collection($bundling);
    }
    public function getKerajinanHastag()
    {
        $kerajinan = ProductHastags::where('hastags_id', '9')->get();
        return HastagResource::collection($kerajinan);
    }
    public function getAddress()
    {
        $address = Address::all();
        return response()->json($address);
    }
}
