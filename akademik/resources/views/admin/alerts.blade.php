@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Zarządzanie Zgłoszeniami - <a href="{{ route('home') }}">Powrót do strony głównej</a></h1>
        <h1>Aktualne zgłoszenia</h1>
        <table class="table table-striped panel panel-default">
            <thead>
            <tr>
                <th>ID</th>
                <th>Treść</th>
                <th>Pokój nr</th>
                <th>Student</th>
                <th>Data</th>
                <th>Rozwiąż</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alerts as $alert)
                <tr>
                    <td><a href="{{ route('alert.show', $alert) }}">{{ $alert->id }}</a></td>
                    <td>{{ $alert->body }}</td>
                    <td><a href="{{ route('room.show', $alert->room_id) }}">{{ $alert->room_id }}</a></td>
                    @if($alert->student->trashed())
                        <td><span class="label label-danger">{{ $alert->student->first_name.' '.$alert->student->last_name }}</span></td>
                    @else
                        <td><a href="{{ route('student.show', $alert->student_id) }}">{{ $alert->student->first_name.' '.$alert->student->last_name }}</a></td>
                    @endif
                    <td>{{ $alert->created_at }}</td>
                    <td>
                        <form method="POST" action="{{ route('alert.destroy', $alert) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger" type="submit" value="Zakończ">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div style="display: flex; justify-content: center;">
            {{ $alerts->links() }}
        </div>

        <h1>Dawne zgłoszenia</h1>
        <table class="table table-striped panel panel-default">
            <thead>
            <tr>
                <th>ID</th>
                <th>Treść</th>
                <th>Pokój nr</th>
                <th>Student</th>
                <th>Data</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alerts_old as $alert)
                <tr>
                    <td><a href="{{ route('alert.show', $alert) }}">{{ $alert->id }}</a></td>
                    <td>{{ $alert->body }}</td>
                    @if($alert->room->trashed())
                        <td><span class="label label-danger">{{ $alert->room_id }}</span></td>
                    @else
                        <td><a href="{{ route('room.show', $alert->room_id) }}">{{ $alert->room_id }}</a></td>
                    @endif

                    @if($alert->student->trashed())
                        <td><span class="label label-danger">{{ $alert->student->first_name.' '.$alert->student->last_name }}</span></td>
                    @else
                        <td><a href="{{ route('student.show', $alert->student_id) }}">{{ $alert->student->first_name.' '.$alert->student->last_name }}</a></td>
                    @endif

                    <td>{{ $alert->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div style="display: flex; justify-content: center;">
            {{ $alerts_old->links() }}
        </div>
    </div>
@endsection
