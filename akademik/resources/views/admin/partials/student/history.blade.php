@if( $student->old )
    <h1>Historia</h1>
    @foreach($student->old()->get() as $room)
        <h3>Pokój:</h3>
        <p>
            ID Pokoju: {{ $room->room_id }}
        </p>
        <p>
            Koszt pokoju: {{ $room->room->price }} zł
        </p>
        <p>
            Wynajmuje od: {{ $room->from }}
        </p>
        <p>
            Wynajmuje do: {{ $room->to }}
        </p>
        <p>
            Koszt pokoju: <span class="label label-primary">{{ $room->room->price }} zł</span>
        </p>
        <p>
            Kaucja: {!! $room->kaucja > 0 ? '<span class="label label-success">Zapłacono, data wpłaty: '.$room->kaucja_data.'</span>' : '<span class="label label-danger">Niezapłacono</span>' !!}
        </p>
        <p>
            Wymeldowano: {{ $room->updated_at->format('Y-m-d') }}
        </p>
        <h3>Płatności:</h3>
        @foreach($room->payments as $payment)
            <p>
                Wpłata: <span class="label label-success">{{ $payment->value }} zł</span>
            </p>
            <p>
                Dnia: {{ $payment->created_at->format('Y-m-d') }}
            </p>
        @endforeach
        <h3>Status:</h3>
        <span class="label {{ $room->balance() >= 0 ? 'label-success' : 'label-danger' }}" style="display: block; font-size: 16px;">{{ $room->balance() }} zł</span>
    @endforeach
@endif