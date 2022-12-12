<?php

namespace App\Http\Livewire\Frontend\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;




class UserSettings extends Component
{
    use WithFileUploads;
    public $name, $users, $birthday, $place_birth, $gender, $email, $handphone, $password, $avatar;
    protected $listeners = [
        'nameUpdated' => 'render',
        'birthdayUpdated' => 'render',
        'genderUpdated' => 'render',
        'emailUpdated' => 'render',
        'handphoneUpdate' => 'render',
        'passwordUpdate' => 'render',
        'imageUpdated' => 'render'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'min:5',
            'birthday' => 'max:100|string',
            'handphone' => 'required|max:13|min:12',
            'password' => 'required|min:6'
        ]);
    }
    public function updateName()
    {
        $this->validate([
            'name' => 'required|min:5',
        ]);
        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->save();
        $this->emit('nameUpdated');
        $this->resetInputName();
        session()->flash('sucess', 'Name successfully updated');
        $this->dispatchBrowserEvent('close-model');
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
        $this->resetInputBirthday();
        session()->flash('sucess', 'Name successfully updated');
        $this->dispatchBrowserEvent('close-model');
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
        $this->resetInputGender();
        $this->dispatchBrowserEvent('close-model');
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
        $this->resetInputEmail();
        $this->dispatchBrowserEvent('close-model');
    }
    public function updateHandphone()
    {
        $this->validate([
            'handphone' => 'required|max:13|min:12',
        ]);
        $user = User::find(Auth::user()->id);
        $user->handphone = $this->handphone;
        $user->save();
        $this->emit('handphoneUpdate');
        $this->resetInputHandphone();
        $this->dispatchBrowserEvent('close-model');
    }
    public function updatePassword()
    {
        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($this->password);
        $user->save();
        $this->emit('passwordUpdate');
        $this->resetInputPassword();
        $this->dispatchBrowserEvent('close-model');
    }
    public function updateImage()
    {
        // dd($this->avatar);
        $this->validate([
            'avatar' => 'required',
        ]);
        // dd($filename);
        // dd($this->avatar);
        $filename = $this->avatar->store('avatars');

        $user = User::find(Auth::user()->id);
        $user->avatar =  'image/uploads/' . $filename;
        $user->save();
        $this->resetInputimage();
        $this->emit('imageUpdated');
    }
    public function resetInputimage()
    {
        $this->avatar = null;
    }
    public function resetInputPassword()
    {
        $this->password = '';
    }
    public function resetInputEmail()
    {
        $this->email = '';
    }
    public function resetInputHandphone()
    {
        $this->handphone = '';
    }
    public function resetInputGender()
    {
        $this->gender = '';
    }
    public function resetInputName()
    {
        $this->name = '';
    }
    public function resetInputBirthday()
    {
        $this->birthday = '';
        $this->place_birth = '';
    }

    public function render()
    {
        return view('livewire.frontend.user.user-settings');
    }
}
