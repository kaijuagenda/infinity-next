<?php

namespace Tests\Feature;

//use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class IndexTest extends TestCase {

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('/')
            ->assertOk();
    }
}
