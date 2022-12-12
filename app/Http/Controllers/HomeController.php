<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Brands;
use App\Models\Cargo;
use App\Models\Category;
use App\Models\Country;
use App\Models\Hastag;
use App\Models\HomeVideo;
use App\Models\News;
use App\Models\Product;
use App\Models\ProductHastags;
use App\Models\Province;
use App\Models\Subsnews;
use App\Models\Wishlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function search(Request $request)
    {

        if ($request->search) {
            $categories = Category::all();
            $product_search = Product::where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('brand', 'LIKE', '%' . $request->search . '%')->orderBy('id', 'desc')->get();
            return view('home.search', compact('product_search', 'request', 'categories'));
        } else {
            return redirect()->back();
        }
    }

    public function cargo(Request $request)
    {
        if ($request->has('cargo_country')) {
            $country = Country::where('id', $request->cargo_country)->first();
            if ($country) {
                $cargo =  $country->cargo()->get();
            }
            return view('home.cargo', compact('country', 'cargo'));
        }
    }

    public function index(Request $request)
    {

        //NON API BASE
        $products = Product::all();
        $categories = Category::all();
        $brands = Brands::all();
        $hastags = ProductHastags::where('hastags_id', '3')->first();
        $masakanibu = ProductHastags::where('hastags_id', '3')->take(10)->get();
        $masakanibu_hastag = ProductHastags::where('hastags_id', '3')->first();
        $viral = ProductHastags::where('hastags_id', '1')->take(10)->get();
        $viral_hastag = ProductHastags::where('hastags_id', '1')->first();
        $kehangatan = ProductHastags::where('hastags_id', '6')->take(10)->get();
        $kehangatan_hastag = ProductHastags::where('hastags_id', '6')->first();
        $rekomendasi = ProductHastags::where('hastags_id', '7')->take(10)->get();
        $rekomendasi_hastag = ProductHastags::where('hastags_id', '7')->first();
        $kerajinan = Hastag::where('id', '9')->first();
        $dapur = Hastag::where('id', '8')->first();
        $banners = Banner::all();
        $countries = Country::orderBy("name", "asc")->get();
        $maps = Province::all();
        $news = News::all();
        $bundling = ProductHastags::where('hastags_id', '11')->get();
        // dd($bundling);
        return view('home', compact('bundling', 'products', 'categories', 'brands', 'hastags', 'banners', 'masakanibu', 'countries', 'maps', 'viral', 'kehangatan', 'rekomendasi', 'kerajinan', 'dapur', 'viral_hastag', 'masakanibu_hastag', 'kehangatan_hastag', 'rekomendasi_hastag', 'news'));
    }


    public function category($category_slug)
    {
        $categories = Category::where('slug', $category_slug)->first();
        if ($categories) {
            $products = $categories->Products()->get();
            return view('category.category', compact('categories', 'products'));
        } else {
            return redirect()->back();
        }
    }

    public function product_category($category_slug, $product_slug)
    {
        $categories = Category::where('slug', $category_slug)->first();

        if ($categories) {
            $products = $categories->Products()->where('slug', $product_slug)->first();
            $products_category = Product::where('category_id', $categories->id)->where('slug', '!=', $product_slug)->get();
            $brands = Product::where('brand', $products->brand)->where('slug', '!=', $product_slug)->get();
            if ($products) {
                return view('category.details', compact('categories', 'products', 'brands', 'products_category'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function brands($brand_slug)
    {
        $brands = Brands::where('slug', $brand_slug)->first();
        if ($brands) {
            $products = $brands->Products()->get();
            return view('brands.brands', compact('brands', 'products'));
        } else {
            return redirect()->back();
        }
    }

    public function province($province_slug)
    {
        $categories = Category::all();
        $province = Province::where('slug', $province_slug)->first();
        if ($province) {
            $products = $province->product()->get();
            return view('province.province', compact('province', 'products', 'categories'));
        } else {
            return redirect()->back();
        }
    }
    public function productProvince($province_slug, $product_slug)
    {
        $province = Province::where('slug', $province_slug)->first();
        if ($province) {
            $products = $province->product()->where('slug', $product_slug)->first();
            $categories = Product::where('category_id', $products->category_id)->where('slug', '!=', $product_slug)->get();
            $brands = Product::where('brand', $products->brand)->where('slug', '!=', $product_slug)->get();
            if ($products) {
                return view('province.details', compact('province', 'products', 'categories', 'brands'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function product_brand($brand_slug, $product_slug)
    {
        $brands = Brands::where('slug', $brand_slug)->first();
        if ($brands) {
            $products = $brands->Products()->where('slug', $product_slug)->first();
            $products_brand = $brands->Products()->where('slug', '!=', $product_slug)->get();

            $categories = Product::where('category_id', $products->category_id)->where('slug', '!=', $product_slug)->get();
            if ($products) {
                return view('brands.details', compact('brands', 'products', 'categories', 'products_brand'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function hastag($hastag_slug)
    {
        $hastag = Hastag::where('slug', $hastag_slug)->first();
        if ($hastag->name == "Dapur") {
            return view('hastag.hastag', compact('hastag'));
        }
        if ($hastag->name == "Kerajinan") {
            return view('hastag.hastag-kerajinan', compact('hastag'));
        }
    }
    public function hastags($hastag_slug)

    {
        $categories = Category::all();
        $viral = Hastag::where('slug', $hastag_slug)->first();
        if ($viral) {
            $products = $viral->productHastag()->get();
            return view('hastag.hastag_viral', compact('products', 'viral', 'categories'));
        } else {
            return redirect()->back();
        }
    }
    public function product_hastags($hastag_slug, $product_slug)

    {
        $viral = Hastag::where('slug', $hastag_slug)->first();
        if ($viral) {
            foreach ($viral->productHastag()->get() as $value) {
                if ($value->product->where('slug', $product_slug)->exists()) {
                    $categories = Product::where('category_id', $value->product->category_id)->where('slug', '!=', $product_slug)->get();
                    $brands = Product::where('brand', $value->product->brand)->where('slug', '!=', $product_slug)->get();
                    $products = $value->product->where('slug', $product_slug)->first();
                    return view('hastag.product_hastag_viral', compact('products', 'viral', 'categories', 'brands'));
                }
            }
        }
    }
    public function news($news_slug)
    {
        $news = News::where('slug', $news_slug)->first();
        if ($news) {
            $newsCollection = $news->take(10)->get();
            return view('news.detail', compact('news', 'newsCollection'));
        } else {
            return redirect()->back();
        }
    }
    public function subsnews(Request $request)
    {
        $news = new Subsnews();
        $news->user_id = Auth::user()->id;
        $news->email = $request->email;
        $news->active = 1;
        $news->save();
        return redirect()->back();
    }
    public function promo($promo_slug)
    {
        $banner = Banner::where('slug', $promo_slug)->first();
        if ($banner) {
            $bannerCollection = $banner->get();
            return view('banner.detail', compact('banner', 'bannerCollection'));
        } else {
            return redirect()->back();
        }
    }
    public function ulasanPengiriman()
    {

        $countries = Country::all();
        return view('home.ulasan_pengiriman', compact('countries'));
    }
}
