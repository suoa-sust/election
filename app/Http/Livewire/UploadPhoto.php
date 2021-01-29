<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadPhoto extends Component
{
    use WithFileUploads;

    public $photo;

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image',
        ]);
    }

    public function save()
    {
        $this->photo->store(public_path('images/gallery/'));
    }
    public function render()
    {
        return view('livewire.upload-photo');
    }
}
