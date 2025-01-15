<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_books_get_endpoint(): void
    {
        $books = Book::factory(3)->create();
        $response = $this->getJson('/books');

        $response->assertStatus(200);
        $response->assertJsonCount(3);
    }
}
