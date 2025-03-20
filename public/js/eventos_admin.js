d = document;

const $modalCreatEvent = d.getElementById("modalCreatEvent");
const $modalUpdateEvent = d.getElementById("modalUpdateEvent");
const $modalDeleteEvent = d.getElementById("modalDeleteEvent");

const modalCreatEvent = new bootstrap.Modal($modalCreatEvent);
const modalUpdateEvent = new bootstrap.Modal($modalUpdateEvent);
const modalDeleteEvent = new bootstrap.Modal($modalDeleteEvent);

function openModalCreatEvent(){
    modalCreatEvent.show();
}

function openModalUpdateEvent(){
    modalUpdateEvent.show();
}

function openModalDeleteEvent(){
    modalDeleteEvent.show();
}
