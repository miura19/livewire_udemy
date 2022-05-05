<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;
    //初期値は１、関数の引数が渡ってきたらそれが$numに入って足される
    public function incriment(int $num = 1)
    {
        if ($this->counter < 100)
        {
            $this->counter+= $num;
        } else {
            $this->counter = 1;
        }
    }
    // public function incriment10()
    // {
    //     if ($this->counter < 100)
    //     {
    //         $this->counter = $this->counter + 10;
    //     } else {
    //         $this->counter = 1;
    //     }
    // }
    // public function incriment_reset()
    // {
    //     $this->counter = 0;
    // }
    public function render()
    {
        return view('livewire.counter');
    }
}
