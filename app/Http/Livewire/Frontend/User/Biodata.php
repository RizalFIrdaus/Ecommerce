<?php

namespace App\Http\Livewire\Frontend\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;


class Biodata extends Component
{
    use WithFileUploads;
    public $name, $birthday, $place_birth, $gender, $email, $handphone, $avatar, $password;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'min:5',
            'birthday' => 'max:100|string',
            'gender' => 'required',
            'email' => 'email|required',
            'handphone' => 'required',
            'avatar' => 'required',
            'password' => 'required|min:6',

        ]);
    }
    protected $listeners = [
        'nameUpdated' => 'render',
        'birthdayUpdated' => 'render',
        'genderUpdated' => 'render',
        'emailUpdated' => 'render',
        'imageUpdated' => 'render',
        'passwordUpdate' => 'render',

    ];
    public function updatePassword()
    {
        $this->validate([
            'password' => 'required|min:6',
        ]);
        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($this->password);
        $user->save();
        $this->emit('passwordUpdate');
        $this->password = '';
        $this->dispatchBrowserEvent('close-model');
    }
    public function updateImage()
    {
        $this->validate([
            'avatar' => 'required',
        ]);
        $filename = $this->avatar->store('avatars');
        $user = User::find(Auth::user()->id);

        $user->avatar =  'image/uploads/' . $filename;
        $user->save();
        $this->emit('imageUpdated');
        $this->avatar = null;
    }
    public function updateName()
    {

        $user = User::find(Auth::user()->id);
        $this->validate([
            'name' => 'required|min:5',
        ]);
        $user->name = $this->name;
        $user->save();
        $this->emit('nameUpdated');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInputName();
        session()->flash('sucess', 'Name successfully updated');
    }
    public function resetInputName()
    {
        $this->name = '';
    }

    public function updateBirthday()
    {
        $this->validate([
            'birthday' => 'nullable|date',
            'place_birth' => 'nullable|string',
        ]);

        $user = User::find(Auth::user()->id);
        if ($this->place_birth) {
            $user->place_birth = $this->place_birth;
        }
        if ($this->birthday) {
            $user->birthday = $this->birthday;
        }
        $user->save();
        $this->emit('birthdayUpdated');
        $this->dispatchBrowserEvent('close-model');
        $this->resetInputBirthday();
        session()->flash('sucess', 'Name successfully updated');
    }
    public function resetInputBirthday()
    {
        $this->birthday = '';
        $this->place_birth = '';
    }
    public function updateGender()
    {
        $this->validate([
            'gender' => 'required',
        ]);
        $user = User::find(Auth::user()->id);
        $user->gender = $this->gender;
        $user->save();
        $this->emit('genderUpdated');
        $this->dispatchBrowserEvent('close-model');
        $this->resetInputGender();
    }
    public function resetInputGender()
    {
        $this->gender = '';
    }
    public function updateEmail()
    {
        $this->validate([
            'email' => 'required|email',
        ]);
        $user = User::find(Auth::user()->id);
        $user->email = $this->email;
        $user->save();
        $this->emit('emailUpdated');
        $this->dispatchBrowserEvent('close-model');
        $this->resetInputEmail();
    }
    public function resetInputEmail()
    {
        $this->email = '';
    }
    public function render()
    {

        return view('livewire.frontend.user.biodata');
    }
}
