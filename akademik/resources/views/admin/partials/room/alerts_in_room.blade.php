@roomalerts($room)
    <h3>
        Aktywne zgłoszenia:
    </h3>
    <ol>
        @foreach($room->alerts as $alert)
            <li>
                <a href="{{ route('alert.show', $alert) }}">
                    {{ $alert->body }}
                </a>
            </li>
        @endforeach
    </ol>
@endroomalerts