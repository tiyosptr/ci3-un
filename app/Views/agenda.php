
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Agenda &mdash; WEB AGENDA</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template-stisla/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template-stisla/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?=base_url()?>/template-stisla/assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?=base_url()?>/template-stisla/assets/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?=base_url()?>/template-stisla/assets/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?=base_url()?>/template-stisla/assets/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="<?=base_url()?>/template-stisla/assets/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?=base_url()?>/template-stisla/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?= session()->get('username') ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in <?= session()->get('last_login') ? date('d M Y, H:i', strtotime(session()->get('last_login'))) : 'First time login' ?></div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('/logout') ?>" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">WEB AGENDA</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AGENDA</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <li><a class="nav-link" href="dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
              </li>
              <li class="menu-header">PAGES</li>
              <li class="active"><a class="nav-link" href="agenda"><i class="far fa-square"></i> <span>Agenda Direktur</span></a></li>
             
            </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Agenda Direktur</h1>
          </div>
          <div class="section-body">
          <?php if(session()->getFlashdata('success')): ?>
              <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
              </div>
          <?php endif; ?>

          <?php if(session()->getFlashdata('errors')): ?>
              <div class="alert alert-danger">
                  <?= implode('<br>', session()->getFlashdata('errors')) ?>
              </div>
          <?php endif; ?>
          </div>
        </section>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <!-- Form input search dan tulisan Advanced Table dalam satu baris -->
                  <div class="d-flex align-items-center">
                    <h4 class="mb-0 mr-3">Data Agenda Direktur</h4> <!-- Judul Advanced Table -->
                    <div class="card-header-form">
                        <form method="get" action="<?= base_url('/agenda') ?>">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Cari Data" value="<?= esc($search ?? '') ?>">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown d-inline">
                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilih Status
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Selesai</a>
                        <a class="dropdown-item" href="#">Terjadwal</a>
                        <a class="dropdown-item" href="#">Semua</a>
                      </div>
                    </div>
                  </div>

                  <!-- Tombol Tambah Data tetap di sebelah kanan -->
                  <button class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Data</button>
                </div>

                <div class="card-body p-0">
                  <div class="table-responsive">
                  <?php if (isset($message)): ?>
                      <div class="alert alert-info"><?= esc($message) ?></div>
                  <?php else: ?>
                    <?php if (isset($agendas) && !empty($agendas)) : ?>
                    <table class="table table-striped">
                      <tr>
                        <th>No</th>
                        <th>Judul Kegiatan</th>
                        <th>Lampiran</th>
                        <th>Status</th>
                        <th>Waktu</th>
                        <th>Tempat Agenda</th>
                        <th>Aksi</th>
                      </tr>
                      <?php foreach ($agendas as $index => $agenda): ?>
                      <tr>
                        <td class="p-0 text-center"><?= $index + 1 ?></td>
                        <td><?= $agenda['judul'] ?></td>
                        <td>
                          <?php if ($agenda['lampiran']): ?>
                           <a href="<?= base_url('uploads/' . $agenda['lampiran']) ?>" target="_blank">Lihat Lampiran</a>
                            <?php else: ?>
                              Tidak ada lampiran
                            <?php endif; ?>
                          </td>
                          <td>
                            <?php if ($agenda['status'] == 'Terjadwal'): ?>
                              <div class="badge badge-primary"><?= $agenda['status'] ?></div> 
                            <?php elseif ($agenda['status'] == 'Selesai'): ?>
                              <div class="badge badge-success"><?= $agenda['status'] ?></div> 
                            <?php endif; ?>
                          </td>
                        <td><?= $agenda['tanggal'] ?></td>
                        <td><?= $agenda['tempat'] ?></td>
                        <td  class="d-flex justify-content-between align-items-center">
                          <?php if ($agenda['status'] != 'Selesai'): ?>
                          <a href="#" class="btn btn-icon btn-dark mr-1" data-toggle="modal" data-target="#update_statusModal"><i class="far fa-file"></i></a>
                          <?php endif; ?>
                          <a href="#" class="btn btn-icon btn-info mr-1" data-toggle="modal" data-target="#detailModal" data-agenda-id="<?= $agenda['id'] ?>"><i class="fas fa-info-circle"></i></a>
                          <?php if ($agenda['status'] != 'Selesai'): ?>
                          <a href="#" class="btn btn-icon btn-primary mr-1"  data-toggle="modal" data-target="#editModal"><i class="far fa-edit"></i></a>
                          <button class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?= $agenda['id']; ?>"><i class="fas fa-times"></i></button>
                          <?php endif; ?>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </table>
                    <?php else : ?>
                        <p>Data tidak ditemukan</p>
                    <?php endif; ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <footer class="main-footer">
      </footer>
    </div>
  </div>

    <!-- Update Status Modal -->
    <div class="modal fade" id="update_statusModal" tabindex="-1" role="dialog" aria-labelledby="update_statusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="update_statusModalLabel">Update Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Update Status form content -->
          <?php if (!empty($agendas)): ?>
            <form action="/agenda/updateStatus/<?= $agenda['id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jumlah_peserta">Jumlah Peserta</label>
                        <input type="number" class="form-control" name="jumlah_peserta" placeholder="Isi Jumlah Peserta" required> 
                    </div>
                    <div class="form-group">
                        <label for="absensi">Absensi (PDF)</label>
                        <input type="file" class="form-control" name="absensi"  accept="application/pdf">
                    </div>
                    <div class="form-group">
                        <label for="notulen">Notulen Rapat (PDF)</label>
                        <input type="file" class="form-control" name="notulen"accept="application/pdf">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </div>
            </form>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Detail Modal -->
  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detailModalLabel">Detail Kegiatan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
    <!-- Detail content goes here -->
    <p>Informasi detail kegiatan...</p>
    <form>
        <div class="form-group">
            <label>Nomor Surat</label>
            <div type="text" class="form-control">
                <?= isset($agenda['nomor']) ? $agenda['nomor'] : 'Tidak ada agenda' ?>
            </div>
        </div>
        <div class="form-group">
            <label>Sifat Surat</label>
            <div type="text" class="form-control">
                <?= isset($agenda['sifat']) ? $agenda['sifat'] : 'Tidak ada agenda' ?>
            </div>
        </div>
        <div class="form-group">
            <label>Lampiran</label>
            <div type="text" class="form-control">
                <?= isset($agenda['lampiran_surat']) ? $agenda['lampiran_surat'] : 'Tidak ada agenda' ?>
            </div>
        </div>
        <div class="form-group">
          <label>Judul Kegiatan</label>
          <div type="text" class="form-control">
            <?= isset($agenda['judul']) ? $agenda['judul'] : 'Tidak ada agenda' ?>
          </div>
        </div>
        <div class="form-group">
          <label>Waktu</label>
          <div type="text" class="form-control">
            <?= isset($agenda['tanggal']) ? $agenda['tanggal'] : 'Tidak ada agenda' ?>
          </div>
        </div>
        <div class="form-group">
          <label>Tempat Agenda</label>
          <div type="text" class="form-control">
            <?= isset($agenda['tempat']) ? $agenda['tempat'] : 'Tidak ada agenda' ?>
          </div>
         </div>
             <div class="form-group">
                <label>Lampiran:</label>
                <?php if (isset($agenda['lampiran']) && $agenda['lampiran']): ?>
                    <a href="<?= base_url('uploads/' . $agenda['lampiran']) ?>" target="_blank">Lihat Lampiran</a>
                <?php else: ?>
                    Tidak ada lampiran
                <?php endif; ?>
              </div>
              <div class="form-group">
                <label>Absensi:</label>
                <?php if (isset($agenda['absensi']) && $agenda['absensi']): ?>
                    <a href="<?= base_url('uploads/' . $agenda['absensi']) ?>" target="_blank">Lihat Absensi</a>
                <?php else: ?>
                    Tidak ada lampiran
                <?php endif; ?>
              </div>
              <div class="form-group">
                <label>Notulen Rapat:</label>
                <?php if (isset($agenda['notulen']) && $agenda['notulen']): ?>
                    <a href="<?= base_url('uploads/' . $agenda['notulen']) ?>" target="_blank">Lihat Notulen Rapat</a>
                <?php else: ?>
                    Tidak ada lampiran
                <?php endif; ?>
              </div>
          <div class="form-group">
            <label>Catatan</label>
            <div type="text" class="form-control">
                <?= isset($agenda['catatan']) ? $agenda['catatan'] : 'Tidak ada agenda' ?>
          </div>
                </div>
          <div class="form-group">
            <label>Jumlah Peserta Hadir</label>
            <div type="text" class="form-control">
                <?= isset($agenda['jumlah_peserta']) ? $agenda['jumlah_peserta'] : 'Tidak ada agenda' ?> Orang
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
                </div>
    </form>
    </div>
      </div>
    </div>
  </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">  
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="editModalLabel">Edit Kegiatan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <!-- Edit form content -->
                  <?php if (!empty($agendas)): ?>
                    
                  <form action="<?= base_url('/agenda/update/' . $agenda['id']) ?>" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="editJudul">Nomor</label>
                          <input type="text" class="form-control" name="nomor" value="<?= $agenda['nomor'] ?>" required>
                      </div>
                      <div class="form-group">
                          <label for="editJudul">Sifat</label>
                          <input type="text" class="form-control" name="sifat" value="<?= $agenda['sifat'] ?>" required>
                      </div>
                      <div class="form-group">
                          <label for="editJudul">Lampiran</label>
                          <input type="text" class="form-control" name="lampiran_surat" value="<?= $agenda['lampiran_surat'] ?>" required>
                      </div>
                      <div class="form-group">
                          <label for="lampiran">Lampiran (PDF)</label>
                          <input type="file" class="form-control" name="lampiran" accept=".pdf">
                          <small>Biarkan kosong jika tidak ingin mengubah lampiran.</small>
                      </div>
                      <div class="form-group">
                          <label for="editJudul">Judul Kegiatan</label>
                          <input type="text" class="form-control" name="judul" value="<?= $agenda['judul'] ?>" required>
                      </div>
                      <div class="form-group">
                          <label for="editJudul">Waktu</label>
                          <input type="date" class="form-control" name="tanggal" value="<?= $agenda['tanggal'] ?>" required>
                      </div>
                      <div class="form-group">
                          <label for="editJudul">Tempat Agenda</label>
                          <input type="text" class="form-control" name="tempat" value="<?= $agenda['tempat'] ?>" required>
                      </div>
                      <div class="form-group">
                          <label for="editJudul">Catatan</label>
                          <input type="text" class="form-control" name="catatan" value="<?= $agenda['catatan'] ?>" required>
                      </div>
                      <!-- Tutup form di sini -->
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                  </form>
                  
                  <?php endif; ?>
              </div>
          </div>
      </div>
  </div>

  <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus kegiatan ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="" id="confirmDelete" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>

   <!-- Tambah Modal-->
   <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahModalLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Tambah form content -->
          <form action="<?= base_url('/agenda/tambah') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nomor">Nomor Surat</label>
                <input type="text" class="form-control" name="nomor" placeholder="isi Nomor Kegiatan" required>
            </div>
            <div class="form-group">
                <label for="sifat">Sifat Surat</label>
                <input type="text" class="form-control" name="sifat" placeholder="Sifat Kegiatan" required>
            </div>
            <div class="form-group">
                <label for="sifat">Lampiran</label>
                <input type="text" class="form-control" name="lampiran_surat" placeholder="Lampiran Surat">
            </div>
            <!-- <div class="form-group">
                <label for="absensi">absensi (PDF)</label>
                <input type="file" class="form-control" name="absensi" accept=".pdf">
            </div>
            <div class="form-group">
                <label for="notulen">notulen (PDF)</label>
                <input type="file" class="form-control" name="notulen" accept=".pdf">
            </div> -->
            <div class="form-group">
                <label for="judul">Judul Kegiatan</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul Kegiatan" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Waktu</label>
                <input type="date" class="form-control" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="tempat">Tempat Agenda</label>
                <input type="text" class="form-control" name="tempat" placeholder="Tempat Agenda Kegiatan" required>
            </div>
            <div class="form-group">
                <label for="lampiran">Lampiran (PDF)</label>
                <input type="file" class="form-control" name="lampiran" accept=".pdf">
            </div>
            <div class="form-group">
                <label for="sifat">Catatan</label>
                <input type="text" class="form-control" name="catatan" placeholder="Catatan" required>
            </div>
            <div class="modal-footer">
                <button type=" button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
        </form>
        </div>
      </div>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?=base_url()?>/template-stisla/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/template-stisla/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script>
    // Tangkap event show modal
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id'); 
        var modal = $(this);
        
        modal.find('#confirmDelete').attr('href', '/agenda/delete/' + id);
    });
</script>

<script>
  $('#detailModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var agendaId = button.data('agenda-id');
    var modal = $(this);
    $.ajax({
      url: '<?= base_url('agenda/getAgendaDetail') ?>', 
      type: 'POST',
      data: { id: agendaId }, 
      success: function (data) {
        modal.find('.modal-body').html(data);
      }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('.dropdown-item').on('click', function() {
      var selectedStatus = $(this).text(); 
      filterTable(selectedStatus); 
    });

    function filterTable(status) {
      $('table tr').show();
      $('table tr').filter(function() {
        var rowStatus = $(this).find('td:nth-child(4) .badge').text();
        return rowStatus !== status && rowStatus !== ''; 
      }).hide();
    }
  });
</script>

<script>
  $(document).ready(function() {
    $('.dropdown-item').on('click', function() {
      var selectedStatus = $(this).text();
      filterTable(selectedStatus); 
    });

    function filterTable(status) {
      // Tampilkan semua baris tabel
      $('table tr').show();

      if (status === 'Semua') {
        return;
      }

      $('table tr').filter(function() {
        var rowStatus = $(this).find('td:nth-child(4) .badge').text(); 
        return rowStatus !== status && rowStatus !== ''; 
      }).hide();
    }
  });
</script>

</body>
</html>
