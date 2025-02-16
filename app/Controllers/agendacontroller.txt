<?php

namespace App\Controllers;

use App\Models\AgendaModel;

class AgendaController extends BaseController
{
    public function index(): mixed
    {
        try {
            $model = new AgendaModel();
    
            // Ambil kata kunci pencarian dari input form
            $search = $this->request->getGet('search');
    
            if ($search) {
                // Jika ada kata kunci pencarian, lakukan pencarian berdasarkan judul atau nomor
                $data['agendas'] = $model->like('judul', $search)
                                          ->orLike('nomor', $search)
                                          ->findAll();
            } else {
                // Jika tidak ada kata kunci, tampilkan semua data
                $data['agendas'] = $model->findAll();
            }
    
            // Tambahkan pemeriksaan untuk data kosong
            if (empty($data['agendas'])) {
                $data['message'] = 'Tidak ada ';
            }
    
            return view('agenda', $data); // Tetap render halaman meskipun tidak ada data
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
    
            // Tetap kembalikan ke halaman view dengan pesan error daripada melakukan redirect
            return view('agenda', ['error' => 'Terjadi kesalahan saat mengambil data.']);
        }
    }
    
    
    
    public function tambah()
{
    // Validasi input
    $validation = \Config\Services::validation();
    $data = [
        'nomor' => $this->request->getPost('nomor'),
        'sifat' => $this->request->getPost('sifat'),
        'lampiran_surat' => $this->request->getPost('lampiran_surat'),
        'judul' => $this->request->getPost('judul'),
        'tanggal' => $this->request->getPost('tanggal'),
        'tempat' => $this->request->getPost('tempat'),
        'lampiran' => $this->request->getFile('lampiran'),
        'catatan' => $this->request->getPost('catatan'),
        'status' => 'Terjadwal',
    ];

    // Perubahan validasi, file tidak harus di-upload
    if ($this->validate([
        'nomor' => 'required',
        'sifat' => 'required',
        'judul' => 'required',
        'tanggal' => 'required',
        'tempat' => 'required',
        'lampiran' => 'max_size[lampiran,2048]|ext_in[lampiran,pdf]', 
        'catatan' => 'required',
    ])) {
        // Proses upload file lampiran
        if ($data['lampiran']->isValid() && !$data['lampiran']->hasMoved()) {
            $fileNameLampiran = $data['lampiran']->getRandomName();
            $data['lampiran']->move('uploads', $fileNameLampiran);
            $data['lampiran'] = $fileNameLampiran;
        } else {
            $data['lampiran'] = null; // Tidak ada file lampiran
        }


        // Simpan data ke database
        $model = new AgendaModel();
        $model->save($data);

        return redirect()->to('/agenda')->with('success', 'Data berhasil ditambahkan');
    } else {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }
}


    public function update($id)
    {
        $model = new AgendaModel();
        $existingAgenda = $model->find($id);

        if (!$existingAgenda) {
            return redirect()->to('/agenda')->with('error', 'Data tidak ditemukan');
        }

        $data = [
            'nomor' => $this->request->getPost('nomor'),
            'sifat' => $this->request->getPost('sifat'),
            'lampiran_surat' => $this->request->getPost('lampiran_surat'),
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'tempat' => $this->request->getPost('tempat'),
            'catatan' => $this->request->getPost('catatan'),
        ];

        $lampiran = $this->request->getFile('lampiran');

        // Proses lampiran
        if ($lampiran && $lampiran->isValid() && !$lampiran->hasMoved()) {
            $fileNameLampiran = $lampiran->getRandomName();
            $lampiran->move('uploads', $fileNameLampiran);
            $data['lampiran'] = $fileNameLampiran;
        } else {
            $data['lampiran'] = $existingAgenda['lampiran'];
        }

        if ($this->validate([
            'nomor' => 'required',
            'sifat' => 'required',
            'lampiran_surat' => 'required',
            'judul' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'catatan' => 'required',
        ])) {
            $model->update($id, $data);
            return redirect()->to('/agenda')->with('success', 'Data berhasil diperbarui');
        } else {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    }

    public function updateStatus($id)
    {
        $model = new AgendaModel();
        $existingAgenda = $model->find($id);

        if (!$existingAgenda) {
            return redirect()->to('/agenda')->with('error', 'Data tidak ditemukan');
        }

        $data = [
            'jumlah_peserta' => $this->request->getPost('jumlah_peserta'),
            'status' => 'Selesai',
        ];
        $absensi = $this->request->getFile('absensi');
        $notulen = $this->request->getFile('notulen');

        // Proses absensi
        if ($absensi && $absensi->isValid() && !$absensi->hasMoved()) {
            $fileNameAbsensi = $absensi->getRandomName();
            $absensi->move('uploads', $fileNameAbsensi);
            $data['absensi'] = $fileNameAbsensi;
        } else {
            $data['absensi'] = $existingAgenda['absensi'];
        }

        // Proses notulen
        if ($notulen && $notulen->isValid() && !$notulen->hasMoved()) {
            $fileNameNotulen = $notulen->getRandomName();
            $notulen->move('uploads', $fileNameNotulen);
            $data['notulen'] = $fileNameNotulen;
        } else {
            $data['notulen'] = $existingAgenda['notulen'];
        }

        if ($this->validate([
            'jumlah_peserta' => 'required|numeric',
        ])) {
            $model->update($id, $data);
            return redirect()->to('/agenda')->with('success', 'Data berhasil diperbarui');
        } else {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    }

    

public function delete($id)
{
    $model = new AgendaModel();
    
    // Cek apakah agenda ada
    $existingAgenda = $model->find($id);
    if (!$existingAgenda) {
        return redirect()->to('/agenda')->with('error', 'Data tidak ditemukan');
    }

    // Hapus file lampiran jika ada
    if (!empty($existingAgenda['lampiran']) && file_exists('uploads/' . $existingAgenda['lampiran'])) {
        unlink('uploads/' . $existingAgenda['lampiran']); // Hapus file lampiran dari folder uploads
    }

    // Hapus data agenda dari database
    $model->delete($id);

    return redirect()->to('/agenda')->with('success', 'Data berhasil dihapus');
}

    public function getAgendaDetail()
{
    $agendaId = $this->request->getPost('id');  // Ambil ID dari request

    $agendaModel = new AgendaModel();
    $agenda = $agendaModel->find($agendaId);  // Ambil detail agenda berdasarkan ID

    if ($agenda) {
        // Render tampilan detail agenda
        return view('partials/agenda_detail', ['agenda' => $agenda]);
    } else {
        return "Agenda tidak ditemukan";
    }
}

}