<?php

use Sawirricardo\Zenziva\Laravel\Zenziva;

if (! function_exists('zenviva')) {
    /**
     * Get the available configuration options.
     *
     * @return array
     */
    function zenviva(): Zenziva
    {
        return app(Zenziva::class);
    }
}
