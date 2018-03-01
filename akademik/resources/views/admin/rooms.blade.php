@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Zarządzanie Pokojami - <a href="{{ route('home') }}">Powrót do strony głównej</a></div>
                    <div class="panel-body">
                        <div style="display: flex; flex-direction: column; justify-content: center;">
                            <a href="{{ route('room.create') }}" style="display: flex; flex-direction: column; margin-bottom: 10px;" >
                                <button type="button" class="btn btn-info">Dodaj nowy</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped panel panel-default">
            <thead>
            <tr>
                <th>Numer</th>
                <th>Ilość osób na pokój</th>
                <th>Ilość osób w pokoju</th>
                <th>Cena</th>
                <th>Status</th>
                <th>Usuń</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td><a href="{{ route('room.show', $room) }}">{{ $room->id }}</a></td>
                    <td>{{ $room->count }}</td>
                    <td>{{ $room->places->count() }}</td>
                    <td>{{ $room->price }} zł</td>
                    <td>{!! $room->free() ? '<span class="label label-success">Wolny</span>' : '<span class="label label-danger">Zajęty</span>' !!}</td>
                    <td>
                        <form method="POST" action="{{ route('room.destroy', $room) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="hidden" value="{{ $room->id }}">
                            <input class="btn btn-danger" type="submit" value="X">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div style="display: flex; justify-content: center;">
            {{ $rooms->links() }}
        </div>
    </div>
@endsection
