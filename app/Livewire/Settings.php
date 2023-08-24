<?php

namespace App\Livewire;

use Livewire\Component;
use \Native\Laravel\Facades\Settings as NativeSettings;

class Settings extends Component
{
    public string|null $api_key;

    public function mount()
    {
       $this->api_key = NativeSettings::get('apiKey');
    }

    public function updateApiKey()
    {
        NativeSettings::set('apiKey', $this->api_key);
    }

    public function render()
    {
        return view('livewire.settings');
    }
}
