<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evacuation add Record</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>add Evacuation location</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('Locatorapps.index') }}"> Back</a>
        </div>
    </div>

    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
  <script src="{{ asset('js/app.js') }}"></script>
    <form action="{{ route('Locatorapps.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div id="map" style="height:700px; width: 800px;" class="my-3"></div>

        <script>
            let map;
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: { lat: 18.3551, lng: 121.6420 },
                    zoom: 17,
                    scrollwheel: true,
                });

                const uluru = { lat: -34.397, lng: 150.644 };
                let marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    draggable: true
                });

                google.maps.event.addListener(marker,'position_changed',
                    function (){
                        let lat = marker.position.lat()
                        let lng = marker.position.lng()
                        $('#lat').val(lat)
                        $('#lng').val(lng)
                    })

                google.maps.event.addListener(map,'click',
                function (event){
                    pos = event.latLng
                    marker.setPosition(pos)
                })
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
                type="text/javascript"></script>
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>location:</strong>
                <input type="text" id="location" name="location" class="form-control" placeholder="location">
               @error('location must be')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>address:</strong>
                    <input type="text" id="address" name="address" class="form-control" placeholder="address">
                   @error('address required')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Capacity:</strong>
                 <input type="text" id="capacity" name="capacity" class="form-control" placeholder="Company Address">
                @error('capacity must be a number')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Personel name:</strong>
                 <input type="text" id="name" name="name" class="form-control" placeholder="Perosonel Name">
                @error('capacity must be a number')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>latitude:</strong>
                 <input type="text" id="lat" name="latitude" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>longtitude</strong>
                 <input type="text" id="lng" name="longtitude" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>contact:</strong>
                 <input type="text" id="contact" name="contact" class="form-control" placeholder="contact">
                @error('contact must be a number')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>

</form>

</body>
</html>
