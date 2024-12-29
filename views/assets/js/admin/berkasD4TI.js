    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.querySelector('a[href="editLinkBerkasD4TI.php"]');
        const radioButtons = document.querySelectorAll('input[name="berkas"]');
        
        function updateEditButtonHref() {
            radioButtons.forEach(radio => {
                if (radio.checked) {
                    if (radio.id === "berkas" || radio.id === "alur") {
                        editButton.href = "editLinkBerkasD4TI.php";
                    } else if (radio.id === "tugasAkhir" || radio.id === "docAdmin") {
                        editButton.href = "editKeteranganBerkasD4TI.php";
                    }
                }
            });
        }

        // Event listener pada setiap input radio
        radioButtons.forEach(radio => {
            radio.addEventListener("change", updateEditButtonHref);
        });

        // Inisialisasi saat halaman dimuat
        updateEditButtonHref();
    });