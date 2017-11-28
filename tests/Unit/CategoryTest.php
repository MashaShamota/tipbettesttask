<?php

namespace Tests\Unit;

use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * Check If categories route works
     *
     * @return void
     */
    public function testCatgoryCallbacks()
    {
        $response = $this->get('/categories');
        $response->assertStatus(200);
    }
    /**
     *  Check If category route works
     *
     * @return void
     */
    public function testCatgoryOne()
    {
        $response = $this->get('/category/art');
        $response->assertStatus(200);
    }
    
    
}
