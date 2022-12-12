@extends('layouts.adminpanel.admin')
@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <div>
          <p>Something wrong...</p>
        </div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (Session()->has('success'))
<div class="alert alert-success" role="alert">
 {{Session()->get('success')}}
</div>
@endif
@if (Session()->has('message'))
<div class="alert alert-danger" role="alert">
 {{Session()->get('message')}}
</div>
@endif

<div class="card">
  <div class="card-header">
      <div class="d-flex flex-row justify-content-between">
          <p>Update Product</p>
          <a class="btn btn-lihat-sm" href="{{url('admin/products')}}">Back</a>
      </div>
  </div>
  <div class="card-body">
      <form class="row g-3" method="post" enctype="multipart/form-data" action="{{url('admin/products/'.$product->id.'/edit')}}">
          @csrf
          @method('PUT')
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="seotag-tab" data-bs-toggle="pill" data-bs-target="#seotag" type="button" role="tab" aria-controls="seotag" aria-selected="false">Seo Tag</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="details-tab" data-bs-toggle="pill" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="false">Details</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="images-tab" data-bs-toggle="pill" data-bs-target="#images" type="button" role="tab" aria-controls="images" aria-selected="false">Images</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="hastags-tab" data-bs-toggle="pill" data-bs-target="#hastags" type="button" role="tab" aria-controls="hastags" aria-selected="false">Hastags</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="color-tab" data-bs-toggle="pill" data-bs-target="#color" type="button" role="tab" aria-controls="color" aria-selected="false">Colors</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="flavor-tab" data-bs-toggle="pill" data-bs-target="#flavor"
                  type="button" role="tab" aria-controls="flavor" aria-selected="false">Flavor</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
              <div class="mb-3">
                <label for="">Select Category</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                  <option class="scrollable-menu" value="{{null}}">Product No Category</option>
                  @foreach ($categories as $category)
                   <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected':''}}>{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="">Select Province</label>
                <select class="form-select " aria-label="Default select example" name="province_id" >
                  <option class="scrollable-menu" value="{{null}}">Product No Province</option>
                  @foreach ($maps as $map)
                  <option class="scrollable-menu"value="{{$map->id}}" {{$map->id == $product->province_id ? 'selected':''}}>{{$map->title}}</option>
                @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Name Product</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
              </div>
              <div class="mb-3">
                <label for="">Select Brand</label>
                <select class="form-select" aria-label="Default select example" name="brand">
                  <option class="scrollable-menu" value="{{null}}">Product No Brand</option>
                  @foreach ($brands as $brand)
                   <option value="{{$brand->name}}" {{$brand->name == $product->brand ? 'selected':''}}>{{$brand->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{$product->description}}</textarea>
              </div>
            </div>
            <div class="tab-pane fade" id="seotag" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">
              <div class="mb-3">
                <label for="meta_tittle" class="form-label">Meta Tittle</label>
                <input type="text" class="form-control" id="meta_tittle" name="meta_tittle" value="{{$product->meta_tittle}}">
              </div>
              <div class="mb-3">
                <label for="meta_keyword" class="form-label">Meta_keyword</label>
                <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="{{$product->meta_keyword}}">
              </div>
              <div class="mb-3">
                <label for="meta_description" class="form-label">Meta_description</label>
                <input type="text" class="form-control" id="meta_description" name="meta_description" value="{{$product->meta_description}}">
              </div>
            </div>
            <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
              <div class="mb-3">
                <label for="original_price" class="form-label">Original Price</label>
                <input type="text" class="form-control" id="original_price" name="original_price" value="{{$product->original_price}}">
              </div>
              <div class="mb-3">
                <label for="selling_price" class="form-label">Selling Price</label>
                <input type="text" class="form-control" id="selling_price" name="selling_price" value="{{$product->selling_price}}">
              </div>
              <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="{{$product->quantity}}">
              </div>
              <div class="mb-3">
                <label for="weight" class="form-label">Weight</label>
                <input type="text" class="form-control" id="weight" name="weight" value="{{$product->weight}}">
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <label for="trending" class="form-label">Trending</label>
                  <input class="form-check-input position-static" type="checkbox" id="trending" name="trending" value="option1" {{$product->trending == 1 ? 'checked' : ''}}  aria-label="...">
                </div>
                <div class="form-check">
                  <label for="status" class="form-label">Status</label>
                  <input class="form-check-input position-static" type="checkbox" id="status" name="status" value="option1" {{$product->status == 1 ? 'checked' : ''}} aria-label="...">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab" tabindex="0">
              <div class="col-md-6 input-group">
                <input type="file" class="form-control" id="image" name="image[]" multiple>
                <label class="input-group-text" for="image">Upload</label>
              </div>
              <div>
                @if ($product->ProductImages)
                    @foreach ($product->ProductImages as $image)
                      <img src="{{asset('image/uploads/products/'.$image->image)}}" width="100px;" class="img-thumbnail" alt="...">
                      <a href="{{url('admin/products/'.$image->id.'/delete')}}">Remove</a>
                    @endforeach
                @else
                <div class="alert alert-warning" role="alert">
                  Image Not Added
                 </div>
                @endif
              </div>
            </div>
            <div class="tab-pane fade" id="hastags" role="tabpanel" aria-labelledby="hastags-tab" tabindex="0">
              @foreach ($hastags as $hastag)
              <div class="form-check">
                <label class="form-label" for="hastags{{$hastag->id}}">
                  {{$hastag->hastag}}
                </label>
                <input class="form-check-input position-static" type="checkbox" id="hastags{{$hastag->id}}" name="hastags[{{$hastag->id}}]" value="{{$hastag->id}}">
              </div>
              @endforeach
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Hastag</th>
                      <th>Caption</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($product->ProductHastags as $prodHastag)
                    <tr class="hastag-tr">
                      @if ($prodHastag->hastag)
                        <td>
                        {{$prodHastag->hastag->hastag}}
                        </td>
                      @else
                      <td>
                       No Hastags
                      </td>
                      @endif
                      {{-- <td></td> --}}
                      <td>{{$prodHastag->hastag->name}}</td>
                      <td>
                        <button class="btn btn-danger btn-sm btnProductHastag" value="{{$prodHastag->id}}" >Delete</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="color" role="tabpanel" aria-labelledby="color-tab" tabindex="0">
              @foreach ($colors as $color)
              <div class="form-check">
                <label class="form-label" for="color{{$color->id}}">
                  {{$color->name}}
                </label>
                <input class="form-check-input position-static" type="checkbox" id="color{{$color->id}}" name="colors[{{$color->id}}]" value="{{$color->id}}">
              </div>
              @endforeach
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Colors</th>
                      <th>Code</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($product->productColor as $prodColor)
                    <tr class="color-tr">
                      @if ($prodColor->color)
                        <td>
                        {{$prodColor->color->name}}
                        </td>
                      @else
                      <td>
                       No Colors
                      </td>
                      @endif
                      <td>{{$prodColor->color->code}}</td>
                      <td>
                        <button class="btn btn-danger btn-sm btnProductColor" value="{{$prodColor->id}}" >Delete</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane fade" id="flavor" role="tabpanel" aria-labelledby="flavor-tab" tabindex="0">
              <div class="row">
          
                  @foreach($flavors as $flavor)
                      <div class="col-4">
                          <hr class="mt-2 mb-3"/>
                          <div class="form-check">
                              <label class="form-label" for="flavors{{ $flavor->id }}">
                                  {{ $flavor->name }}
                              </label>
                              <input class="form-check-input position-static" type="checkbox"
                                  id="flavors{{ $flavor->id }}" name="flavors[{{ $flavor->id }}]"
                                  value="{{ $flavor->id }}">
                                  <div class="mb-3">
                                      <label for="price" class="form-label">Price</label>
                                      <input type="text" class="form-control" id="price" name="price[{{ $flavor->id }}]" >
                                    </div>
                                  <div class="mb-3">
                                      <label for="info" class="form-label">Info</label>
                                      <input type="text" class="form-control" id="info" name="info[{{ $flavor->id }}]" >
                                    </div>
                                  <div class="mb-3">
                                      <label for="description" class="form-label">Description</label>
                                      <textarea name="description_flavor[{{ $flavor->id }}]" id="description" cols="30" rows="5" class="form-control" placeholder="Description"></textarea>
                                    </div>
                                  <div class="mb-3">
                                      <label for="composition" class="form-label">Composition</label>
                                      <textarea name="composition[{{ $flavor->id }}]" id="composition" cols="30" rows="5" class="form-control" placeholder="Description"></textarea>
                                    </div>
                                    <div class="mb-3">
                                      <label for="weight" class="form-label">Weight</label>
                                      <input type="text" class="form-control" id="weight" name="weight_flavor[{{ $flavor->id }}]" >
                                    </div>
                          </div>
                      </div>
                  @endforeach
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($product->productFlavor as $prodFlavor)
                        <tr class="flavor-tr">
                          @if ($prodFlavor->flavor)
                            <td>
                            {{$prodFlavor->flavor->name}}
                            </td>
                          @else
                          <td>
                           No Flavor
                          </td>
                          @endif
                          <td>
                            <button class="btn btn-danger btn-sm btnProductFlavor" value="{{$prodFlavor->id}}" >Delete</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
          </div> 
            <button class="btn btn-lihat-sm" type="submit">Update</button>
          </div>
        </form>
  </div>
</div>
@endsection

@section('script')
    <script>
      $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.btnProductHastag').click(function (e) { 
          var prod_hastag = $(this).val();
          $.ajax({
            type: "GET",
            url: "/admin/product-hastag/"+prod_hastag+"/delete",
            success: function (response) {
              alert(response.success);
              $(this).closest('.hastag-tr').remove();
            }
          });
        });
      });

      $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.btnProductColor').click(function (e) { 
          var prod_color = $(this).val();
          $.ajax({
            type: "GET",
            url: "/admin/product-color/"+prod_color+"/delete",
            success: function (response) {
              alert(response.success);
              $(this).closest('.color-tr').remove();
            }
          });
        });
      });

      $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.btnProductFlavor').click(function (e) { 
          var prod_flavor = $(this).val();
          $.ajax({
            type: "GET",
            url: "/admin/product-flavor/"+prod_flavor+"/delete",
            success: function (response) {
              alert(response.success);
              $(this).closest('.flavor-tr').remove();
            }
          });
        });
      });

    </script>
@endsection