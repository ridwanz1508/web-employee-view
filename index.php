<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan dan Gaji</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Data Karyawan dan Gaji</h1>
    </header>
    <main>
        <section class="table-section">
            <h2>Tabel Data Karyawan dan Gaji</h2>
            <table id="data-table">
                <thead>
                    <tr>
                        <th>Nama Karyawan</th>
                        <th>Gaji Pokok</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data Tabel -->
                </tbody>
            </table>
        </section>

        <section class="chart-section">
            <h2>Grafik Gaji Pokok</h2>
            <div id="chart-container">
                <!-- Data Grafik -->
                <canvas id="myChart"></canvas>
            </div>
        </section>
        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
