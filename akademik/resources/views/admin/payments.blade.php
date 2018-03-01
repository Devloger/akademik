@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Płatności - <a href="{{ route('home') }}">Powrót do strony głównej</a></h1>
        <table class="table table-striped panel panel-default">
            <thead>
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Kwota</th>
                <th>Data</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>

                    @if($payment->room_student->student->trashed())
                        <td><span class="label-danger label">{{ $payment->room_student->student->first_name.' '.$payment->room_student->student->last_name }}</span></td>
                    @else
                        <td><a href="{{ route('student.show', $payment->room_student->student->id) }}">{{ $payment->room_student->student->first_name.' '.$payment->room_student->student->last_name }}</a></td>
                    @endif

                    <td><span class="label label-success">{{ $payment->value }} zł</span></td>
                    <td>{{ $payment->created_at->format('Y-m-d') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div style="display: flex; justify-content: center;">
            {{ $payments->links() }}
        </div>
@endsection
