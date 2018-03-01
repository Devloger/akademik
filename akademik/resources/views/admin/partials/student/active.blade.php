@active($student)
<h1>Obecnie</h1>
<h3>Pokój:</h3>
<p>
	Numer Pokoju: <a href="{{ route('room.show', $student->active->room_id) }}">{{ $student->active->room_id }}</a>
</p>
<p>
	Wynajmuje od: {{ $student->active->from }}
</p>
<p>
	Wynajmuje do: {{ $student->active->to }}
</p>
<p>
	Kaucja: {!! $student->active->kaucja > 0 ? '<span class="label label-success">Zapłacono, data wpłaty: '.$student->active->kaucja_data.'</span>' : '<span class="label label-danger">Niezapłacono</span>' !!}
</p>
<p>
	Koszt pokoju: <span class="label label-primary">{{ $student->active->room->price }} zł</span>
</p>
<h3>Płatności:</h3>
@foreach($student->active->payments as $payment)
	<p>
		Wpłata: <span class="label label-success">{{ $payment->value }} zł</span>
	</p>
	<p>
		Dnia: {{ $payment->created_at->format('Y-m-d') }}
	</p>
@endforeach
<h3>Status:</h3>
<span class="label {{ $student->active->balance() >= 0 ? 'label-success' : 'label-danger' }}" style="display: block; font-size: 16px;">{{ $student->active->balance() }} zł</span>
@endactive