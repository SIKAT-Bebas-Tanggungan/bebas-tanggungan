  const tabs = document.querySelectorAll('#userTabs .nav-link');

  tabs.forEach(tab => {
    tab.addEventListener('click', function(event) {
      // Mencegah perilaku default link
      event.preventDefault();

      // Hapus kelas 'active' dari semua tab
      tabs.forEach(t => t.classList.remove('active', 'bg-primary', 'text-white'));
      // Tambahkan kelas 'active' pada tab yang diklik
      this.classList.add('active', 'bg-primary', 'text-white');
    });
  });
