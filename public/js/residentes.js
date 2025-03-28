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

function openModalUpdateResident(resident_id, name, phone, email, house, type){
    modalUpdateResident.show();
    d.getElementById("editNameResident").value = name;
    d.getElementById("editPhoneResident").value = phone;
    d.getElementById("editEmailResident").value = email;
    d.getElementById("editHouseResident").value = house;
    d.getElementById("editTypeResident").value = type;

}

function openModalDeleteResident(){
    modalDeleteResident.show();
}

