<?php

namespace App\Http\Livewire\Admin\Tabs;

use App\Models\Tabs;
use Livewire\Component;

class Index extends Component
{
    public function status($id){
        $tab=Tabs::find($id);
        if ($tab->status == 1){
            $tab->update([
                'status'=>0
            ]);
            $this->dispatchBrowserEvent('swal:model',[
                'type'=>'success',
                'title'=>'لیست با موفقیت غیر فعال گردید',
                'text'=>''
            ]);
        }else{
            $tab->update([
                'status'=>1
            ]);
            $this->dispatchBrowserEvent('swal:model',[
                'type'=>'success',
                'title'=>'لیست با موفقیت فعال گردید',
                'text'=>''
            ]);

        }

    }
    public function delete($id)
    {
        $tab=Tabs::find($id);
        $tab->delete();
        $this->dispatchBrowserEvent('swal:model',[
            'type'=>'success',
            'title'=>' لیست با موفقیت حذف گردید',
            'text'=>''
        ]);
    }
    public function render()
    {
        $tabs=Tabs::with('category')->get();
        return view('livewire.admin.tabs.index',compact('tabs'));
    }
}
