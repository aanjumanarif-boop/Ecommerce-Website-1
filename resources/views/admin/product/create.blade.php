@extends('admin.master')
@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Add New Product</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">product</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row g-4">
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">Input Product Data</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            <form action="{{ url('/manage/product-store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Product Name</label>
                                                <input type="text" class="form-control" name="name" id="name" required />
                                          
                                            </div>
                                        </div>
                                         
                                        <div class="col-md-4 col-sm-6 col-6">
                                            <div class="mb-3">
                                                <label for="sku_code" class="form-label">Product SKU Code (optional)</label>
                                                <input type="text" class="form-control" name="sku_code" id="sku_code" required/>

                                               
                                            
                                            </div>
                                        </div>
                                         
                                              <div class="col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label for="cat_id" class="form-label">select Category</label>
                                                <select name="cat_id" id="cat_id" class="form-control" required>
                                                 <option value="" disabled selected>select category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>

                                             

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label for="subcat_id" class="form-label">select SubCategory (optonal)</label>
                                                <select name="subcat_id" id="subcat_id" class="form-control" required>
                                                <option value="" disabled selected>select subcategory</option>
                                                    @foreach ($subCategories as $subCategory)
                                                        <option value="{{ $subCategory->id }}">{{ $subCategory->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                       <div class="col-md-6 col-sm-12 col-12">
                                            <div class="mb-3" id="color_fields">
                                                <label for="Add_color" class="form-label">Color (optional)</label>
                                                <input type="text" class="form-control mb-2" name="color_name[]" placeholder="Color Name" id="color_name"/>
                                                  <button type="button" class="btn btn-success mt-2" id="add_color">Add More</button> 
                                              </div>
                                           
                                        </div>

                                           <div class="col-md-6 col-sm-12 col-12">
                                            <div class="mb-3" id="size_fields">
                                                <label for="Add_size" class="form-label">Size (optional)</label>
                                                <input type="text" class="form-control mb-2" name="size_name[]" placeholder="Size Name" id="size_name"/>
                                                  <button type="button" class="btn btn-primary mt-2" id="add_size">Add More</button> 
                                              </div>
                                           
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label for="buying_price" class="form-label">Product Buying Price</label>
                                                <input type="number" class="form-control" name="buying_price" id="buying_price" required/>
                                    
                                              </div>
                                        </div>
                                         
                                       <div class="col-md-4 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label for="regular_price" class="form-label">Product Regular Price</label>
                                                <input type="number" class="form-control" name="regular_price" id="regular_price" required/>
                                             </div>
                                        </div>
                                        
                                        <div class="col-md-4 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label for="discount_price" class="form-label">Product Discount Price (optional)</label>
                                                <input type="number" class="form-control" name="discount_price" id="discount_price"/>


                                            </div>
                                        </div>


                                         <div class="col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label for="qtu" class="form-label">Product qtu</label>
                                                <input type="number" class="form-control" name="qtu" id="qtu" required/>

                                            

                                            </div>
                                        </div>

                                         <div class="col-md-6 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label for="product_type" class="form-label">Product Type</label>
                                                <select name="product_type" id="product_type" class="form-control" required>
                                                 <option value="" disabled selected>Select Product Type</option>
                                                <option value="hot">Hot Product</option>
                                                 <option value="new">New Product</option>
                                                  <option value="regular">Regular product</option>
                                                   <option value="discount">Discount Product</option>
                                                   </select>

                                            

                                                </div>
                                                  </div>
                                        
                                              <div class="col-md-12" col-sm-12 col-12>
                                                 <div class="mb-3">
                                                    <label for="summernote" class="form-label">Product Description</label>
                                                    <textarea name="description" id="summernote" class="form-control" required></textarea>

                                            

                                                 </div>

                                              </div>


                                             <div class="col-md-12 col-sm-12 col-12">
                                                <div class="mb-3">
                                                <label for="summernote_two" class="form-label">Product policy (optional)</label>
                                                 <textarea name="product_policy" id="summernote_two" class="form-control"></textarea>

                                            

                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-12">
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" name="image"
                                                    id="image" accept="image/*"/>
                                                <label class="input-group-text" for="image" required>Main Image</label>
                                            </div>
                                           </div>
                                        
                                      
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" name="gallery_image[]"
                                                    id="gallery_image" accept="image/*"/>
                                                <label class="input-group-text" for="gallery_image" required>Gallery Image</label>
                                            </div>
                                           </div>


                                    </div>
                                </div>



                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                                <!--end::Body-->
                                <!--begin::Footer-->

                                <!--end::Footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Quick Example-->
                    </div>
                </div>
            </div>
    </main>
@endsection

 @push('script')
    <script>
        $(document).ready(function() {
        $('#summernote').summernote();
     });
    </script>

    <script>
        $(document).ready(function() {
        $('#summernote_two').summernote();
     });
    </script>

   {{-- //Add more color --}}
    <script>
      $(document).ready(function(){
      $("#add_color").click(function(){
      $(this).before('<input type="text" class="form-control mb-2" name="color_name[]" placeholder="Color Name" id="color_name"/>');

    })

   })

    </script>

     {{-- //Add More size --}}
    <script>
     $(document).ready(function(){
      $("#add_size").click(function(){
      $(this).before('<input type="text" class="form-control mb-2" name="size_name[]" placeholder="Size Name" id="size_name"/>');

    })

   })

    

    </script>
@endpush