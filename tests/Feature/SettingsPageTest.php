<?php

describe('settings', function(){
   it('renders the Livewire component', function(){
       $response = $this->get(route('settings'));

       $response->assertStatus(200);
   });

    it('can store an api key in our settings json', function(){
        \Livewire\Livewire::test(\App\Livewire\Settings::class)
            ->set('api_key', 'hello')
            ->call('updateApiKey');

        \Livewire\Livewire::test(\App\Livewire\Settings::class)
            ->assertSet('api_key', 'hello');



    });
});
