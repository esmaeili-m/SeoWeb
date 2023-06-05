<?php

namespace App\Http\Livewire\Admin\Tabs;

use App\Models\Tabs;
use Livewire\Component;

class Create extends Component
{
    public $category;
    public $description;
    public $name;
    protected $rules=[
      'category'=>'required',
      'description'=>'required',
      'name'=>'required',
    ];

    public function create()
    {
        $this->validate();
//        dd($this->name);
//        $this->name;
        Tabs::create([
           'category_id'=>$this->category,
           'description'=>$this->description,
           'tab'=>$this->name,
        ]);
        return redirect()->route('tabs.index');
    }
    public function render()
    {
        return view('livewire.admin.tabs.create');
    }
}
