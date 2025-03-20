d = document;

const $modalCreatResident = d.getElementById("modalCreatResident");
const $modalUpdateResident = d.getElementById("modalUpdateResident");
const $modalDeleteResident = d.getElementById("modalDeleteResident");

const modalCreatResident = new bootstrap.Modal($modalCreatResident);
const modalUpdateResident = new bootstrap.Modal($modalUpdateResident);
const modalDeleteResident = new bootstrap.Modal($modalDeleteResident);

function openModalCreatResident(){
    modalCreatResident.show();
}

function openModalUpdateResident(){
    modalUpdateResident.show();
}

function openModalDeleteResident(){
    modalDeleteResident.show();
}

