<?php

namespace App\Livewire\Partials;

use App\Livewire\Actions\Logout;
use Livewire\Component;

class Sidebar extends Component
{

    public function logout(Logout $logout){
        $logout();
        $this->redirect(route('login'),navigate:true);
    }
    public function render()
    {
        return view('livewire.partials.sidebar');
    }
}