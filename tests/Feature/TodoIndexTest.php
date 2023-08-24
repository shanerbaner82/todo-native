<?php

describe('index', function () {
    it('page works without any todos', function () {
        $response = $this->get('/');
        $response->assertStatus(200);
    });

    it('if no todos we see a link to create a todo', function () {
        \Livewire\Livewire::test(\App\Livewire\Todos\Index::class)
            ->assertSee('click here to create one');
    });

    it('if there are todos they are shown', function () {
        \App\Models\Todo::factory()->create()->count(3);
        $todos = \App\Models\Todo::get();
        \Livewire\Livewire::test(\App\Livewire\Todos\Index::class)
            ->assertSee($todos->first()->title)
            ->assertDontSee('click here to create one');
    });

    it('marks a todo as complete', function () {
        \App\Models\Todo::factory()->create();
        $todo = \App\Models\Todo::first();
        \Livewire\Livewire::test(\App\Livewire\Todos\Index::class)
            ->call('complete', $todo);

        $this->assertTrue(!empty($todo->completed_at));
    });

    it('syncs currently working on', function () {
        \App\Models\Todo::factory(2)->create();
        $todo1 = \App\Models\Todo::first();
        $todo2 = \App\Models\Todo::find(2);

        \Livewire\Livewire::test(\App\Livewire\Todos\Index::class)
            ->call('syncCurrent', $todo1);

        $this->assertTrue($todo1->currently_working_on);
        $this->assertTrue(!$todo2->currently_working_on);

        \Livewire\Livewire::test(\App\Livewire\Todos\Index::class)
            ->call('syncCurrent', $todo2);

        $todo1->refresh();
        $todo2->refresh();

        $this->assertTrue($todo1->currently_working_on == false);
        $this->assertTrue($todo2->currently_working_on == true);
    });

    it('can delete a todo', function(){
        \App\Models\Todo::factory(2)->create();

        \Livewire\Livewire::test(\App\Livewire\Todos\Index::class)
            ->call('delete', \App\Models\Todo::first());

        $this->assertDatabaseCount('todos', 1);
    });


});
