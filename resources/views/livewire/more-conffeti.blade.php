<div>
    <button wire:click='MoreConffetiSend("{{ $userToken }}")'>
        Más conffeti
    </button>
    @if($rateLimitMessage)
        <p>
            {{ $rateLimitMessage }}
        </p>
    @endif
</div>
