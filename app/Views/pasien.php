<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

    <!-- Main Content -->
    <div class="main-content flex-grow-1">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold">Data Pasien</h4>
        <div class="text-end">
          <span class="fw-semibold d-block">Dr. Admin</span>
          <small class="text-muted d-block">Administrator</small>
          <a href="<?= base_url('logout'); ?>" class="btn btn-outline-danger btn-sm mt-2">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
        </div>
      </div>

      <!-- Tombol tambah pasien -->
      <div class="d-flex justify-content-between align-items-center mb-3">
        <form method="get" action="<?= base_url('pasien'); ?>" class="search-box flex-grow-1 me-3">
          <input type="text" name="q" class="form-control" placeholder="Cari pasien (nama, no. rekam medis, atau telepon)…" value="<?= esc($_GET['q'] ?? '') ?>">
        </form>
        <a href="<?= base_url('pasien/create'); ?>" class="btn btn-tambah"><i class="bi bi-plus-lg me-2"></i>Tambah Pasien</a>
      </div>

      <!-- Daftar Pasien -->
<?php if (!empty($pasien) && is_array($pasien)): ?>
      <div class="row">
        <?php foreach ($pasien as $p): ?>
        <div class="col-12 mb-3">
          <div class="card card-pasien p-4">
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <h5 class="fw-semibold mb-1">
                  <?= esc($p['nama'] ?? '—') ?>
                  <?php if (!empty($p['no_rm'])): ?>
                    <span class="badge badge-rm"><?= esc($p['no_rm']) ?></span>
                  <?php else: ?>
                    <span class="badge badge-rm text-muted">—</span>
                  <?php endif; ?>
                </h5>
                    <span class="fw-semibold">
                      <?php if (!empty($p['usia'])): ?>
                        <?= esc($p['usia']) ?> tahun
                      <?php else: ?>
                        —
                      <?php endif; ?>
                    </span>
                  <div class="col-md-3">
                    <small class="text-muted d-block">Jenis Kelamin</small>
                    <span class="fw-semibold"><?= esc($p['jenis_kelamin'] ?? '—') ?></span>
                  </div>
                  <div class="col-md-2">
                    <small class="text-muted d-block">Usia</small>
                    <span class="fw-semibold"><?= esc($p['usia'] ?? '—') ?> tahun</span>
                  </div>
                  <div class="col-md-2">
                    <small class="text-muted d-block">Golongan Darah</small>
                    <span class="fw-semibold"><?= esc($p['gol_darah'] ?? '—') ?></span>
                  </div>
                  <div class="col-md-3">
                    <small class="text-muted d-block">Telepon</small>
                    <span class="fw-semibold"><?= esc($p['telepon'] ?? '—') ?></span>
                  </div>
                </div>

              <div class="mt-2">
                <small class="text-muted">Alergi:</small><br>
                <?php if (!empty($p['alergi'])): ?>
                  <?php foreach ((array)$p['alergi'] as $a): ?>
                    <span class="badge badge-alergi"><?= esc($a) ?></span>
                  <?php endforeach; ?>
                <?php else: ?>
                  <span class="text-muted">Tidak ada</span>
                <?php endif; ?>
              </div>
              </div>
              <a href="<?= base_url('pasien/' . (urlencode($p['id'] ?? ''))) ?>" class="btn btn-outline-secondary btn-sm"><i class="bi bi-eye"></i> Detail</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
<?php else: ?>
      <div class="card p-4">
        <p class="mb-0 text-muted">Tidak ada data pasien.</p>
      </div>
<?php endif; ?>

    </div>
  </div>

<?= $this->endSection(); ?>

