d = document;

const $modalCreatTransaction = d.getElementById("modalCreatTransaction")
const $modalUpdateTransaction = d.getElementById("modalUpdateTransaction")
const $modalDeleteTransaction = d.getElementById("modalDeleteTransaction")

const modalCreatTransaction = new bootstrap.Modal($modalCreatTransaction);
const modalUpdateTransaction = new bootstrap.Modal($modalUpdateTransaction);
const modalDeleteTransaction = new bootstrap.Modal($modalDeleteTransaction);

function openModalCreatTransaction(){
    modalCreatTransaction.show();
}

function openModalUpdateTransaction(){
    modalUpdateTransaction.show();
}

function openModalDeleteTransaction(){
    modalDeleteTransaction.show();
}