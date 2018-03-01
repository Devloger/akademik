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
                        @include('admin.partials.student.student_form', [
                            'route' => route('student.update', $student),
                            'method' => 'PATCH',
                            'text' => 'Zapisz!',
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
