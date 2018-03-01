@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Zarządzanie Studentami - <a href="{{ route('home') }}">Powrót do strony głównej</a></div>
                    <div class="panel-body">
                        <div style="display: flex; flex-direction: column; justify-content: center;">
                            <a href="{{ route('student.create') }}" style="display: flex; flex-direction: column; margin-bottom: 10px;" >
                                <button type="button" class="btn btn-info">Dodaj nowego</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped panel panel-default">
            <thead>
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Nr. Albumu</th>
                <th>Kasacja</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td><a href="{{ route('student.show', $student->id) }}">{{ $student->album }}</a></td>
                    <td>
                        <form method="POST" action="{{ route('student.destroy', $student->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="hidden" value="{{ $student->id }}">
                            <input class="btn btn-danger" type="submit" value="X">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div style="display: flex; justify-content: center;">
            {{ $students->links() }}
        </div>
    </div>
@endsection
