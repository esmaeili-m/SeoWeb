<?php

namespace App\Http\Livewire\Admin\Tabs;

use App\Models\Tabs;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Update extends Component
{
    public $category;
    public $description;
    public $name;
    public $tab;
    protected $rules=[
        'category'=>'required',
        'description'=>'required',
        'name'=>'required',
    ];

    public function mount()
    {
        $this->tab=Request::segment(4);
        $tab=Tabs::find($this->tab);
        $this->name=$tab->tab;
        $this->description=$tab->description;
        $this->category=$tab->category_id;

    }

    public function update()
    {
        $this->validate();
        $tab=Tabs::find($this->tab);
        $tab->update([
           'tab'=>$this->name,
           'description'=>$this->description,
           'category_id'=>$this->category,
        ]);
        return redirect()->route('tabs.index');
    }
    public function render()
    {
        return view('livewire.admin.tabs.update');
    }
}
