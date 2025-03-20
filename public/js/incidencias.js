d = document;

const $modalCreatIncident = d.getElementById("modalCreatIncident");
const $modalUpdateIncident = d.getElementById("modalUpdateIncident");
const $modalDeleteIncident = d.getElementById("modalDeleteIncident");

const modalCreatIncident = new bootstrap.Modal($modalCreatIncident);
const modalUpdateIncident = new bootstrap.Modal($modalUpdateIncident);
const modalDeleteIncident = new bootstrap.Modal($modalDeleteIncident);

function openModalCreatIncident(){
    modalCreatIncident.show();
}

function openModalUpdateIncident(){
    modalUpdateIncident.show();
}

function openModalDeleteIncident(){
    modalDeleteIncident.show();
}

