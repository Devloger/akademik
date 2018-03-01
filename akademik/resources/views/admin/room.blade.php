@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Zarządzanie Pokojem - <a href="{{ route('home') }}">Powrót do strony głównej</a></div>
                    <div class="panel-body">
                        @include('admin.partials.room.room_active')
                        @include('admin.partials.room.alerts_in_room')
                        @include('admin.partials.room.room_history')
                        @include('admin.partials.room.alerts_old_in_room')
                        @include('admin.partials.student.form', [
                            'route' => route('room.edit', $room),
                            'method' => 'GET',
                            'color' => 'btn-info',
                            'text' => 'Edytuj pokój',
                        ])
                        @include('admin.partials.student.form', [
                            'route' => route('room.destroy', $room),
                            'method' => 'DELETE',
                            'color' => 'btn-danger',
                            'text' => 'Usuń pokój',
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
