<html>

<head>
    <title> SURAT kETERANGAN TIDAK MAMPU </title>
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
        <p align="center"> <u> <b> SURAT kETERANGAN TIDAK MAMPU </b></u>
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
                <td>{{ $surat_tidak_mampu->penduduk->nik }}</td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{ $surat_tidak_mampu->penduduk->nama_lengkap }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $surat_tidak_mampu->penduduk->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $surat_tidak_mampu->penduduk->tempat_lahir}} {{ $surat_tidak_mampu->penduduk->tanggal_lahir}}</td>
            </tr>
            <tr>
                <td>Status Pernikahan</td>
                <td>:</td>
                <td>{{ $surat_tidak_mampu->penduduk->status}}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $surat_tidak_mampu->penduduk->agama}}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $surat_tidak_mampu->penduduk->pekerjaan}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $surat_tidak_mampu->penduduk->alamat_lengkap}}<td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td>{{$surat_tidak_mampu->keterangan}}</td>
            </tr>
        </table>



        <p align="left">
            <font face="Arial" color="black">
                Yang bersangkutan adalah benar benar warga Desa Marengmang Kecamatan Kalijati Kabupaten Subang 
            yang berasal dari keluarga tidak mampu.
            </font>
        </p>

        <p align="left">
            <font face="Arial" color="black">
                Demikian surat keterangan tidak mampu ini dibuat agar dipergunakan sebagaimana mestinya.
            </font>
        </p>


        <table style="float: right">
            <tr>
                <td>Subang, {{ date_format($surat_tidak_mampu->created_at,'d M Y') }}</td>
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