<html>

<head>
    <title> SURAT KETERANGAN KEMATIAN </title>
    <style>
        body {
            background-color: white;
            font-family: "Times New Roman", Times, serif;
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
        <p align="center"> <u> <b> SURAT KETERANGAN KEMATIAN </b></u>
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
                <td>{{ $surat_kematian->penduduk->nik }}</td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{ $surat_kematian->penduduk->nama_lengkap }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $surat_kematian->penduduk->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $surat_kematian->penduduk->tempat_lahir}} {{ $surat_kematian->penduduk->tanggal_lahir}}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $surat_kematian->penduduk->agama}}</td>
            </tr>
            <tr>
                <td>Status Pernikahan</td>
                <td>:</td>
                <td>{{ $surat_kematian->penduduk->status}}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $surat_kematian->penduduk->pekerjaan}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $surat_kematian->penduduk->alamat_lengkap}}<td>
            </tr>
        </table>


        <p align="left">
            <font face="Arial" color="black">
            Memang benar yang bersangkutan diatas warga Desa Marengmang Kecamatan Kalijati Kabupaten 
        Subang  telah meninggal dunia pada  :
            </font>
        </p>

        <table style="margin-left: 40px;">
            <tr>
                <td>Hari / Tanggal</td>
                <td>:</td>
                <td>{{ $surat_kematian->hari }}</td> {{ $surat_kematian->tanggal }}</td>
            </tr>
            <tr>
                <td>Pukul</td>
                <td>:</td>
                <td>{{ $surat_kematian->waktu }}</td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>:</td>
                <td>{{ $surat_kematian->meninggal_di }}</td>
            </tr>
            <tr>
                <td>Meninggal Karena</td>
                <td>:</td>
                <td>{{ $surat_kematian->disebabkan_karena }}</td>
            </tr>
            <tr>
                <td>Nama Yang Melaporkan</td>
                <td>:</td>
                <td>{{ $surat_kematian->nama_yang_melaporkan }}</td>
            </tr>
            <tr>
                <td>Hubungan Dengan Yang Meninggal</td>
                <td>:</td>
                <td>{{ $surat_kematian->hubungan_dengan_yang_meninggal }}</td>
            </tr>
        </table>



        <p align="left">
            <font face="Arial" color="black">
                Demikian surat keterangan usaha ini dibuat agar dipergunakan sebagaimana mestinya.
            </font>
        </p>


        <table style="float: right">
            <tr>
                <td>Subang, {{ date_format($surat_kematian->created_at,'d M Y') }}</td>
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