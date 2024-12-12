function validateNumericInput(input) {
    // Menghapus semua karakter kecuali angka dan titik
    input.value = input.value.replace(/[^0-9.]/g, '');

    // Membatasi tanda titik hanya satu
    const parts = input.value.split('.');
    if (parts.length > 2) {
        input.value = parts[0] + '.' + parts.slice(1).join('');
    }

    // Membatasi angka di belakang titik hanya satu digit
    if (parts[1] && parts[1].length > 1) {
        input.value = parts[0] + '.' + parts[1].slice(0, 1);
    }
}


function validateNameInput(input) {
    // Menghapus semua karakter kecuali huruf dan spasi
    input.value = input.value.replace(/[^a-zA-Z\s]/g, '');
}


document.addEventListener('DOMContentLoaded', () => {
    const namaInput = document.getElementById('nama');
    const beratInput = document.getElementById('berat');
    const panjangInput = document.getElementById('panjang');

    if (namaInput) {
        namaInput.addEventListener('input', () => validateNameInput(namaInput));
    }

    if (beratInput) {
        beratInput.addEventListener('input', () => validateNumericInput(beratInput));
    }

    if (panjangInput) {
        panjangInput.addEventListener('input', () => validateNumericInput(panjangInput));
    }
});
