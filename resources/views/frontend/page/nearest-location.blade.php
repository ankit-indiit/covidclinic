@extends('frontend.layout.master')
@section('content')
@include('frontend.component.breadcrumb', [
  'title' => 'Nearest Location',
  'home' => route('home'),
])
<section class="nearest-location nearestlocation_page">
   <div class="container">
      <div class="section-heading text-center">
         <h2>{{ $locationTitle->desc['title'] }}</h2>
         <p class="subtitle">{{ $locationTitle->desc['sub_title'] }}</p>
      </div>
      <div class="row gx-0">
         <div class="col-md-12 col-lg-6">
            <div id="map_canvas" class="map-home"></div>
         </div>
         <div class="col-md-12 col-lg-6">
            <div class="location-inner" ss-container>
               @foreach ($locations as $location)
                 <div class="media d-flex align-items-center">
                    <div class="media-left flex-shrink-0  location1">
                       <img src="{{ $location->image }}" class="mr-3">
                    </div>
                    <div class="media-body flex-grow-1 ms-3">
                       <h2 class="mt-0">{{ $location->title }}</h2>
                       <p><span class="fas fa-map-marker-alt"></span>{{ $location->address }}</p>
                       <p><span class="fas fa-clock"></span>{{ $location->working_hour }}</p>
                       <p><span class="fas fa-phone"></span>{{ $location->mobile_no }}</p>
                       <div class="btn-bottom text-end">
                          <a href="{{ $location->link }}" class="me-4">Visit Website</a>
                          <button class="btn btn-submit btn-moreinfo">More Info</button> 
                       </div>
                    </div>
                 </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
@endsection