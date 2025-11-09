<?= $this->include('layouts/header'); ?>
<?= $this->include('layouts/sidebar'); ?>
<div>
  <?= $this->renderSection('content'); ?>
</div>

<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>