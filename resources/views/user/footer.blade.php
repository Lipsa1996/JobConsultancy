<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-lg-9">
            <div class="row">
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">For Candidates</h3>
                <ul class="list-unstyled">
                  <li><a href="\jobseeker">Register</a></li>
                  <li><a href="\jobs">Find Jobs</a></li>
                  <li><a href="\contact">Contact</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">For Employers</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Clients</a></li>
                  <li><a href="\employer">Post Job</a></li>
                  <li><a href="\privacy">Terms &amp; Policies</a></li>
                </ul>
              </div>
              
              <div class="col-6 col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Company</h3>
                <ul class="list-unstyled">
                  <li><a href="\privacy">Terms &amp; Policies</a></li>
                  <li><a href="\contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li>
                <span class="d-block text-white">Address</span>
                Sinha's Job Consultancy
                 Baishnabghata Patuli Township,
                 Kolkata, West Bengal- 700094
              </li>
              <li>
                <span class="d-block text-white">Telephone</span>
                +91 7044651349
                <br> +91 9830583872
              </li>
              <li>
                <span class="d-block text-white">Email</span>
                info@sinhasjobconsultancy.com
              </li>
              <li style="font-size:22px">
				<a href="https://www.facebook.com/Sinhas-Job-Consultancy-447832499299993/"><i class="fa fa-facebook" style="margin-right:7px;">
			    </i></a>
				<a href="https://mobile.twitter.com/SinhaJob"><i class="fa fa-twitter" style="margin:7px;">
				</i></a>
				<a href="https://www.instagram.com/sinhasjobconsultancy/"><i class="fa fa-instagram"style="margin:7px;" >
				</i></a>
				<a href="https://www.linkedin.com/in/sinha-s-job-consultancy-1108781a7/"><i class="fa fa-linkedin" style="margin:7px;">
				</i></a>
			</li>
            </ul>
            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved. <br> This website is made with love by <a href="https://webpeb.com" target="_blank" style="color:#26baee"><b> WebPeb</b></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="{{ asset('userStyle/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('userStyle/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('userStyle/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('userStyle/js/popper.min.js') }}"></script>
  <script src="{{ asset('userStyle/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('userStyle/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('userStyle/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('userStyle/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('userStyle/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('userStyle/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('userStyle/js/aos.js') }}"></script>
  
  <!--script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script-->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  <script src="{{ asset('userStyle/js/main.js') }}"></script>
    
  </body>
</html>