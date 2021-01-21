@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              
                <div class="card-header mt-5">
                    <span> Latest Business Listings</span>   
                </div>
                <div class="card-body">
                    
                    @if (isset($Listings) && $Listings -> count() > 0)
                       <ul class="list-group">
                           @foreach ($Listings as $Listing)
                               <li class="list-group-item">
                                   <a href="{{route('listing.show',$Listing->id)}}">{{$Listing->name}}</a>
                               </li>
                           @endforeach
                       </ul>
                    @else
                        <p>No Listings Found</p>  
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
