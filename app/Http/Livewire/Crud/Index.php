<?php

namespace App\Http\Livewire\Crud;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {

        $books = Book::paginate(2);
        return view('livewire.crud.index',[
            'books' => $books
        ])->layoutData(['header' => __('Books')]);
    }

    public function redirectToPage()
    {
        return redirect()->route('books.create');
    }
}
