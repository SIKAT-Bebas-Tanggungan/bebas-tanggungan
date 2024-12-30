<!-- Modal Notifikasi -->
<div class="modal fade" id="notifModal" tabindex="-1" aria-labelledby="notifModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="notifModalLabel">Notifikasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="list-group">
          <?php if (isset($notifikasiList) && is_iterable($notifikasiList) && !empty($notifikasiList)): ?>
            <?php foreach ($notifikasiList as $notifikasi): ?>
              <li class="list-group-item d-flex align-items-center">
                <img src="http://localhost/bebas-tanggungan/views/assets/icons/Profile A.png" alt="Profile Icon" class="rounded-circle me-3"
                  style="width: 40px; height: 40px;">
                <span>
                  <strong><?= htmlspecialchars($notifikasi['id_admin']) ?></strong> 
                  <?= htmlspecialchars($notifikasi['isi']) ?>
                </span>
              </li>
            <?php endforeach; ?>
          <?php else: ?>
            <li class="list-group-item text-center">
              Tidak ada notifikasi.
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
