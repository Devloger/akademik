<form action="{{ route('student.add_payment_store', $student) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <div class="form-group">
        <label for="created_at">Wpłata dnia:</label>
        <input name="created_at" type="date" class="form-control" id="created_at">
    </div>
    <div class="form-group">
        <label for="value">Wartość:</label>
        <input name="value" type="text" class="form-control" id="value">
    </div>
    <input type="submit" value="Zaakceptuj!" style="display: block; margin: 0px; width: 100%;" class="btn btn-primary">
</form>