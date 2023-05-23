let btnOpenModalLogin = document.querySelector(".btn-login");
    let btnCloseModal = document.querySelector(".close-modal-btn");
    console.log(btnOpenModalLogin);
    let modal = document.getElementById("modal")
    if (btnOpenModalLogin) {
      btnOpenModalLogin.onclick = () => {
        modal.style.display = "block";
      }
      btnCloseModal.onclick = () => {
        modal.style.display = "none"
      }
    }