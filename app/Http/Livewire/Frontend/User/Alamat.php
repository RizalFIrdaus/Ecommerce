<?php

namespace App\Http\Livewire\Frontend\User;

use Livewire\Component;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;


class Alamat extends Component
{


    public $address, $name_place, $number_phone, $id_address;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name_place' => 'required',
            'address' => 'required',
            'number_phone' => 'required|min:11',

        ]);
    }
    public function editAddress($id)
    {
        $alamat = Address::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if ($alamat) {
            $this->id_address = $alamat->id;
            $this->address = $alamat->address;
            $this->name_place = $alamat->name_place;
            $this->number_phone = $alamat->number_phone;
        }
    }
    public function updateAddress()
    {
        $alamat = Address::where('id', $this->id_address)->where('user_id', Auth::user()->id)->first();
        $alamat->name_place = $this->name_place;
        $alamat->address = $this->address;
        $alamat->number_phone = $this->number_phone;
        $alamat->update();
        $this->dispatchBrowserEvent('close-model');
    }

    public function deleteAddress($id)
    {
        $alamat = Address::where('id', $id)->where('user_id', Auth::user()->id)->first();
        $alamat->delete();
    }

    public function addAddress()
    {
        $this->validate([
            'name_place' => 'required',
            'address' => 'required',
            'number_phone' => 'required|min:11',
        ]);
        $addAddress = new Address();
        $addAddress->user_id = Auth::user()->id;
        $addAddress->name_place = $this->name_place;
        $addAddress->address = $this->address;
        $addAddress->number_phone = $this->number_phone;
        $addAddress->active = 0;
        $addAddress->save();
        $this->resetAddress();
        $this->dispatchBrowserEvent('close-modal');
    }


    public function resetAddress()
    {
        $this->address = '';
        $this->name_place = '';
        $this->number_phone = '';
    }

    public function render()
    {
        $alamat = Address::where('user_id', Auth::user()->id)->get();
        return view('livewire.frontend.user.alamat', [
            'alamat' => $alamat
        ]);
    }
}
