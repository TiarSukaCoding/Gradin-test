<?php

namespace App\Http\Livewire;

use App\Models\Kurir;
use Livewire\Component;

class UpdateKurir extends Component
{
    public $nama,$j_layanan_id,$jenis_id,$barang_id,$customer_id,$alamat,$kurirId;

    protected $listeners = [
        'getKurir' => 'showKurir',
    ];

    public function render()
    {
        return view('livewire.update-kurir');
    }

    public function showKurir($kurir)
    {
        $this->nama = $kurir['nama'];
        $this->j_layanan_id = $kurir['j_layanan_id'];
        $this->jenis_id = $kurir['jenis_id'];
        $this->barang_id = $kurir['barang_id'];
        $this->customer_id = $kurir['customer_id'];
        $this->alamat = $kurir['alamat'];
        $this->kurirId = $kurir['id'];
    }

    public function update()
    {
        dd($this->kurirId);
        $this->validate([
            'nama' => 'required',
            'j_layanan_id' => 'required|numeric',
            'jenis_id' => 'required|numeric',
            'barang_id' => 'required|numeric',
            'customer_id' => 'required|numeric',
            'alamat' => 'required',
        ]);

        switch ($this->jenis_id) {
            case 1:
                $tanggal = date('Y-m-d', strtotime('+3 day'));
                break;
            case 2:
                $tanggal = date('Y-m-d', strtotime('+5 day'));
                break;
            case 3:
                $tanggal = date('Y-m-d', strtotime('+1 day'));
                break;

            default:
                $tanggal = date('Y-m-d');
                break;
        }

        if($this->kurirId){
            $kurir = Kurir::findOrFail($this->kurirId);
            $kurir->update([
                'nama' => $this->nama,
                'j_layanan_id' => $this->j_layanan_id,
                'jenis_id' => $this->jenis_id,
                'barang_id' => $this->barang_id,
                'customer_id' => $this->customer_id,
                'alamat' => $this->alamat,
                'estimasi' => $tanggal,
            ]);

            $this->resetInput();

            $this->emit('kurirUpdated',$kurir);
        }
    }

    private function resetInput()
    {
        $this->nama = null;
        $this->j_layanan_id = null;
        $this->jenis_id = null;
        $this->barang_id = null;
        $this->customer_id = null;
        $this->alamat = null;
    }
}
