<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowSection extends Component
{

    public $show_detail = false;
    public $show_job = false;
    public $show_password = false;

    public function render()
    {
        return view('livewire.show-section');
    }

    public function cardDetail()
    {
        $this->show_detail = true;
        $this->show_job = false;
        $this->show_password = false;
    }

    public function cardJob()
    {
        $this->show_detail = false;
        $this->show_job = true;
        $this->show_password = false;
    }

    public function cardPassword()
    {
        $this->show_detail = false;
        $this->show_job = false;
        $this->show_password = true;
    }
}
