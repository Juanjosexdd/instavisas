<?php

namespace App\Http\Livewire\Tramites;

use App\Models\Tramite;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTramite extends Component
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
            $tramites = Tramite::where('name', 'like', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate(10);
                return view('livewire.tramites.show-tramite', compact('tramites'));

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
