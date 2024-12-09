document.getElementById('notifIcon').addEventListener('click', function (event) {
    event.preventDefault();
    const notifModal = new bootstrap.Modal(document.getElementById('notifModal'));
    notifModal.show();
  });