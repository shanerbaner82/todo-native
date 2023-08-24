<?php

describe('create', function () {
    it('page works', function () {
        $response = $this->get('/todos/create');
        $response->assertStatus(200);
    });

    it('saves a todo to the database', function(){
       \Livewire\Livewire::test(\App\Livewire\Todos\Create::class)
       ->set('title', 'Todo #1')
       ->call('saveTodo');

       $this->assertDatabaseCount('todos', 1);
    });

});;
