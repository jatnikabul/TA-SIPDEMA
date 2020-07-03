<html>

<head>
    <title> SURAT KETERANGAN KELAHIRAN </title>
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
        <p align="center"> <u> <b> SURAT KETERANGAN KELAHIRAN </b></u>
            <p align="center"> Nomer: 8021/SMKN1/2015/huuiu/ </p>
    </font><br>
    </font>



    <p align="rigth">
        Yang bertanda tangan dibawah ini Kepala Desa Marengmang Kecamatan Kalijati
        Kabupaten Subang, menerangkan bahwa :


        <table style="margin-left: 40px;">
            <tr>
                <td>Nama Anak</td>
                <td>:</td>
                <td>{{ $surat_kelahiran->nama_anak }}</td>
            </tr>
            <tr>
                <td>Anak Ke</td>
                <td>:</td>
                <td>{{ $surat_kelahiran->anak_ke }}</td>
            </tr>
            <tr>
                <td>Tempat / Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $surat_kelahiran->tempat_lahir}} {{ $surat_kelahiran->tanggal_lahir}}</td>
            </tr>
            <tr>
                <td>Waktu Lahir</td>
                <td>:</td>
                <td>{{ $surat_kelahiran->waktu_lahir}}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>@if ( $surat_kelahiran->jenis_kelamin=='L')
                    Laki-laki
                    @endif
                    @if ($surat_kelahiran->jenis_kelamin=='P')
                    Perempuan
                    @endif
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $surat_kelahiran->agama}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $surat_kelahiran->alamat}}<td>
            </tr>
            <tr>
                <td>Nama Ibu Kandung</td>
                <td>:</td>
                <td>{{ $surat_kelahiran->nama_ibu_kandung}}</td>
            </tr>
            <tr>
                <td>Nama Ayah Kandung</td>
                <td>:</td>
                <td>{{ $surat_kelahiran->nama_ayah_kandung}}</td>
            </tr>
        </table>



        <p align="left">
            <font face="Arial" color="black">
                Demikian surat keterangan kelahiran ini dibuat agar dipergunakan sebagaimana mestinya.
            </font>
        </p>


        <table style="float: right">
            <tr>
                <td>Subang, {{ date_format($surat_kelahiran->created_at,'d M Y') }}</td>
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