document.addEventListener("DOMContentLoaded", function() {
    // Ambil data dari server 
    fetch("data.php")
        .then(response => response.json())
        .then(data => {
            // Tampilkan data dalam tabel
            const tableBody = document.querySelector("#data-table tbody");
            data.forEach((item, index) => {
                const row = tableBody.insertRow();
                row.insertCell(0).textContent = item.nama_karyawan;
                row.insertCell(1).textContent = item.gaji_pokok;

                // Menambahkan warna biru 
                if (index % 2 === 0) {
                    row.style.backgroundColor = "rgba(0, 0, 255, 0.2)";
                }
            });

            // Buat grafik dengan Chart.js
            const ctx = document.querySelector("#myChart").getContext("2d");
            const labels = data.map(item => item.nama_karyawan);
            const gajiPokok = data.map(item => item.gaji_pokok);

            // Menyiapkan warna dataset 
            const backgroundColors = data.map((item, index) => {
                return index % 2 === 0 ? "rgba(0, 0, 255, 0.2)" : "rgba(75, 192, 192, 0.2)";
            });

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: labels,
                    datasets: [{
                        label: "Gaji Pokok",
                        data: gajiPokok,
                        backgroundColor: backgroundColors,
                        borderColor: "rgba(75, 192, 192, 1)",
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch(error => {
            console.error("Terjadi kesalahan:", error);
        });
});
