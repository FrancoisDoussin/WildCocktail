let title = document.getElementById("receipe-title");

title.addEventListener('click', () => {
  document.getElementById("receipe-content").classList.toggle("d-none");
  title.querySelector("i").classList.toggle("fa-arrow-down");
  title.querySelector("i").classList.toggle("fa-arrow-up");
});
