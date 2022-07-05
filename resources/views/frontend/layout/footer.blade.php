<footer class="footer">
   <!--div class="footerspace"></div-->
   <div class="container">
      <div class="footer-top">
         <div class="row">
            <div class="col-md-4 col-lg-4 col-xxl-4">
               <div class="footer-widget">
                  <div class="logo-footer">
                     <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-white') }}.png"/></a>
                  </div>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
               </div>
            </div>
            <div class="col-md-4 col-lg-3 col-xxl-2  offset-lg-1 offset-xxl-1">
               <div class="footer-widget">
                  <h2>Popular Links</h2>
                  <ul class="footer-links">
                     <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                     <li><a href="{{ route('faq') }}">FAQ</a></li>
                     <li><a href="{{ route('terms-condition') }}">Terms & Conditions</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-md-4 col-lg-3 col-xxl-3 offset-lg-1 offset-xxl-1">
               <div class="footer-widget">
                  <h2>Subscribe</h2>
                  <p class="subtitle">Subscribe to get latest property, blog news from us</p>
                  <form action="{{ route('subscribe') }}" id="subscribeForm" method="post">
                     @csrf
                     <div class="input-group footer_sub_error">
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                        <button type="submit" class="btn btn-email" id="subscribeFormBtn" type="button"><i class="fas fa-long-arrow-right"></i></button>                        
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-bottom">
         <ul class="social-links">
            <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a></li>
         </ul>
         <p>© 2022 . All rights reserved.</p>
      </div>
   </div>
</footer>
<!-- Footer End -->
<button class="scroll-top">
<i class="fas fa-angle-up" aria-hidden="true"></i>
</button>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/simple-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<!--script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script--->
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDnMvJXKTsrCcDRdM03l8TlIdlYZuIXQHs&libraries=places"></script>
@yield('customScript')
<script>var locations = [
   ['Location 1 Name', 'New York, NY', 'https://www.google.com/maps/place/New+York,+NY,+USA/@40.6976701,-74.2598758,10z/data=!3m1!4b1!4m5!3m4!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d-74.0059728'],
   ['Location 2 Name', 'Newark, NJ', 'https://www.google.com/maps/place/Newark,+NJ,+USA/@40.7313924,-74.252096,12z/data=!3m1!4b1!4m5!3m4!1s0x89c25370329a0e1d:0xe1bcdc2adcfee473!8m2!3d40.735657!4d-74.1723667'],
   ['Location 3 Name', 'Philadelphia, PA, USA', 'https://www.google.com/maps/place/Philadelphia,+PA,+USA/@40.0026767,-75.258115,11z/data=!3m1!4b1!4m5!3m4!1s0x89c6b7d8d4b54beb:0x89f514d88c3e58c1!8m2!3d39.9525839!4d-75.1652215']
   ];
   
   var geocoder;
   var map;
   var bounds = new google.maps.LatLngBounds();
   
   // function initialize() {
   // map = new google.maps.Map(
   // document.getElementById("map_canvas"), {
   // 	center: new google.maps.LatLng(37.4419, -122.1419),
   // 	zoom: 13,
   // 	mapTypeId: google.maps.MapTypeId.ROADMAP
   // });
   // geocoder = new google.maps.Geocoder();
   
   // for (i = 0; i < locations.length; i++) {
   
   
   // 	geocodeAddress(locations, i);
   // }
   // }
   // google.maps.event.addDomListener(window, "load", initialize);
   
   // function geocodeAddress(locations, i) {
   // var title = locations[i][0];
   // var address = locations[i][1];
   // var url = locations[i][2];
   // geocoder.geocode({
   // 	'address': locations[i][1]
   // },
   
   // function (results, status) {
   // 	if (status == google.maps.GeocoderStatus.OK) {
   // 		var marker = new google.maps.Marker({
   // 			  icon: '{{ asset('assets/img/map-marker') }}.png',
   // 			map: map,
   // 			position: results[0].geometry.location,
   // 			title: title,
   // 			animation: google.maps.Animation.DROP,
   // 			address: address,
   // 			url: url
   // 		})
   // 		infoWindow(marker, map, title, address, url);
   // 		bounds.extend(marker.getPosition());
   // 		map.fitBounds(bounds);
   // 	} else {
   // 		alert("geocode of " + address + " failed:" + status);
   // 	}
   // });
   // }
   
   function infoWindow(marker, map, title, address, url) {
   google.maps.event.addListener(marker, 'click', function () {
   	var html = "<div><h3>" + title + "</h3><p>" + address + "<br></div><a href='" + url + "'>View location</a></p></div>";
   	iw = new google.maps.InfoWindow({
   		content: html,
   		maxWidth: 350
   	});
   	iw.open(map, marker);
   });
   }
   
   function createMarker(results) {
   var marker = new google.maps.Marker({
   	icon: '{{ asset('assets/img/map-marker') }}.png',
   	map: map,
   	position: results[0].geometry.location,
   	title: title,
   	animation: google.maps.Animation.DROP,
   	address: address,
   	url: url
   })
   bounds.extend(marker.getPosition());
   map.fitBounds(bounds);
   infoWindow(marker, map, title, address, url);
   return marker;
   }

$("#subscribeForm").validate({
   rules: {
      email: {
         required: true,
      },
   },
   messages: {
      email: "Please enter your email",      
   },
   submitHandler: function(form) {
      var serializedData = $(form).serialize();
      $("#err_mess").html('');
      // $('#subscribeFormBtn').html('Processing <i class="fa fa-spinner fa-spin"></i>');
      $.ajax({
         headers: {
            'X-CSRF-Token': $('input[name="_token"]').val()
         },
         type: 'post',
         url: "{{ route('subscribe') }}",
         data: serializedData,
         dataType: 'json',
         success: function(data) {               
            $('#subscribeFormBtn').html('Save Changes');
            if (data.success == true) {
               swal("", data.message, "success", {
                  button: "close",
               });
               $('.swal2-confirm').on('click', function(){
                  window.location.reload();
               });
            } else {
               swal("", data.message, "error", {
                  button: "close",
               });
            }


         }
      });
      return false;
   }
});
</script>
</body>
</html>