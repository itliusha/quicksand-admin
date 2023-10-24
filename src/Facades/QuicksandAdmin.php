<?php
/**
 * @Author: itliusha
 * @Date: 2023/10/25
 * @E-mail: itliusha@qq.com
 */

namespace Itliusha\QuicksandAdmin\Facades;

use Illuminate\Support\Facades\Facade;

class QuicksandAdmin extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'quicksandadmin';
    }
}
