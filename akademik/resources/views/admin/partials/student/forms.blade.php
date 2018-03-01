@include('admin.partials.student.form', [
        'route' => route('student.destroy', $student->id),
        'method' => 'DELETE',
        'color' => 'btn-danger',
        'text' => 'Usuń',
    ])
@active($student)
    @include('admin.partials.student.form', [
        'route' => route('student.evict', $student->id),
        'method' => 'PATCH',
        'color' => 'btn-warning',
        'text' => 'Wymelduj',
    ])
@else
    @include('admin.partials.student.form', [
        'route' => route('student.move_in', $student->id),
        'method' => 'GET',
        'color' => 'btn-primary',
        'text' => 'Zamelduj',
    ])
@endactive
@include('admin.partials.student.form', [
    'route' => route('student.edit', $student->id),
    'method' => 'GET',
    'color' => 'btn-info',
    'text' => 'Edytuj dane',
])
@notkaucja($student)
    @include('admin.partials.student.form', [
        'route' => route('student.kaucja', $student->id),
        'method' => 'PATCH',
        'color' => 'btn-primary',
        'text' => 'Zaakceptuj kaucję',
    ])
@endnotkaucja
@active($student)
    @include('admin.partials.student.form', [
        'route' => route('student.add_payment', $student->id),
        'method' => 'GET',
        'color' => 'btn-success',
        'text' => 'Zaakceptuj płatność',
    ])
@endactive