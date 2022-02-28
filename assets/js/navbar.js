const toggleButton = document.getElementById('toggle-button');
const navList = document.getElementById('navbar');

toggleButton.addEventListener('click', () => {
    navList.classList.toggle('active');
    
})