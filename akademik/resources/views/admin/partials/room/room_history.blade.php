@roomhashistory($room)
<h1>
    Historia pokoju
</h1>
<h3>
    Poprzedni Studenci
</h3>
@foreach($room->old_students as $old_student)
    @if($old_student->student->deleted_at)
        <p>
            {{ $old_student->student->first_name.' '.$old_student->student->last_name.' wynajmował/a ten pokój od dnia '.$old_student->from.' do '.$old_student->deleted_at.'.' }} - <span class="label label-danger">Usunięty z systemu!</span>
        </p>
    @else
        <p>
            <a href="{{ route('student.show', $old_student->student) }}">{{ $old_student->student->first_name.' '.$old_student->student->last_name.' wynajmował/a ten pokój od dnia '.$old_student->from.' do '.$old_student->deleted_at.'.' }}</a>
        </p>
    @endif
@endforeach
@endroomhashistory