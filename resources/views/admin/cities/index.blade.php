@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cities</div>

                <div class="card-body">

                <a href="{{route('admin.cities.create')}}" class="btn btn-sm btn-primary">Add new</a>
                <br>
                <br>
                   <table class="table">
                    <tr>
                    <th>Name</th>
                    <th></th>
                    </tr>

                    @forelse($cities as $city)
                    <tr>
                    <td>{{$city->name}}</td> 
                    <td><a href="{{route('admin.cities.edit',$city->id)}}" class="btn btn-sm btn-info">Edit</a></td>
                    <td>
                    <form method="POST" action="{{ route('admin.cities.destroy',$city->id) }}">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="Delete" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger"/>
                    </form>
                    </td>
                    </tr>
                    @empty

                        <tr>
                            <td colspan="2">No records found</td>
                        </tr>
                    @endforelse
                  
                   </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
