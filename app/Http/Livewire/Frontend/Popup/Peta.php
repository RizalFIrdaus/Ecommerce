<?php

namespace App\Http\Livewire\Frontend\Popup;

use App\Models\Province;
use Livewire\Component;


class Peta extends Component
{

    public $peta, $data;


    public function mount($maps)
    {
        $this->peta = $maps;
    }
    public function dataMap($id)
    {
        $this->data = $id;
    }
    public function render()
    {
        $previewMap = Province::where('id', $this->data)->first();
        return view('livewire.frontend.popup.peta', [
            'previewMap' => $previewMap
        ]);
    }
}
