// Modal Tambah Pelatihan
function tambahPelatihan() {
    let modal = document.getElementById("tambahPelatihan");
    
    let btnTambahPelatihan = document.getElementById("buttonTambahPelatihan");
    
    let btnCloseTambahPelatihan = document.getElementById("close-tambahPelatihan");
    
    btnTambahPelatihan.onclick = function() {
        modal.style.display = "block";
    }
    btnCloseTambahPelatihan.onclick = function() {
        modal.style.display = "none";
    }
}
// End Modal Tambah Pelatihan

// Modal Hapus Pelatihan
function hapusPelatihan(modalId, btnId, closeId, closeFormId) {
    let modalHapus = document.getElementById(modalId);

    let btnHapusPelatihan = document.getElementById(btnId);

    let btnCloseHapusPelatihan = document.getElementById(closeId);
    let btnCloseHapusPelatihanForm = document.getElementById(closeFormId);

    btnHapusPelatihan.onclick = function() {
        modalHapus.style.display = "block";
    }
    btnCloseHapusPelatihan.onclick = function() {
        modalHapus.style.display = "none";
    }
    btnCloseHapusPelatihanForm.onclick = function() {
        modalHapus.style.display = "none";
    }
}
// End Modal Hapus Pelatihan

// Modal Edit Pelatihan
function editPelatihan(modalId, btnId, closeId) {
    let modalEdit = document.getElementById(modalId);

    let btnEditPelatihan = document.getElementById(btnId);

    let btnCloseEditPelatihan = document.getElementById(closeId);


    btnEditPelatihan.onclick = function() {
        modalEdit.style.display = "block";
    }
    btnCloseEditPelatihan.onclick = function() {
        modalEdit.style.display = "none";
    }
}
// End Modal Hapus Pelatihan

// Modal Tambah Pelatihan
function tambahDataPelatihan() {
    let modal = document.getElementById("tambahDataPelatihan");
    
    let btnTambahPelatihan = document.getElementById("buttonTambahDataPelatihan");
    
    let btnCloseTambahPelatihan = document.getElementById("close-tambahDataPelatihan");
    
    btnTambahPelatihan.onclick = function() {
        modal.style.display = "block";
    }
    btnCloseTambahPelatihan.onclick = function() {
        modal.style.display = "none";
    }
}
// End Modal Tambah Pelatihan


// Modal Tambah Sertifikat
function tambahSertifikat() {

    let modalSertifikat = document.getElementById("tambahSertifikat");

    let btnTambahSertifikat = document.getElementById("buttonTambahSertifikat");

    let btnCloseTambahSertifikat = document.getElementById("close-tambahSertifikat");

    btnTambahSertifikat.onclick = function() {
        modalSertifikat.style.display = "block";
    }
    btnCloseTambahSertifikat.onclick = function() {
        modalSertifikat.style.display = "none";
    }
}
// End Modal Tambah Sertifikat

// Modal Tambah Peserta
function tambahPeserta() {
    let modal = document.getElementById("tambahPeserta");
    
    let btnTambahPeserta = document.getElementById("buttonTambahPeserta");
    
    let btnCloseTambahPeserta = document.getElementById("close-tambahPeserta");
    
    btnTambahPeserta.onclick = function() {
        modal.style.display = "block";
    }
    btnCloseTambahPeserta.onclick = function() {
        modal.style.display = "none";
    }
}
// End Modal Tambah Peserta

// Modal Tambah User
function tambahUser() {
    let modal = document.getElementById("tambahUser");
    
    let btnTambahPeserta = document.getElementById("buttonTambahUser");
    
    let btnCloseTambahPeserta = document.getElementById("close-tambahUser");
    
    btnTambahPeserta.onclick = function() {
        modal.style.display = "block";
    }
    btnCloseTambahPeserta.onclick = function() {
        modal.style.display = "none";
    }
}
// End Modal Tambah User