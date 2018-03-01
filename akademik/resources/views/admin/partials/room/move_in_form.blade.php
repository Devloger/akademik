<form action="{{ route('student.move_in_patch', $student) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
        <label for="room_id">Wybierz pokój:</label>
        <select name="room_id" class="form-control" id="room_id">
            @foreach($free_rooms as $free_room)
                <option value="{{ $free_room }}">{{ $free_room }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="from">Od:</label>
        <input name="from" type="date" class="form-control" id="from">
    </div>
    <div class="form-group">
        <label for="to">Do:</label>
        <input name="to" type="date" class="form-control" id="to">
    </div>
    <input type="submit" value="Zamelduj!" style="display: block; margin: 0px; width: 100%;" class="btn btn-primary">
</form>