@if($isLink)
<a href="{{ $link }}" {{ $attributes->merge(['class' => 'btn text-center']) }}>
    {{ $slot }}
</a>
@else
<button {{ $attributes->merge(['class' => 'btn text-center']) }}>
    {{ $slot }}
</button>
@endif