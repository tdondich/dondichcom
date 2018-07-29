<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;


    public function setUp()
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_should_create_an_article()
    {
        // Create a user that will be the author
        $user = factory(User::class)->create();
        // Verify that article create page loads
        $response = $this->actingAs($user)->get('/admin/articles/create');
        $response->assertStatus(200);
        // Submit the article data and verify that the article exists in database
        $testData = [
            'title' => 'testarticle',
            'slug' => 'test-article',
            'excerpt' => 'Test excerpt',
            'content' => 'Test content'
        ];
        $response = $this->actingAs($user)->post('/admin/articles/create', $testData);
        // Test we are redirected to our main admin
        $response->assertRedirect('/admin');
        $response->assertSessionHas('status', 'Article created');
        // Now check article exists in database
        $this->assertDatabaseHas('articles', $testData);
    }
}
