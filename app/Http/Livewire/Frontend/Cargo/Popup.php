<?php

namespace App\Http\Livewire\Frontend\Cargo;

use App\Models\Cargo;
use App\Models\Country;
use Livewire\Component;

class Popup extends Component
{

    public $countries, $country = null;

    public function mount($countries)
    {
        $this->countries = $countries;
    }

    public function cekHarga()
    {
        return $this->country;
    }

    public function render()
    {
        if ($this->country) {
            $negara = Country::where('id', $this->country)->first();
            $cargo = $negara->cargo()->get();
            return view('livewire.frontend.cargo.popup', [
                'cargo' => $cargo
            ]);
        } else {
            return view('livewire.frontend.cargo.popup', [
                'cargo' => null
            ]);
        }
    }
}
