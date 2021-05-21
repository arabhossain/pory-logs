<?php


namespace Pory\Logs\Facades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;

/**
 * Auth Module public accessors
 * @method static modelLog(Model $model): void
 * @method static requestLog(): void
 */
class PoryLogs extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'poryLogs';
    }
}
