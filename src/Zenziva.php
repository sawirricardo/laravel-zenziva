<?php

namespace Sawirricardo\Zenziva\Laravel;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Traits\Conditionable;
use Illuminate\Support\Traits\Macroable;

class Zenziva
{
    use Conditionable;
    use Macroable;

    public string $userKey;
    public string $passKey;

    public function __construct(Repository $config)
    {
        $this->userKey = $config->get('zenziva.user_key');
        $this->passKey = $config->get('zenziva.pass_key');
    }

    public function sendSms(string $to, string $message)
    {
        Http::get();
    }
}
