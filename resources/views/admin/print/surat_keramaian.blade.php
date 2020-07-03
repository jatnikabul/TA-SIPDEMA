<html>

<head>
    <title> SURAT IJIN KERAMAIAN </title>
    <style>
        body {
            background-color: white;
            font-family: "Times New Roman", Times, serif;
        }
        td {
            text-transform: capitalize;
        }
    </style>
</head>

<body>
    <font face="Arial" color="black" size="3">
        <p align="center"> <b> PEMERINTAH DAERAH KABUPATEN SUBANG </b>
            <p align="center"> <b>KECAMATAN KALIJATI </b>
                <p align="center"> <b> DESA MARENGMANG </b>
                    <p align="center"> <b> Jln.H. Onong Suadana No 2 Kode Pos 21271 Kecamatan Kalijati Kabupaten Subang
                        </b>
    </font>
    <hr>

    <font face="Arial" color="black" size="3">
        <p align="center"> <u> <b> SURAT IJIN KERAMAIAN </b></u>
            <p align="center"> Nomer: 8021/SMKN1/2015/huuiu/ </p>
    </font><br>
    </font>



    <p align="rigth">
        Yang bertanda tangan dibawah ini Kepala Desa Marengmang Kecamatan Kalijati
        Kabupaten Subang, menerangkan bahwa :


        <table style="margin-left: 40px;">
            <tr>
                <td>Nomor Induk Kependudukan</td>
                <td>:</td>
                <td>{{ $surat_keramaian->penduduk->nik }}</td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{ $surat_keramaian->penduduk->nama_lengkap }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $surat_keramaian->penduduk->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $surat_keramaian->penduduk->tempat_lahir}} {{ $surat_keramaian->penduduk->tanggal_lahir}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $surat_keramaian->penduduk->alamat_lengkap}}<td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $surat_keramaian->penduduk->pekerjaan}}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $surat_keramaian->penduduk->agama}}</td>
            </tr>
            <tr>
                <td>Status Pernikahan</td>
                <td>:</td>
                <td>{{ $surat_keramaian->penduduk->status}}</td>
            </tr>
        </table>


        <p align="left">
            <font face="Arial" color="black">
                Memohon ijin keramian yang akan dilaksankan pada :
            </font>
        </p>

        <table style="margin-left: 40px;">
            <tr>
                <td>Hari / Tanggal</td>
                <td>:</td>
                <td>{{ $surat_keramaian->hari }}</td> {{ $surat_keramaian->tanggal }}</td>
            </tr>
            <tr>
                <td>Jam</td>
                <td>:</td>
                <td>{{ $surat_keramaian->waktu }}</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>:</td>
                <td>{{ $surat_keramaian->tempat }}</td>
            </tr>
            <tr>
                <td>Acara</td>
                <td>:</td>
                <td>{{ $surat_keramaian->acara }}</td>
            </tr>
            <tr>
                <td>Hiburan</td>
                <td>:</td>
                <td>{{ $surat_keramaian->jenis_hiburan }}</td>
            </tr>
        </table>


        <p align="left">
            <font face="Arial" color="black">
                Demikian surat keterangan usaha ini dibuat agar dipergunakan sebagaimana mestinya.
            </font>
        </p>


        <table style="float: right">
            <tr>
                <td>Subang, {{ date_format($surat_keramaian->created_at,'d M Y') }}</td>
            </tr>
            <tr>
                <td>Kepala Desa Merengmang</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="text-align: center">
                    <u>SUBANDI</u>
                </td>
            </tr>
        </table>
</body>

</html>