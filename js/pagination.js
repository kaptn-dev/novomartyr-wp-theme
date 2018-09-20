let paginationA = document.querySelectorAll('.blog-pagination a');
let paginationSpan = document.querySelectorAll('.blog-pagination span');
let pageCurrent = document.querySelector('.blog-pagination .current');

for (let i = 0; i < paginationA.length; i++) {
  paginationA[i].classList.add('btn', 'btn-outline-primary');
}
for (let i = 0; i < paginationSpan.length; i++) {
  paginationSpan[i].classList.add('btn', 'btn-outline-primary');
}
pageCurrent.classList.remove('btn-outline-primary');
pageCurrent.classList.add('btn-outline-secondary');
