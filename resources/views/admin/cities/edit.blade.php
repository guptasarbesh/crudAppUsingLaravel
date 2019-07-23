@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Cities</div>

                <div class="card-body">

                    <form method="POST" action="{{route('admin.cities.update',$city->id)}}">
                    {{method_field('PUT')}}
                        
                        @csrf

                        Name: <input type="text" name="name" value="{{$city->name}}" class="form-control"/><br><br>
                        <input type="submit" value="Save"/>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
