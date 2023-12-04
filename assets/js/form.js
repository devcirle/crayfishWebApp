document.addEventListener("DOMContentLoaded", function () {
  const showLoginBtn = document.querySelector("#show-login");
  const popup = document.querySelector(".popup");
  const closeBtn = document.querySelector(".popup .close-btn");

  showLoginBtn.addEventListener("click", function () {
    popup.classList.add("active");
  });

  closeBtn.addEventListener("click", function () {
    popup.classList.remove("active");
  });
});
