<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageRoutesTest extends TestCase
{
    public function test_home_page_is_available(): void
    {
        $this->get(route('home'))->assertOk()->assertSee('LaravelPOS System')->assertSee('A lovely way to keep business')->assertDontSee('area-chart', false);
    }

    public function test_about_page_is_available(): void
    {
        $this->get(route('about'))->assertOk()->assertSee('One request, three clear responsibilities');
    }

    public function test_customer_page_lists_static_records(): void
    {
        $this->get(route('customers.index'))->assertOk()->assertSee('Customer accounts')->assertSeeText('13 customer records')->assertSee('S.Coups')->assertSee('Jeonghan')->assertSee('Joshua')->assertSee('Jun')->assertSee('Hoshi')->assertSee('Wonwoo')->assertSee('Woozi')->assertSee('DK')->assertSee('Mingyu')->assertSee('The8')->assertSee('Seungkwan')->assertSee('Vernon')->assertSee('Dino');
    }

    public function test_user_page_lists_static_records(): void
    {
        $this->get(route('users.index'))->assertOk()->assertSee('User accounts')->assertSee('Azea Natividad')->assertSee('Rafael Dizon');
    }
}
