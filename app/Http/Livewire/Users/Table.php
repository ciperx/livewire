<?php

namespace App\Http\Livewire\Users;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    public $updatesQueryString =['page'];
    public $query ='';
    public $perPage = 10;

    public function render()
    {
        $users = User::where('name', 'like', "%$this->query%")
                ->orwhere('username', 'like', "%$this->query%")
                ->orwhere('email', 'like', "%$this->query%")
                ->orwhere('occupation', 'like', "%$this->query%")
                ->latest()
                ->paginate($this->perPage);
        // Versi 1
        // if ($this->page > $users->lastPage()) {
        //     $this->page = $users->lastPage();
        // } else {
        //     $this->page = true;
        // }

        // Versi Alternatif
        $this->page > $users->lastPage() ? $this->page = $users->lastPage() : true;

        return view('livewire.users.table', compact('users'));
    }
}
