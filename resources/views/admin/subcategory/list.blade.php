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
                <h3 class="mb-0">Subcategory List</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Subcategory List</li>
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
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">SubCaregory List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                           <th>subCategory Name</th>
                          <th>Category Name</th>
                      
                          <th style="width: 40px">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($subCategories as $subCategory)
                            <tr class="align-middle">
                          <td>{{$loop->index+1}}</td>
                          <td>{{$subCategory->name}}</td>
                          <td>{{$subCategory->category->name}}</td>
                          <td>
                            <div class="d-flex gap-2">
                           <a href="{{url('/manage/subCategory-edit/'.$subCategory->id)}}" class="btn btn-danger d-flex">Edit</a>
                            <a href="{{url('/manage/subCategory-delete/'.$subCategory->id)}}" class="btn btn-success d-flex" onclick="return confirm('Are you sure?')">Delete</a>
                            </div>
                             </td>
                   
                        </tr>
                       @endforeach 
                     </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->

                </div>
                <!-- /.card -->

             
                <!-- /.card -->
              </div>
             
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>

@endsection