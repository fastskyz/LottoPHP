@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>

                    <div class="card-body">

                        <h2 class="text-center">The Result:</h2>
                        <hr />
                        <br />

                        <div>
                            <div class="row">
                                <h4 class="col-sm-4">Your numbers</h4>
                                @foreach( $user as $num )
                                    <span class="col-sm-1 text-center">{{$num}}</span>
                                @endforeach
                                <div class="col-sm-2"></div>
                            </div>

                            <div class="row">
                                <h4 class="col-sm-4">Lotto numbers</h4>
                                @foreach( $draw as $num )
                                    <span class="col-sm-1 text-center">{{$num}}</span>
                                @endforeach
                                <div class="col-sm-2"></div>
                            </div>
                            <br />
                            @if( $result > 0 )
                                <div class="alert alert-success">
                                    <h3>Woohhoo, you have {{$result}} correct number(s)!</h3>
                                    <h4>You won: €{{5 ** $result}}</h4>
                                </div>
                            @else
                                <div class="alert alert-danger">
                                    <h3>Ooooh, you have no correct numbers.</h3>
                                    <h4>Better luck next time!</h4>
                                </div>
                            @endif
                        </div>
                        <div class="text-center">
                            <a href="{{route('lotto')}}">Try again!</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection