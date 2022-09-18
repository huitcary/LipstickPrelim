<?php

namespace App\Http\Livewire\Lipsticks;
use App\Models\Lipstick;
use Livewire\Component;

class Edit extends Component
{

    public $lipstickId;
    public $brand_name, $type, $price, $shades;
    public function mount() {
        $this->brand_name = $this->lipstick->brand_name;
        $this->type = $this->lipstick->type;
        $this->price = $this->lipstick->price;
        $this->shades = $this->lipstick->shades;

    }

    public function editLipstick() {
        $this->validate([
            'brand_name'             =>          ['required', 'string', 'max:255'],
            'type'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'shades'                =>          ['required', 'string', 'max:255'],
        ]);

        $this->lipstick->update([
            'brand_name'             =>      $this->brand_name,
            'type'            =>      $this->type,
            'price'                =>      $this->price,
            'shades'                =>      $this->shades,
        ]);

        return redirect('/lipstick')->with('lipstick', 'Updated Successfully');
    }

    public function back() {
        return redirect('/lipstick');
    }
    public function getLipstickProperty() {
        return Lipstick::find($this->lipstickId);
    }

    public function render()
    {
        return view('livewire.lipsticks.edit');
    }
}
