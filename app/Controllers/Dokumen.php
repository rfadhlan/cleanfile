<?php

namespace App\Controllers;

use App\Models\DokumenModel;
use CodeIgniter\CodeIgniter;

class Dokumen extends BaseController
{
  protected $dokumenModel;

  public function __construct()
  {
    $this->dokumenModel = new DokumenModel();
    helper('form');
  }

  // Tampil data
  public function index()
  {
    $keywoard = $this->request->getVar('keyword');
    if ($keywoard) {
      $dokumen = $this->dokumenModel->search($keywoard);
    } else {
      $dokumen = $this->dokumenModel;
    }

    $data = [
      "dokumen" => $dokumen->getDokumen(),
    ];

    return view('dokumen/index', $data);
  }

  // Tambah data
  public function save()
  {
    // // Validasi Input
    if (!$this->validate([
      'berkas' => [
        'rules' => 'uploaded[berkas]|max_size[berkas,5048]|ext_in[berkas,pdf,docs,doc,xlsx,ppt,pptx]',
        'errors' => [
          'uploaded' => 'Dokumen harus di upload.',
          'max_size' => 'Ukuran file maksimal 5 MB',
          'ext_in' => 'File harus berektensi pdf, docs, xlsx, ppt'
        ]
      ]
    ])) {

      session()->setFlashdata('error', $this->validator->listErrors());
      return redirect()->back()->withInput();
    }

    $fileDokumen = $this->request->getFile('berkas');
    $namaDokumen = $fileDokumen->getName();
    $fileDokumen->move('berkas', $namaDokumen);

    $this->dokumenModel->save([
      "judul_dokumen" => $this->request->getVar('judul_dokumen'),
      "berkas" => $namaDokumen,
      "keterangan" => $this->request->getVar('keterangan')
    ]);


    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
    return redirect()->to('/dokumen');
  }

  // delete dokumen
  public function delete($id)
  {
    $this->dokumenModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus.');
    return redirect()->to('/dokumen');
  }

  //detail dokumen
  public function detail($id)
  {
    $data = [
      "dokumen" => $this->dokumenModel->getDokumen($id)
    ];

    return view('/dokumen/index', $data);
  }

  // // update dokumen 
  // public function update($id)
  // {
  //   $this->dokumenModel->update([
  //     "id" => $this->request->getVar('id'),
  //     "judul_dokumen" => $this->request->getVar('judul_dokumen'),
  //     "keterangan" => $this->request->getVar('keterangan')
  //   ]);

  //   session()->setFlashdata('pesan', 'Berhasil diubah.');

  //   return redirect()->to('/dokumen');
  // }


  // download data
  function download($id)
  {
    $file = new DokumenModel();
    $data = $file->find($id);
    return $this->response->download('berkas/' . $data->berkas, null);
  }

  public function logout()
  {
    return view('/login');
  }
}
