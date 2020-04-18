@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 align="center"> World Covid Update </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">Cases</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ ($total_cases)}} </h5>
                        <p class="card-text">Total case of affected</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Deaths</div>
                    <div class="card-body">
                        <h5 class="card-title">{{  ($total_deaths)}} </h5>
                        <p class="card-text">Total deaths worldwide</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Recoverd</div>
                    <div class="card-body">
                        <h5 class="card-title"> {{ ($total_recovered) }}</h5>
                        <p class="card-text">Total recoverd in worldwide</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Active</div>
                    <div class="card-body">
                        <h5 class="card-title"> {{($total_active) }}</h5>
                        <p class="card-text">Total Active in worldwide</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 align="center"> Bangladesh Covid Update </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Confirmed</div>
                    <div class="card-body">
                        <h5 class="card-title"> {{$list_data["confirmed"]}}</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Recovered</div>
                    <div class="card-body">
                        <h5 class="card-title"> {{$list_data["recovered"]}} </h5>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Deaths</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$list_data["deaths"]}} </h5>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">New Confirmed</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$newlist["confirmed"]}} </h5>

                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">New Recovered</div>
                    <div class="card-body">
                        <h5 class="card-title"> {{$newlist["recovered"]}}</h5>
                        <!--   <p class="card-text">Total New Recovered of affected</p>-->
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">New Deaths</div>
                    <div class="card-body">
                        <h5 class="card-title"> {{$newlist["deaths"]}}</h5>
                        <!--<p class="card-text">Total New Deaths of affected</p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 align="center"> Check Your Area</h1>
    </div>

    <div class="container">

        <table id="data" class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Districts</th>
                <th scope="col">Confirmed</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>bjhjhbjhb</td>
                <td>nkjbjk</td>

            </tr>
            </tbody>
        </table>
    </div>
@endsection
