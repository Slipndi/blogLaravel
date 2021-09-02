<?php

namespace Tests\Unit;

use App\Models\Post;
use Tests\TestCase;

class PostTest extends TestCase
{
  public function test_get_all_post_from_path(){
    $this->assertNotNull(Post::all());
  }
  public function test_find_or_fail(){
    $this->assertNotNull(Post::findOrFail(1));
  }
}

