<!-----------------------Formularz do: Nowego Pokoju--------------->
<form method="POST" action="{{ route('room.store') }}">

    {{ csrf_field() }}
    {{ method_field('POST') }}

    <div class="form-group">
        <label for="id">Numer pokoju</label>
        <input type="text" name="id" class="form-control" id="id">
    </div>

    <div class="form-group">
        <label for="count">Ilu osobowy</label>
        <input type="text" name="count" class="form-control" id="count">
    </div>

    <div class="form-group">
        <label for="price">Cena</label>
        <input type="text" name="price" class="form-control" id="price">
    </div>

    <div class="text-center">
        <input type="submit" style="display: block; width: 100%;" class="btn btn-primary pointer" value="Dodaj nowy pokój!">
    </div>
</form>