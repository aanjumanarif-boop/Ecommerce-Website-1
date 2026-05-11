<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>
     @include('admin.includes.style')
   
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
     @include('admin.includes.header')
      <!--end::Header-->
      <!--begin::Sidebar-->
      @include('admin.includes.sidebar')
    
        @yield('content')
      <!--end::App Main-->
      <!--begin::Footer-->
       @include('admin.includes.footer')
      <!--end::Footer-->
      @include('admin.includes.script')
   
   
  </body>
  <!--end::Body-->
</html>
