@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @include('inc.messages')
                <div class="card-header mt-5 ">
                    <span> Dashboard </span>   
                    <span class="pull-right " style="float:right;">
                        <a class="btn btn-primary " href="{{route('create.Listing')}}">Add Listing</a>

                    </span>
                </div>
                <div class="card-body">
                    <h3>Your Listings</h3>
                    
                    @if (isset($listings) && $listings -> count() > 0)
                       
                            <table class="table">
                                <tr>
                                    
                                    <td class="text-center">Company</td>
                                </tr>
                                @foreach ($listings as $listing)
                                <tr>
                                    
                                        <td>{{$listing ->name}}</td> 
                                        <td class="pull-right ">
                                            <a class="btn btn-primary"  href="{{route('listing.edit',$listing ->id)}}">Edit</a>
                                            <a class="btn btn-danger"  href="{{route('delete.Listing',$listing->id)}}">Delete</a>   
                                        </td>
                                   
                                </tr>
                                @endforeach
                            </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
