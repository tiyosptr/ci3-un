<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class UploadController extends Controller
{
    public function process()
    {
        // Dapatkan instance dari request
        $request = \Config\Services::request();

        // Ambil agenda_id dari form
        $agenda_id = $this->request->getPost('agenda_id');

        // Validasi file upload
        $validationRule = [
            'notulenFile' => [
                'label' => 'Notulen',
                'rules' => 'uploaded[notulenFile]|max_size[notulenFile,2048]|ext_in[notulenFile,pdf]',
            ],
            'absensiFile' => [
                'label' => 'Absensi',
                'rules' => 'uploaded[absensiFile]|max_size[absensiFile,2048]|ext_in[absensiFile,pdf]',
            ],
        ];

        if (!$this->validate($validationRule)) {
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }

        // Jika validasi sukses, proses upload
        $notulenFile = $this->request->getFile('notulenFile');
        $absensiFile = $this->request->getFile('absensiFile');

        // Simpan file di folder uploads
        if ($notulenFile->isValid() && !$notulenFile->hasMoved()) {
            $notulenFile->move(WRITEPATH . 'uploads');
        }

        if ($absensiFile->isValid() && !$absensiFile->hasMoved()) {
            $absensiFile->move(WRITEPATH . 'uploads');
        }

        // Simpan informasi file ke database, termasuk agenda_id
        $data = [
            'agenda_id' => $agenda_id,
            'notulen_path' => $notulenFile->getName(),
            'absensi_path' => $absensiFile->getName(),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $db = \Config\Database::connect();
        $db->table('files')->insert($data);

        // Beri notifikasi bahwa file berhasil diunggah
        return redirect()->back()->with('message', 'Files successfully uploaded and saved with agenda ID!');
    }
}
