<?php

namespace App\Livewire;

use App\Events\FireConfetti;
use Livewire\Component;

class MoreConfetti extends Component
{
    public $userToken;

    public $confettiCount = 0;
    public $rateLimitMessage = null;

    public function MoreConfettiSend(string $userToken)
    {
        $ip = request()->ip();
        $cacheKey = 'confetti_rate_limit_' . $ip;

        // Obtiene el contador actual de la IP
        $count = cache()->get($cacheKey, 0);

        if ($count >= 10) {
            $this->rateLimitMessage = 'Has alcanzado el límite de 10 veces por minuto.';
            return;
        }

        FireConfetti::dispatch($userToken);

        $this->confettiCount++;
        // Incrementa el contador y establece el tiempo de expiración a 1 minuto
        cache()->put($cacheKey, $count + 1, now()->addMinute());
        $this->rateLimitMessage = null;
    }

    public function render()
    {
        return view('livewire.more-confetti');
    }
}
