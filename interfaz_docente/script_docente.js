const btnAbrirModal=
document.querySelector("#btn-abrir-modal");

const modal=
document.querySelector("#modal");

btnAbrirModal.addEventListener("click",()=>{
    modal.showModal();
})

btnCerrarModal.addEventListener("click",()=>{
    modal.clase();
})