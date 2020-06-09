<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 30;

    public function off()
    {
        $this->brightness= 0;
    }
    public function on()
    {
        $this->brightness= 100;
    }

    public function decrement()
    {
        if($this->brightness >= 10){
            $this->brightness-=10;
        }
    }

    public function decrement2()
    {
        $this->brightness=max(0, $this->brightness-10);
    }

    public function increment()
    {
        if($this->brightness <= 90){
            $this->brightness+=10;
        }
    }

    public function increment2()
    {
        $this->brightness = min(100, $this->brightness+10);
    }
    public function render()
    {
        return view('livewire.light');
    }
}
