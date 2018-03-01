@foreach($student->alerts as $alert)
    <h1>
        Zgłoszenia
    </h1>
    <h3>
        Zgłoszenie:
    </h3>
    <p>
        ID: {{ $alert->id }}
    </p>
    <p>
        Pokój: {{ $alert->room_id }}
    </p>
    <p>
        Treść: {{ $alert->body }}
    </p>
    <p>
        Zgłoszone: {{ $alert->created_at }}
    </p>
    <p>
        Zamknięte: {!! $alert->closed() ? '<span class="label label-success">Tak</span>' : '<span class="label label-danger">Nie</span>' !!}
    </p>
@endforeach