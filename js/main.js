// Show dropdown menu
function showDropdown() {
    document.getElementById("dropdown").classList.toggle("show");
  }
  
  // Get both the dropdown button and the nav ids
  const navMobileButton = document.getElementById('dropdown-btn');
  const mobileNav = document.getElementById('mobile-nav');
  
  // Add a click event listener to toggle the mobile nav
  navMobileButton.addEventListener('click', () => {
    mobileNav.classList.toggle('active');
  });
  
  // Close the dropdown if the user clicks outside of it
  window.addEventListener('click', (event) => {
    const dropdownMenu = document.getElementById('dropdown');
    if (!event.target.matches('.nav-icon') && !dropdownMenu.contains(event.target)) {
      dropdownMenu.classList.remove('show');
    }
  });
  
  // onclick event
  function Rsure() {
    alert("Are you sure?");
  }
  
  // onChange event
  function CheckValue(value) {
    alert("Is this the right value: " + value);
  }
  