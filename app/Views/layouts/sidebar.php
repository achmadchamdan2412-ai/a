<div class="d-flex">
        <!-- Sidebar -->
<?php 
    $uri = service('uri');
?>

<div class="sidebar d-flex flex-column">
    <h5 class="px-3 mb-1"><i class="bi bi-file-medical"></i> EMR System</h5>
    <p class="text-muted small px-3">Rekam Medis Elektronik</p>

    <ul class="nav flex-column mt-3">

        <li class="nav-item">
            <a class="nav-link <?= ($uri->getSegment(1) == 'pasien') ? 'active' : '' ?>" 
               href="<?= base_url('pasien') ?>">
               <i class="bi bi-person-vcard me-2"></i> Pasien
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= ($uri->getSegment(1) == 'asuransi') ? 'active' : '' ?>" 
               href="<?= base_url('asuransi') ?>">
               <i class="bi bi-calendar-check me-2"></i> Asuransi
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= ($uri->getSegment(1) == 'asuransipasien') ? 'asuransipasien' : '' ?>" 
               href="<?= base_url('asuransipasien') ?>">
               <i class="bi bi-capsule me-2"></i> Asuransi Pasien
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= ($uri->getSegment(1) == 'pendaftarankunjungan') ? 'pendaftarankunjungan' : '' ?>" 
               href="<?= base_url('pendaftarankunjungan') ?>">
              - Pendaftaran Kunjungan
            </a>
        </li>
    </ul>
</div>
