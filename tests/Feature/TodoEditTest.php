<?php

describe('edit', function () {
    it('works', function () {
        \App\Models\Todo::factory()->create();

        $response = $this->get('/todos/' . \App\Models\Todo::first()->id . '/edit');
        $response->assertStatus(200);
    });

    it('it loads the todo', function () {
        \App\Models\Todo::factory()->create();
        \Livewire\Livewire::test(\App\Livewire\Todos\Update::class, ['todo' => \App\Models\Todo::first()])
            ->assertSet('title', \App\Models\Todo::first()->title);
    });

    it('updates a todo', function () {
        \App\Models\Todo::factory()->create();
        \Livewire\Livewire::test(\App\Livewire\Todos\Update::class, ['todo' => \App\Models\Todo::first()])
            ->assertSet('title', \App\Models\Todo::first()->title)
            ->set('title', 'hi there')
            ->call('save');

        $this->assertDatabaseHas('todos', [
            'id' => 1,
            'title' => 'hi there'
        ]);
    });


});
