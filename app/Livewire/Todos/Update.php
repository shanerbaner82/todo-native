<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Update extends Component
{
    public Todo $todo;

    #[Rule('required|string')]
    public string $title;

    public function mount(Todo $todo)
    {
        $this->todo = $todo;
        $this->title = $todo->title;
    }

    public function save()
    {
        $this->todo->update($this->validate());
        $this->redirectRoute('todos.index');
    }

    public function render()
    {
        return view('livewire.todos.update');
    }
}
