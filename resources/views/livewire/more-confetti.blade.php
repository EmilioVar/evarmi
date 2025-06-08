<div>
    <button wire:click='MoreConfettiSend("{{ $userToken }}")'>
        Más confetti
    </button>
    @if($rateLimitMessage)
        <p>
            {{ $rateLimitMessage }}
        </p>
    @endif
</div>
