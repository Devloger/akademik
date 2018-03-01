<form method="POST" action="{{ $route }}" style="margin-top: 10px;">
    {{ csrf_field() }}
    {{ method_field($method) }}
    <input class="btn {{ $color }}" style="display: block; width: 100%;" type="submit" value="{{ $text }}">
</form>