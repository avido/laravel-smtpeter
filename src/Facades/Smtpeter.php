<?php
namespace Avido\LaravelSmtpeter\Facades;

use Avido\LaravelSmtpeter\SmtpeterApi;
use Illuminate\Support\Facades\Facade;

class Smtpeter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SmtpeterApi::class;
    }
}
