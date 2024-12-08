let sideLinks = document.querySelectorAll('.sidebar .side-menu li a:not(.logout)');
sideLinks.forEach(item => {
    const li = item.parentElement;
    item.addEventListener('click', (e) => {
        e.preventDefault();
        sideLinks.forEach(i => {
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});

let menuBar = document.querySelector('.content nav .bx.bx-menu');
let sideBar = document.querySelector('.sidebar');
menuBar.addEventListener('click', (e) => {
    e.preventDefault();
    sideBar.classList.toggle('close');
});

let searchBtn = document.querySelector('.content nav form .form-input button');
let searchBtnIcon = document.querySelector('.content nav form .form-input button .bx');
let searchForm = document.querySelector('.content nav form');
searchBtn.addEventListener('click', function(e) {
    if (window.innerWidth < 576) {
        e.preventDefault;
        searchForm.classList.toggle('show');
        if (searchForm.classList.contains('show')) {
            searchBtnIcon.classList.replace('bx-search', 'bx-x');
        } else {
            searchBtnIcon.classList.replace('bx-x', 'bx-search');
        }
    }
});
window.addEventListener('resize', () => {
    if (window.innerWidth < 768) {
        sideBar.classList.add('close');
    } else {
        sideBar.classList.remove('close');
    }
    if (window.innerWidth > 576) {
        searchBtnIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }
});
const toggler = document.getElementById('theme-toggle');

toggler.addEventListener('change', function() {
    if (this.checked) {
        document.body.classList.add('dark');
    } else {
        document.body.classList.remove('dark');
    }
});


document.getElementById('buttonadd').addEventListener('click', function(e) {
    e.preventDefault()
    document.getElementById('addClientForm').classList.add('active');
});

document.getElementById('closeForm').addEventListener('click', function() {
    document.getElementById('addClientForm').classList.remove('active');
})