<?php

namespace App\Http\Livewire\Crud;

use Illuminate\Http\Request;
use Livewire\Component;

class Create extends Component
{
    public $name,$author,$status;

    protected $rules = [
        'name' => 'required|min:5|max:255',
        'author' => 'required|max:255',
        'status' => 'nullable|boolean',
    ];

    public function render()
    {
        return view('livewire.crud.create')->layoutData(['header' => __('Books')]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store(Request $request)
    {
        $this->validate();

        echo '<pre>'; print_r($request->all()); echo '</pre>'; die();
    }
}
