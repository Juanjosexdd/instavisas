<?php

namespace App\Http\Livewire\Clientes;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cliente;

class ShowCliente extends Component
{
        protected $paginationTheme = "bootstrap";
        use WithPagination;
        public $search;
        public $sort = 'id';
        public $direction = 'desc';
    
        public function updatingSearch()
        {
            $this->resetPage();
        }
    
        public function render()
        {
            $clientes = Cliente::where('name', 'like', '%' . $this->search . '%')
                ->where('last_name', 'like', '%' . $this->search . '%')
                ->where('identification', 'like', '%' . $this->search . '%')
                ->where('email', 'like', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate(10);
                return view('livewire.clientes.show-cliente', compact('clientes'));

        }
    
        public function order($sort)
        {
            if ($this->sort == $sort) {
                if ($this->direction == 'desc') {
                    $this->direction = 'asc';
                } else {
                    $this->direction = 'desc';
                }
            } else {
                $this->sort = $sort;
                $this->direction = 'asc';
            }
    
            $this->sort = $sort;
        }
}
