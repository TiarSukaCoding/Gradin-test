<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kurir;

class IndexKurir extends Component
{
    public $kurir;

    protected $listeners = [
        'kurirStored' => 'handleStored',
        'kurirUpdated' => 'handleUpdated'
    ];

    public function render()
    {
        $this->kurir = Kurir::all();
        return view('livewire.index-kurir');
    }

    public function getKurir($id)
    {
        $this->statusUpdate = true;
        $kurir = Kurir::findOrFail($id);
        $this->emit('getKurir', $kurir);
    }

    public function destroy($id){
        if ($id){
            $data = Kurir::findOrFail($id);
            $data->delete();
            session()->flash('message', 'kurir berhasil di hapus');
        }
    }

    public function handleStored($kurir)
    {
        # membuat data kurir
        session()->flash('message', 'Kurir '.$kurir['nama'].' berhasil di buat');
    }

    public function handleUpdated($kurir)
    {
        # mengupdate data kurir
        session()->flash('message', 'Kurir'.$kurir['nama'].' berhasil di update');
    }
}
