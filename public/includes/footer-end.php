<?php
// Ajusta la ruta si tu dist está en otro sitio:
$bundlePath = __DIR__ . '/../../dist/bundle.js';

// Si no existiera por algún motivo, usa '1' como fallback
$ver = file_exists($bundlePath) ? filemtime($bundlePath) : 1;
?>
<!-- Bootstrap JS Bundle -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

<script src="/dist/bundle.js?v=<?= $ver ?>"></script>
</body>