const toggleBtns = document.querySelectorAll('.toggle-btn');
toggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      // Toggle the display of the corresponding dropdown content
      const dropdownContent = btn.parentNode.nextElementSibling;
      if (dropdownContent.style.display === 'none') {
        dropdownContent.style.display = 'block';
      } else {
        dropdownContent.style.display = 'none';
      }
    });
  });