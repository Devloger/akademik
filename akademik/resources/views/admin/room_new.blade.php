@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Zarządzanie Pokojami - <a href="{{ route('home') }}">Powrót do strony głównej</a></div>
                    <div class="panel-body">
                        <h1 style="margin-top: 0">
                            Dodaj nowy pokój:
                        </h1>
                        <h3>
                            Dane pokoju
                        </h3>
                        @include('admin.partials.room.new_room')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
