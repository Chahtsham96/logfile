
@extends('layout')
@section('title')
CREATE ADMIN
@endsection
@section('content')
<div class="page-content-wrapper ">

  <div class="container-fluid">

      <div class="row">
        @if (Auth::user()->type=='1')
          <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="mini-stat clearfix bg-primary">
                  <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                  <div class="mini-stat-info text-right text-white">
                      <span class="counter">15852</span>
                      S
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="mini-stat clearfix bg-primary">
                  <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                  <div class="mini-stat-info text-right text-white">
                      <span class="counter">956</span>
                      T
                  </div>
              </div>
          </div>
          @else
           <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="mini-stat clearfix bg-primary">
                  <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                  <div class="mini-stat-info text-right text-white">
                      <span class="counter">5210</span>
                  A
                  </div>
              </div>
          </div> 
          @endif
          {{-- <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="mini-stat clearfix bg-primary">
                  <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                  <div class="mini-stat-info text-right text-white">
                      <span class="counter">20544</span>
                      Absent Teachers
                  </div>
              </div>
          </div>                                
          <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="mini-stat clearfix bg-primary">
                  <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                  <div class="mini-stat-info text-right text-white">
                      <span class="counter">20544</span>
                      Absent Teachers
                  </div>
              </div>
          </div>                                
          <div class="col-md-6 col-lg-6 col-xl-4">
              <div class="mini-stat clearfix bg-primary">
                  <span class="mini-stat-icon"><i class="mdi mdi-cube-outline"></i></span>
                  <div class="mini-stat-info text-right text-white">
                      <span class="counter">20544</span>
                      Absent Teachers
                  </div>
              </div>
          </div> --}}
      </div>



  </div>

</div>
@endsection