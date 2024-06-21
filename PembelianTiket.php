 <?php

namespace App\Controllers;

use App\Models\PembelianTiketModel;
use CodeIgniter\Controller;

class PembelianTiket extends Controller
{
    public function index()
    {
        $model = new PembelianTiketModel();
        $data['pembelian_tiket'] = $model->findAll();
        return view('pembelian_tiket/index', $data);
    }

    public function create()
    {
        return view('pembelian_tiket/create');
    }

    public function store()
    {
        $model = new PembelianTiketModel();
        $data = [
            'nama_penumpang' => $this->request->getPost('nama_penumpang'),
            'tujuan' => $this->request->getPost('tujuan'),
            'tanggal_berangkat' => $this->request->getPost('tanggal_berangkat'),
            'jumlah_tiket' => $this->request->getPost('jumlah_tiket')
        ];
        $model->save($data);
        return redirect()->to('/pembelian-tiket');
    }

    public function edit($id)
    {
        $model = new PembelianTiketModel();
        $data['pembelian_tiket'] = $model->find($id);
        return view('pembelian_tiket/edit', $data);
    }

    public function update($id)
    {
        $model = new PembelianTiketModel();
        $data = [
            'nama_penumpang' => $this->request->getPost('nama_penumpang'),
            'tujuan' => $this->request->getPost('tujuan'),
            'tanggal_berangkat' => $this->request->getPost('tanggal_berangkat'),
            'jumlah_tiket' => $this->request->getPost('jumlah_tiket')
        ];
        $model->update($id, $data);
        return redirect()->to('/pembelian-tiket');
    }

    public function delete($id)
    {
        $model = new PembelianTiketModel();
        $model->delete($id);
        return redirect()->to('/pembelian-tiket');
    }
}
