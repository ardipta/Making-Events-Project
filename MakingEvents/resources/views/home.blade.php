@extends('layouts.app')

@section('content')
<div class="container bg-green">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
             {{ session('status') }}
        </div>
    @endif
    <h3 class="text-center">Book a Service</h3>
    <table class="table bg-dark-gray">
        <tbody>
        @foreach($events as $event)
            <tr>
                <td>
                    
                </td>
                <td><strong><i class="fa fa-handshake-o"></i>Service Name:</strong> {{$event -> service_name}}</td>
                <td><strong><i class="fa frames-description"></i>Description:</strong><br> {{$event -> description}}</td>
                <td>
                    <a href="{{route('events.show', [$event->id, $event->service_name])}}">
                        <button class="btn btn-outline-warning">Proceed</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
