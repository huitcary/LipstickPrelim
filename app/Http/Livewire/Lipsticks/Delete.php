<?php

namespace App\Http\Livewire\Lipsticks;

use Livewire\Component;
use App\Models\Lipstick;
class Delete extends Component
{

    public $lipstickId;
    public function getLipstickProperty() {
        return Lipstick::select('id', 'brand_name', 'type', 'price', 'shades')
            ->find($this->lipstickId);
    }

    public function delete() {
        $this->lipstick->delete();

        return redirect('/lipstick')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/lipstick');
    }
    public function render()
    {
        return view('livewire.lipsticks.delete');
    }
}
