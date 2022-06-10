<!DOCTYPE html>
<html>

<head>
    <style>
        h1 {
            text-align: center;
        }

        #mahasiswa {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #mahasiswa td,
        #mahasiswa th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #mahasiswa tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #mahasiswa tr:hover {
            background-color: #ddd;
        }

        #mahasiswa th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #045aaa;
            color: white;
        }

    </style>
</head>

<body>

    <h1>DATA MAHASISWA</h1>

    <table id="mahasiswa">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
        </tr>
        @php
        $no=1;
        @endphp
        @foreach ($data as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->nama }} / {{ $row->jenis_kelamin }}</td>
            <td>{{ $row->tempat_lahir }}, {{ $row->tanggal_lahir }}</td>
            <td>{{ $row->alamat }}</td>
            <td>0{{ $row->telepon }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
