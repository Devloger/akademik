@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Zarządzanie Studentem - <a href="{{ route('home') }}">Powrót do strony głównej</a></div>
                    <div class="panel-body">
                        <h1 style="margin-top: 0">
                            {{ "{$student->first_name} {$student->last_name}" }}
                        </h1>
                        <h3>
                            Dane osobowe:
                        </h3>
                        <p>
                            Imię: {{ $student->first_name }}
                        </p>
                        <p>
                            Nazwisko: {{ $student->last_name }}
                        </p>
                        <p>
                            Pesel: {{ $student->pesel }}
                        </p>
                        <p>
                            Data urodzenia: {{ $student->birth }}
                        </p>
                        <p>
                            Nr. albumu: {{ $student->album }}
                        </p>
                        @include('admin.partials.student.active')
                        @include('admin.partials.student.history')
                        @include('admin.partials.student.alerts')
                        @include('admin.partials.student.forms')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
