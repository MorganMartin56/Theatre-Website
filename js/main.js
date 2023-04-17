function showDropdown() {
    document.getElementById("dropdown").classList.toggle("show");
}

//get both the dropdown button and the nav ids
const navMobileButton = document.getElementById('dropdown-btn');
const mobileNav = document.getElementById('mobile-nav');

/* add a click event listener so that when you click on the 
button it will toggle the activate class which allows for the mobile nav to work */
navMobileButton.addEventListener('click', () => {
    mobileNav.classList.toggle('active');
})

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.nav-icon')) {

        var dropdowns = document.getElementsByClassName("dropdown-menu");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}