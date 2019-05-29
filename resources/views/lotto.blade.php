@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>

                    <div class="card-body">

                        <h2 class="text-center">Please fill in 6 numbers between 1 and 52.</h2>
                        <hr />
                        <br />

                        <form action="{{route('check')}}" method="POST" class="row" style="display: inline-block;">
                            @csrf
                            @for( $i = 0; $i < 6; $i++ )
                                <select id="{{$i}}" name="{{$i}}" class="col-sm-2" style="margin-left: 15px; width: 50px">
                                    @for( $j = 1; $j < 53; $j++ )
                                        <option value="{{$j}}">{{$j}}</option>
                                    @endfor
                                </select>
                            @endfor
                            <button type="submit" class="btn btn-primary btn-block" style="margin: 20px;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection