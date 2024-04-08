@extends("layouts.base")
@section("title", "Edit {$vehicle->vehicle_brand}")
@section("content") 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Edit {{$vehicle->vehicle_brand}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('vehicles.index') }}" class="btn btn-danger">Back</a>
            </div>
        </div>
        <form class="row shadow m-3 p-3" method="post" action="{{route('vehicles.update', $vehicle)}}">
            @csrf
            @method('PUT')
            <div class="col-md-6 mt-2">
                <label for="vehicle_brand" class="form-label">Vehicle Brand</label>
                <input type="text" class="form-control" id="vehicle_brand" name="vehicle_brand" placeholder="Vehicle Brand" value="{{old('vehicle_brand', $vehicle->vehicle_brand)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="doors_number" class="form-label"> Doors Number</label>
                <input type="number" class="form-control" id="doors_number" name="doors_number" placeholder="Doors Number" value="{{old('doors_number', $vehicle->doors_number)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="model" class="form-label" > Model</label>
                <input type="datetime-local" class="form-control" id="model" name="model" placeholder="Model" value="{{old('model', $vehicle->model)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="color" class="form-label"> Color</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Color" value="{{old('color', $vehicle->color)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="cylinder_capacity_cc" class="form-label"> Cilinder Capacity C.C</label>
                <input type="number" class="form-control" id="cylinder_capacity_cc" name="cylinder_capacity_cc" placeholder="Cilinder Capacity C.C" value="{{old('cylinder_capacity_cc', $vehicle->cylinder_capacity_cc)}}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="horse_power" class="form-label"> Horse Power</label>
                <input type="number" class="form-control" id="horse_power" name="horse_power" placeholder="Horse Power" value="{{old('horse_power', $vehicle->horse_power)}}">
            </div>
            @if($errors->any())
                <div class="col-12 mt-2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection