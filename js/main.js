// Smooth scrolling untuk anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Aktifkan tooltips Bootstrap
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Form validation
const forms = document.querySelectorAll('.needs-validation');
forms.forEach(form => {
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
});

// Animasi scroll untuk menampilkan elemen
function revealOnScroll() {
    var reveals = document.querySelectorAll('.reveal');
    
    reveals.forEach(element => {
        var windowHeight = window.innerHeight;
        var elementTop = element.getBoundingClientRect().top;
        var elementVisible = 150;
        
        if (elementTop < windowHeight - elementVisible) {
            element.classList.add('active');
        } else {
            element.classList.remove('active');
        }
    });
}

window.addEventListener('scroll', revealOnScroll);

// Toggle mobile menu
const navbarToggler = document.querySelector('.navbar-toggler');
const navbarCollapse = document.querySelector('.navbar-collapse');

if (navbarToggler) {
    navbarToggler.addEventListener('click', () => {
        navbarCollapse.classList.toggle('show');
    });
}

// Aktifkan menu yang sedang aktif
function setActiveMenu() {
    const currentLocation = window.location.pathname;
    const menuItems = document.querySelectorAll('.nav-link');
    
    menuItems.forEach(item => {
        if (item.getAttribute('href') === currentLocation.split('/').pop()) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });
}

document.addEventListener('DOMContentLoaded', setActiveMenu);

// Form kontak validation
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        const nama = document.getElementById('nama');
        const email = document.getElementById('email');
        const pesan = document.getElementById('pesan');
        
        let isValid = true;
        
        if (nama.value.trim() === '') {
            alert('Nama harus diisi');
            isValid = false;
        }
        
        if (email.value.trim() === '') {
            alert('Email harus diisi');
            isValid = false;
        } else if (!validateEmail(email.value)) {
            alert('Format email tidak valid');
            isValid = false;
        }
        
        if (pesan.value.trim() === '') {
            alert('Pesan harus diisi');
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
        }
    });
}

// Fungsi validasi email
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Back to top button
const backToTop = document.createElement('button');
backToTop.innerHTML = '↑';
backToTop.className = 'back-to-top';
document.body.appendChild(backToTop);

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
        backToTop.style.display = 'block';
    } else {
        backToTop.style.display = 'none';
    }
});

backToTop.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});