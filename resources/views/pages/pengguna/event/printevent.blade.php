<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Event</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        .table {
            font-size: 15px;
            border-collapse: collapse;
        }
        .table-laporan th,.table-laporan td {
            border: 1px solid #000;
        }
        .table tr,.table td {
            height: 22px;
            text-align: center;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th
        {
            padding:0;
        }
    </style>

</head>
{{--<div align="center">--}}
    {{--<img src="{{asset('assets/images/logomin.png')}}">--}}
{{--</div>--}}
<div align="center">
    {{--<tr>--}}
    {{--<td>--}}
    <center>
        <font size="4">Organisasi Mahasiswa Politeknik Harapan Bersama</font><BR>
        <font size="2">Jl. Mataram No.9, Kel.Pesurungan Lor, Pesurungan Lor, Margadana, Kota Tegal, Jawa Tengah 52147</font><BR>
        <font size="2"><i>Email : sekretariat@poltektegal.co.id, Website : poltektegal.ac.id</i><BR></font>
    </center>
    {{--</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td colspan="2">--}}
    <hr style="height:1px;border:none;color:#333;background-color:#333;">
    {{--</td>--}}
    {{--</tr>--}}
</div>
<body>

<center>
    <font size="3"><b>Report Data Event</b></font>
    <br>
</center>

<br>
<table id="example1" class="table table-laporan" align="center"
       style="border-collapse: collapse; width: 100%;" border="1">
    <thead>
    <tr>
            <th>No</th>
            <th>Nama Event</th>
            <th>Organisasi</th>
            <th>Tamggal Mulai</th>
            <th>Tempat</th>
            <th>Alokasi Dana</th>
    </tr>
    </thead>

    <tbody>
            @foreach($events as $event)

        <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$event->proker->nama_event}}</td>
                <td>{{$event->pengguna->organisasi}}</td>
                <td>{{$event->proker->tanggal_mulai}}</td>
                <td>{{$event->proker->tempat}}</td>
                <td>{{$event->proker->alokasi_dana}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
</body>
</html>
