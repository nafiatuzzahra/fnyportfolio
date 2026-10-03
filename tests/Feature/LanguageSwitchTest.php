<?php

namespace Tests\Feature;

use Tests\TestCase;

class LanguageSwitchTest extends TestCase
{
    public function test_language_selection_persists_across_pages_and_can_be_changed_back(): void
    {
        $this->get('/language/en?page=aktivitas')
            ->assertRedirect(route('aktivitas'));

        $this->get('/')
            ->assertOk()
            ->assertSee('lang="en"', false)
            ->assertSee('SELECTED PROJECTS');

        $this->get('/data-diri')
            ->assertOk()
            ->assertSee('INTRODUCTION');

        $this->get('/language/id?page=kontak')
            ->assertRedirect(route('kontak'));

        $this->get('/kontak')
            ->assertOk()
            ->assertSee('lang="id"', false)
            ->assertSee('KONTAK &amp; KERJA SAMA', false);
    }

    public function test_language_switch_only_redirects_to_known_site_pages(): void
    {
        $this->get('/language/en?page=https://example.com')
            ->assertRedirect(route('beranda'));

        $this->get('/language/fr')
            ->assertNotFound();
    }
}
