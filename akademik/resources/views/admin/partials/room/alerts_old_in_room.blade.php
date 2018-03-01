@roomalertsold($room)
<h3>
    Dawne zgłoszenia:
</h3>
<ol>
    @foreach($room->alerts_old as $alert)
        <li>
            <span class="label label-danger">
                {{ $alert->body }}
            </span>
        </li>
    @endforeach
</ol>
@endroomalertsold