<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Location Map Record</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Evacuation Record Database Locations</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('Locatorapps.create') }}"> Create Maprecords</a>
                <a class="btn btn-success" href="{{ url('/') }}"> home</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Location</th>
            <th>address</th>
            <th>capacity</th>
            <th>Personel Name</th>
            <th>latitute</th>
            <th>longtitude</th>
            <th>contact</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($Locatorapps as $location)
        <tr>
            <td>{{ $location->id }}</td>
            <td>{{ $location->location }}</td>
            <td>{{ $location->address }}</td>
            <td>{{ $location->capacity }}</td>
            <td>{{ $location->name }}</td>
            <td>{{ $location->latitude }}</td>
            <td>{{ $location->longtitude }}</td>
            <td>{{ $location->contact }}</td>
            <td>
                <form action="{{ route('Locatorapps.destroy',$location->id) }}" method="Post">

                    <a class="btn btn-primary" href="{{ route('Locatorapps.edit',$location->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $Locatorapps->links() !!}

</body>
</html>
