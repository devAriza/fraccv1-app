d = document;

const $modalCreatVisitor = d.getElementById("modalCreatVisitor");
const $modalUpdateVisitor = d.getElementById("modalUpdateVisitor");
const $modalDeleteVisitor = d.getElementById("modalDeleteVisitor");

const modalCreatVisitor = new bootstrap.Modal($modalCreatVisitor);
const modalUpdateVisitor = new bootstrap.Modal($modalUpdateVisitor);
const modalDeleteVisitor = new bootstrap.Modal($modalDeleteVisitor);

function openModalCreatVisitor(){
    modalCreatVisitor.show();
}

function openModalUpdateVisitor(){
    modalUpdateVisitor.show();
}

function openModalDeleteVisitor(){
    modalDeleteVisitor.show();
}

