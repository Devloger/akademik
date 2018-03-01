@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Główny - Zarządzanie</div>

                <div class="panel-body">
                    <div style="display: flex; flex-direction: column; justify-content: center;">
                        <a href="{{ route('student.index') }}" style="display: flex; flex-direction: column; margin-bottom: 10px;" >
                            <button type="button" class="btn btn-info">Studenci</button>
                        </a>
                        <a href="{{ route('room.index') }}" style="display: flex; flex-direction: column; margin-bottom: 10px;" >
                            <button type="button" class="btn btn-info">Pokoje</button>
                        </a>
                        <a href="{{ route('payment.index') }}" style="display: flex; flex-direction: column; margin-bottom: 10px;" >
                            <button type="button" class="btn btn-info">Płatności</button>
                        </a>
                        <a href="{{ route('alert.index') }}" style="display: flex; flex-direction: column; margin-bottom: 10px;" >
                            <button type="button" class="btn btn-info">Zgłoszenia</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
