<?php

namespace App\Http\Livewire\Lipsticks;

use Livewire\Component;
use App\Models\Lipstick;

class Index extends Component
{

    public function loadLipsticks() {
        $lipsticks = Lipstick::orderBy('brand_name')->get();

        return compact('lipsticks');
    }

    public function render()
    {
        return view('livewire.lipsticks.index', $this->loadLipsticks());
    }
}
