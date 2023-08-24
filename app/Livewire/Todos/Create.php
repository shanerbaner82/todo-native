<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    #[Rule('required|string|min:1')]
    public string $title;

    public function saveTodo()
    {
        Todo::create(array_merge($this->validate(), ['uuid' => Str::uuid()->toString()]));
        $this->redirectRoute('todos.index');
    }
    public function render()
    {
        return view('livewire.todos.create');
    }
}
