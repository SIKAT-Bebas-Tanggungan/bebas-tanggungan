    document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.querySelector('a[href="editLinkBerkasD2PPLS.php"]');
        const radioButtons = document.querySelectorAll('input[name="berkas"]');
        
        function updateEditButtonHref() {
            radioButtons.forEach(radio => {
                if (radio.checked) {
                    if (radio.id === "berkas" || radio.id === "alur") {
                        editButton.href = "editLinkBerkasD2PPLS.php";
                    } else if (radio.id === "tugasAkhir" || radio.id === "docAdmin") {
                        editButton.href = "editKeteranganBerkasD2PPLS.php";
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
