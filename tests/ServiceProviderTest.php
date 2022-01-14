<?php
namespace Avido\LaravelSmtpeter\Tests;

use Avido\LaravelSmtpeter\Facades\Smtpeter;
use Avido\LaravelSmtpeter\SmtpeterApi;

class ServiceProviderTest extends TestCase
{
    /** @test */
    public function itCanResolveSmtpeterClientClass()
    {
        $this->assertInstanceOf(SmtpeterApi::class, app(SmtpeterApi::class));
    }

    /** @test */
    public function itCanUseTheFacade()
    {
        $this->assertTrue(Smtpeter::registerd());
    }
}
