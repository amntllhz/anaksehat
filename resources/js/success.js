document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById('default-modal');
    if (modal) {
        modal.classList.remove('hidden'); // Tampilkan modal

        // Tombol untuk menutup modal
        document.querySelectorAll('[data-modal-hide="default-modal"]').forEach((button) => {
            button.addEventListener('click', () => {
                modal.classList.add('hidden');
            });
        });
    }
});
