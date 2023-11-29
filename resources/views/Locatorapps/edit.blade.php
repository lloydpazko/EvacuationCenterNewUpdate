<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Location details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Locatorapps.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>

  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
  <script src="{{ asset('js/app.js') }}"></script>
    <form action="{{ route('Locatorapps.update',$location->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>location:</strong>
                    <input type="text" id="location" name="location" value="{{ $location->location }}" class="form-control" placeholder="location">
                    @error('location must be')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>address:</strong>
                        <input type="text" id="address" name="address" value="{{ $location->address }}" class="form-control" placeholder="address">
                        @error('address required')
                         <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Capacity:</strong>
                            <input type="text" id="capacity" name="capacity" value="{{ $location->capacity }}" class="form-control" placeholder="capacity">
                            @error('capacity must be a number')
                             <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>name:</strong>
                                <input type="text" id="name" name="name" value="{{ $location->name }}" class="form-control" placeholder="capacity">
                                @error('capacity must be a number')
                                 <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>latitude:</strong>
                                <input type="text" id="lat" name="latitude" value="{{ $location->latitude }}" class="form-control">
                                @error('capacity must be a number')
                                 <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>longtitude:</strong>
                    <input type="text" id="lng" name="longtitude" value="{{ $location->longtitude }}" class="form-control">
                    @error('address')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>contact</strong>
                    <input type="text" id="contact" name="contact" value="{{ $location->contact }}" class="form-control" placeholder="contact">
                    @error('contact required')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
              <button type="submit" class="btn btn-primary ml-3">Submit</button>

        </div>

    </form>
</div>

</body>
</html>
