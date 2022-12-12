<?php

namespace App\Http\Livewire\Frontend\Cargo;

use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Deliverto extends Component
{
    public $countries, $country;

    public function mount()
    {
        $this->countries = Country::all();
    }
    public function cekNegara()
    {
        return $this->country;
    }
    public function deliverto()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->deliverto = $this->country;
        $user->update();
        $this->emit('deliverto');
    }
    public function render()
    {
        if ($this->country) {
            $negara = Country::where('id', $this->country)->first();
            return view('livewire.frontend.cargo.deliverto', [
                'negara' => $negara,
            ]);
        } else {
            return view('livewire.frontend.cargo.deliverto', [
                'negara' => null
            ]);
        }
    }
}
