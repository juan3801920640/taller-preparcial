@extends("layouts.base")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center alert alert-success">Vehicles</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Doors Number</th>
                    <th scope="col">Model</th>
                    <th scope="col">Color</th>
                    <th scope="col">Capacity CC</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehicles as $vehicle)
                        <tr>
                            <th scope="row">{{$vehicle->id_vehicle}}</th>
                            <td>{{$vehicle->vehicle_brand}}</td>
                            <td>{{$vehicle->doors_number}}</td>
                            <td>{{$vehicle->model}}</td>
                            <td>{{$vehicle->color}}</td>
                            <td>{{$vehicle->cylinder_capacity_cc}}</td>
                            <td><a href="{{route('vehicles.edit',$vehicle)}}" class="btn btn-outline-success">Edit</a></td>
                            <td>
                                <form method="post" action="{{route("vehicles.destroy", $vehicle)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this vehicle?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
        </div>
        <div class="col-12 mt-3">
            <a href="{{route("vehicles.create")}}" class="btn btn-primary">
                Create a new Vehicle
            </a>
        </div>
    </div>
</div>
@endsection