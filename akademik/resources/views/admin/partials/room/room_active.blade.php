<h1 style="margin-top: 0">
    {{ "Pokój numer {$room->id}" }}
</h1>
<h3>
    Dane pokoju:
</h3>
<p>
    Numer: {{ $room->id }}
</p>
<p>
    Ilość miejsc: {{ $room->count }}
</p>
<p>
    Ilość osób w pokoju: {{ $room->places->count() }}
</p>
@if($room->places->count() > 0)
    <p>
        Osoby w pokoju:
    </p>
@endif
<ol>
    @foreach($room->students as $student)
        <li>
            <a href="{{ route('student.show', $student->student) }}">{!! "{$student->student->first_name} {$student->student->last_name}" !!}</a>
        </li>
    @endforeach
</ol>
<p>
    Cena pokoju: {{ $room->price }} zł
</p>
<p>
    Status: {!! $room->free() ? '<span class="label label-success">Wolny</span>' : '<span class="label label-danger">Zajęty</span>' !!}
</p>