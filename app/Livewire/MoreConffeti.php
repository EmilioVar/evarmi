<?php

namespace App\Livewire;

use App\Events\FireConffeti;
use Livewire\Component;

class MoreConffeti extends Component
{
    public $userToken;

    public $conffetiCount = 0;
    public $rateLimitMessage = null;

    public function MoreConffetiSend(string $userToken)
    {
        $ip = request()->ip();
        $cacheKey = 'conffeti_rate_limit_' . $ip;

        // Obtiene el contador actual de la IP
        $count = cache()->get($cacheKey, 0);

        if ($count >= 10) {
            $this->rateLimitMessage = 'Has alcanzado el límite de 10 veces por minuto.';
            return;
        }

        FireConffeti::dispatch($userToken);

        $this->conffetiCount++;
        // Incrementa el contador y establece el tiempo de expiración a 1 minuto
        cache()->put($cacheKey, $count + 1, now()->addMinute());
        $this->rateLimitMessage = null;
    }

    public function render()
    {
        return view('livewire.more-conffeti');
    }
}
