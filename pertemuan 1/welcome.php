<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: "Times New Roman", sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .ktp-container {
            width: 900px; /* Lebar container yang disesuaikan */
            padding: 40px;
            background-color: #6fdee8;
            border: 2px solid #000;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            display: flex;
        }

        .content {
            width: calc(100% - 180px); /* Mengurangi lebar untuk foto */
        }

        .header {
            font-size: 18px;
            font-weight: bold;
            text-align: center; /* Memusatkan teks header */
            margin-bottom: 30px;
            margin-left: 160px;
        }

        .ktp-table {
            width: 100%;
            border-collapse: collapse;
        }

        .ktp-table th,
        .ktp-table td {
            padding: 8px; /* Mengurangi padding untuk merapikan teks */
            font-size: 16px;
            white-space: nowrap; /* Menghindari pemisahan teks */
        }

        .ktp-table th {
            text-align: left;
            font-weight: bold;
        }

        .ktp-table td {
            text-align: left;
        }

        .photo-container {
            width: 150px; /* Lebar untuk ukuran foto 6x8 */
            height: 200px; /* Tinggi untuk ukuran foto 6x8 */
            border: 2px solid #000;
            background-color: #e0e0e0;
            font-size: 14px;
            text-align: center;
            position: absolute;
            top: 90px; /* Menyesuaikan posisi foto */
            right: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer {
            font-size: 14px;
            text-align: center; /* Rata kanan dan kiri */
            position: absolute;
            right: 20px;
            left: 740px; /* Agar rata kiri */
            top: 300px; /* Menyesuaikan posisi di bawah foto */
        }

        .signature-container {
            width: 150px; /* Lebar untuk foto tanda tangan */
            height: 50px; /* Tinggi untuk foto tanda tangan */
            border: 2px solid #000;
            position: absolute;
            top: 350px; /* Memindahkan tanda tangan lebih dekat dengan footer */
            right: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e0e0e0;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="ktp-container">
        <div class="content">
            <div class="header">
                PROVINSI JAWA TIMUR<br>KABUPATEN SIDOARJO
            </div>
            <table class="ktp-table">
                <tr>
                    <th>NIK</th>
                    <td>: 3515134404040006</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>: SITI FA'IQOH</td>
                </tr>
                <tr>
                    <th>Tempat/Tgl Lahir</th>
                    <td>: SIDOARJO, 04-04-2004</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>: PEREMPUAN</td>
                    <th>Gol. Darah</th> 
                    <td>: O</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>: JL IMAM BONJOL/NO 47</td>
                </tr>
                <tr>
                    <th style="padding-left:30px";>RT/RW</th>
                    <td>: 007/002</td>
                </tr>
                <tr>
                    <th style="padding-left:30px";>Kel/Desa</th>
                    <td>: GELURAN</td>
                </tr>
                <tr>
                    <th style="padding-left:30px";>Kecamatan</th>
                    <td>: TAMAN</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>: ISLAM</td>
                </tr>
                <tr>
                    <th>Status Perkawinan</th>
                    <td>: BELUM KAWIN</td>
                </tr>
                <tr>
                    <th>Pekerjaan</th>
                    <td>: PELAJAR/MAHASISWA</td>
                </tr>
                <tr>
                    <th>Kewarganegaraan</th>
                    <td>: WNI</td>
                </tr>
                <tr>
                    <th>Berlaku Hingga</th>
                    <td>: SEUMUR HIDUP</td>
                </tr>
            </table>
        </div>
        <div class="photo-container">
            <img src="2241760026.jpg" alt="Foto 6x8" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="footer">
            SIDOARJO<br>14-06-2021
        </div>
        <div class="signature-container">
            <alt="Tanda Tangan.jpeg" style="width: 100%; height: 100%; object-fit: contain;">
        </div>
    </div>
</body>

</html>
