@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong><h2 class="text-center">{{$event->service_name}}</h2></strong></div>

                <div class="card-body card">
                    <p class="">
                        <h3>Description of Service</h3>
                        {{$event->description}}
                    </p>
                    <p class=""> 
                        @if($event->service_name == 'Stage Service')
                            <img src="{{ asset('Front_End_Design/images/1.jpg') }}" style="width:500px; height:250px"/> 
                        @endif
                        @if($event->service_name == 'Food Service')
                            <img src="{{ asset('Front_End_Design/images/b4.jpg') }}" style="width:500px; height:250px"/>
                        @endif
                        @if($event->service_name == 'Kit Service')
                            <img src="{{ asset('Front_End_Design/images/kit.jpg') }}" style="width:500px; height:250px"/>
                        @endif
                        @if($event->service_name == 'Photography Service')
                            <img src="{{ asset('Front_End_Design/images/3.jpg') }}" style="width:500px; height:250px"/>
                        @endif

                    </p>
                    <a href="{{route('payments.payment', [$event->id])}}">
                        <button class="btn btn-outline-secondary col-lg-7">Confirm</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
