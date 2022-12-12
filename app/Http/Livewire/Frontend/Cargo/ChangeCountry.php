<?php

namespace App\Http\Livewire\Frontend\Cargo;

use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class ChangeCountry extends Component
{
    protected $listeners = ['deliverto' => 'render'];

    public function render()
    {
        if (Auth::check()) {
            $country = Country::where('id', Auth::user()->deliverto)->first();
            return view('livewire.frontend.cargo.change-country', [
                'country' => $country
            ]);
        } else {
            return view('livewire.frontend.cargo.change-country');
        }
    }
}
