@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Cities</div>

                <div class="card-body">

                    <form method="POST" action="{{route('admin.cities.store')}}">
                        
                        @csrf

                        Name: <input type="text" name="name" class="form-control" required/><br><br>
                        <input type="submit" value="Save" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
