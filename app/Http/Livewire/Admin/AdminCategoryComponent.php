<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        session()->flash('message','Category deleted');
    }

    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
