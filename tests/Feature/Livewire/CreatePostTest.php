<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use App\Models\Post;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;
    public function test_renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    public function test_can_create_new_post()
    {
        $post = Post::whereTitle('Some title')->first();
        $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title', 'Some title')
            ->set('content', 'Some content')
            ->call('save');

        $post = Post::whereTitle('Some title')->first();
        $this->assertNotNull($post);
    }

    public function test_title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '')
            ->call('save')
            ->assertHasErrors(['title' => 'required']);
    }
}
