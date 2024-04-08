@extends("layouts.base")
@section("title", "Create Vehicle App")
@section("content") 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">Create a new Vehicle</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-3">
                <a href="{{ route('vehicles.index') }}" class="btn btn-danger">Back</a>
            </div>
        </div>
        <form class="row shadow m-3 p-3" method="post" action="{{route('vehicles.store')}}">
            @csrf
            <div class="col-md-6 mt-2">
                <label for="vehicle_brand" class="form-label">Vehicle Brand</label>
                <input type="text" class="form-control" id="vehicle_brand" name="vehicle_brand" placeholder="Vehicle Brand">
            </div>
            <div class="col-md-6 mt-2">
                <label for="doors_number" class="form-label"> Doors Number</label>
                <input type="number" class="form-control" id="doors_number" name="doors_number" placeholder="Doors Number">
            </div>
            <div class="col-md-6 mt-2">
                <label for="model" class="form-label" > Model</label>
                <input type="datetime-local" class="form-control" id="model" name="model" placeholder="Model">
            </div>
            <div class="col-md-6 mt-2">
                <label for="color" class="form-label"> Color</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Color">
            </div>
            <div class="col-md-6 mt-2">
                <label for="cylinder_capacity_cc" class="form-label"> Cilinder Capacity C.C</label>
                <input type="number" class="form-control" id="cylinder_capacity_cc" name="cylinder_capacity_cc" placeholder="Cilinder Capacity C.C">
            </div>
            <div class="col-md-6 mt-2">
                <label for="horse_power" class="form-label"> Horse Power</label>
                <input type="number" class="form-control" id="horse_power" name="horse_power" placeholder="Horse Power">
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