@if ($tag === 'a')
<a @if (! $disabled && $href) href="{{ $href }}" @endif role="button" @if ($disabled) aria-disabled="true" tabindex="-1"
    @endif @if ($toggle) data-bs-toggle="button" @endif @if ($active) aria-pressed="true" @endif
    {{ $attributes->class($classes()) }}>
    {{ $slot }}
</a>
@else
<button type="{{ $type }}" @disabled($disabled) @if ($toggle) data-bs-toggle="button" @endif @if ($active)
    aria-pressed="true" @endif {{ $attributes->class($classes()) }}>
    {{ $slot }}
</button>
@endif