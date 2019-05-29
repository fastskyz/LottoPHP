@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 class="text-center">Welcome to the <i>'we won't steal your money'</i> lotto!</h2>
                        <p class="text-danger text-center">To be sure of your payment, send all your credit card details to <i>notascam@wearereal.com</i></p>
                        <hr />
                        <br />

                        <h3 class="text-center">Menu:</h3>
                    <div class="text-center">
                        <a href="{{route('lotto')}}">Go to Lotto</a>
                    </div>
                    <div class="alert alert-danger" style="margin: 25px;"><h2 class="text-center">Voor gebruik met WAMP, moet je het database wachtwoord veranderen in .env</h2></div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
