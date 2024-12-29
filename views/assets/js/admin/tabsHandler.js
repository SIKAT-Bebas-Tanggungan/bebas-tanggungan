document.addEventListener('DOMContentLoaded', function() {
  // Get all tab buttons
  const tabButtons = document.querySelectorAll('#userTabs .nav-link');
  // Get all content divs
  const contentDivs = document.querySelectorAll('.table-content');
  const addUserLink = document.getElementById("add-user-link");

  // Function to show the correct content based on the active tab
  function showContent(activeTab) {
    contentDivs.forEach(div => {
      div.style.display = div.id === 'content-' + activeTab ? 'block' : 'none';
    });

    // Update the href for the add user button based on the active tab
    if (activeTab === "admin") {
      addUserLink.href = "http://localhost/bebas-tanggungan/admin/manajemen/tambah-admin";
    } else if (activeTab === "mahasiswa") {
      addUserLink.href = "http://localhost/bebas-tanggungan/admin/manajemen/tambah-mahasiswa";
    }
  }

  // Set initial content visibility
  showContent('admin'); // Show admin content by default

  // Add click event listeners to each tab button
  tabButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Remove active class from all buttons
      tabButtons.forEach(btn => btn.classList.remove('active', 'bg-primary', 'text-white'));
      // Add active class to the clicked button
      button.classList.add('active', 'bg-primary', 'text-white');

      // Get the data-tab attribute to determine which content to show
      const activeTab = button.getAttribute('data-tab');
      showContent(activeTab);
    });
  });
});
