<?php

namespace App\Http\Livewire\Lipsticks;

use Livewire\Component;
use App\Models\Lipstick;

class Create extends Component
{
    public $brand_name, $type, $price, $shades;

    public function addLipstick() {
        $this->validate([
            'brand_name'             =>          ['required', 'string', 'max:255'],
            'type'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'shades'                =>          ['required', 'string', 'max:255'],
        ]);

        Lipstick::create([
            'brand_name'             =>      $this->brand_name,
            'type'            =>      $this->type,
            'price'                =>      $this->price,
            'shades'                =>      $this->shades,
        ]);

        return redirect('/lipstick')->with('lipstick', 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.lipsticks.create');
    }
}
