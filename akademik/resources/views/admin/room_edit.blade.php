@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Zarządzanie Pokojem - <a href="{{ route('home') }}">Powrót do strony głównej</a></div>
                    <div class="panel-body">
                        <h1>Pokój numer {{ $room->id }}</h1>
                        <!-----------------------Formularz do: Edycji Pokoju------->
                        
                        <form method="POST" action="{{ route('room.update', $room) }}">

                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                        
                            <div class="form-group">
                                <label for="id">Numer pokoju</label>
                                <input type="text" name="id" class="form-control" id="id" value="{{ $room->id }}">
                            </div>

                            <div class="form-group">
                                <label for="price">Cena pokoju</label>
                                <input type="text" name="price" class="form-control" id="price" value="{{ $room->price }}">
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary pointer">
                                    Zaktualizuj pokój!
                                </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
