@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3"></div>
            <div class="col-xs-12 col-md-6">
                <h3>Incomes with the income id : </h3>

                <h4>Reservation incomes</h4>
                @if($reservationIncomes->isEmpty())
                    <p>No Resevations !</p>
                @else
                    @foreach($reservationIncomes as $reservationIncome)
                        <table class="table table-responsive table-bordered">
                            <tr>
                                <th>Reservation ID</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>

                            <tr>
                                <td>{!! $reservationIncome->id !!}</td>
                                <td>{!! $reservationIncome->date !!}</td>
                                <td>{!! $reservationIncome->amount !!}</td>
                            </tr>
                        </table>
                    @endforeach
                @endif

                <hr/>

                <h4>Reservation incomes</h4>
                @if($tourIncomes->isEmpty())
                    <p>No Tour income !</p>
                @else
                    @foreach($tourIncomes as $tourIncome)
                        <table class="table table-responsive table-bordered">
                            <tr>
                                <th>Reservation ID</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>

                            <tr>
                                <td>{!! $tourIncome->id !!}</td>
                                <td>{!! $tourIncome->date !!}</td>
                                <td>{!! $tourIncome->amount !!}</td>
                            </tr>
                        </table>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-md-3"></div>
    </div>
    </div>
@endsection