<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenModel extends Model
{
  protected $table = 'dokumen';
  protected $primaryKey = 'id';
  protected $allowedFields = ['judul_dokumen', 'berkas', 'keterangan'];
  protected $dataFormat = 'datetime';
  protected $useAutoIncrement = true;

  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';

  public function getDokumen($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }

  public function search($keyword)
  {
    return $this->table('dokumen')->like('judul_dokumen', $keyword);
  }
}
