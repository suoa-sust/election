<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadPhoto extends Component
{
    use WithFileUploads;

    public $photo;
    public $caption;
    public $tag;


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'caption' => 'required',
            'tag' => 'required',
            'photo' => 'image',
        ]);
    }


    public function save()
    {
        $validatedData = $this->validate([
            'caption' => 'required',
            'tag' => 'required',
            'photo' => 'image',
        ]);

        $path = $this->photo->store('/', 'gallery_files');
        $dir = 'images/gallery/';

        if($path) {
            Gallery::create([
                'caption' => $validatedData['caption'],
                'tag' => $validatedData['tag'],
                'url' => $dir.$path,
                'status' => true
            ]);
            session()->flash('message', 'Photo successfully Added.');
            return redirect()->route('gallery.create');
        }
        session()->flash('message', 'Failed to add in Gallery');
        return redirect()->route('gallery.create');

    }

    public function render()
    {
        return view('livewire.upload-photo');
    }


}
