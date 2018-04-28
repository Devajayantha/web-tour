@extends('layouts.app')


@section('contact')
{{--  <div class="container">  --}}
    <div class="image-contact">
        <img src="{{asset('img/sampul.jpg')}}" alt="image-contact" class="sampul">
    </div>
{{--  </div>  --}}
<div class="container">
    <h2><center>Our Location</center></h2>
    <div id="map"></div>
    <script>
        function initMap() {
          var dps = {lat: -8.796098, lng: 115.176463};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: dps
          });
          var marker = new google.maps.Marker({
            position: dps,
            map: map
          });
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7MbYys7PWpzyY9xQcwlW88styrWjH-JM&callback=initMap">
      </script>

      <div class="more-info">
          <h3><center>Info Mengenai Kami</center></h3>
          <p class="info">Anda Dapat mengirimkan pesan dapat melalui e-mail maupun sms. Kami bersedia melayani anda
              didalam memenuhi kebutuhan anda.
          </p>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <div class="row">
                <div class="easy-booking col-md-4 col-sm-12">
                    <i class="fas fa-phone logobook"></i>
                    <h3 class="logobook2">PHONE</h3>
                    <p class="logobook3">(0361)8478402 & 087860212733</p>
                </div>
                <div class="easy-booking col-md-4 col-sm-12">
                        <i class="fas fa-at logobook"></i>
                        <h3 class="logobook2">E-MAIL</h3>
                        <p class="logobook3">penidatripntour@gmail.com</p>
                </div>
                <div class="easy-booking col-md-4 col-sm-12">
                    <i class="fas fa-map-marker-alt logobook"></i>
                    <h3 class="logobook2">ADDRESS</h3>
                    <p class="logobook3">Jl. Raya Kampus Unud, Jimbaran, Kuta Sel., Kabupaten Badung, Bali 80361</p>
                </div>
            </div>
            </div>
            <div class="col-md-1"></div>
        </div>
          {{--  <div class="row">
              <div class="col-md-4 col-sm-12">
                <i class="fas fa-phone icon"></i>
                <span class="spn-info">Telepon : (0361)8478402</span>
              </div>
              <div class="col-md-4 col-sm-12">
                <i class="fas fa-at icon"></i>
                <span class="spn-info">penidatrip@gmail.com</span>
            </div>
            <div class="col-md-4 col-sm-12">
                <i class="fas fa-map-marker icon"></i>
                <span class="spn-info">Jl. Raya Kampus Unud, Jimbaran, Kuta Sel., Kabupaten Badung, Bali 80361</span>
            </div>
          </div>  --}}
      </div>
</div>
{{-- @include('layouts.newfooter') --}}
@endsection
