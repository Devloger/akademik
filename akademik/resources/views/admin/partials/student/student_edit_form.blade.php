<!-----------------------Formularz do: Edycji Studenta--------------->

<form method="POST" action="{{ route('student.update', $student) }}">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="form-group">
        <label for="first_name">Imię</label>
        <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $student->first_name }}">
    </div>

    <div class="form-group">
        <label for="last_name">Nazwisko</label>
        <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $student->last_name }}">
    </div>

    <div class="form-group">
        <label for="pesel">Pesel</label>
        <input type="text" name="pesel" class="form-control" id="pesel" value="{{ $student->pesel }}">
    </div>

    <div class="form-group">
        <label for="birth">Data urodzenia</label>
        <input type="date" name="birth" class="form-control" id="birth" value="{{ $student->birth }}">
    </div>

    <div class="form-group">
        <label for="album">Nr. albumu</label>
        <input type="text" name="album" class="form-control" id="album" value="{{ $student->album }}">
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary pointer">
            Zapisz!
        </button>
    </div>
</form>