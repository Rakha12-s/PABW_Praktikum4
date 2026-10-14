<!DOCTYPE html>
<html>
<head>
    <title>Daftar Laporan Banjir</title>
</head>
<body>
    <h2>Daftar Laporan Banjir BPBD Kabupaten Bandung</h2>
    <a href="/form">+ Tambah Laporan Baru</a><br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelapor</th>
                <th>Lokasi</th>
                <th>Tinggi Genangan</th>
                <th>Tanggal Kejadian</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporan as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nama_pelapor }}</td>
                <td>{{ $item->lokasi }}</td>
                <td>{{ $item->tinggi_genangan }} cm</td>
                <td>{{ $item->tanggal_kejadian }}</td>
                <td>
                    {{-- Penentuan Status Genangan --}}
                    @if($item->tinggi_genangan < 50)
                        <span style="color: green; font-weight: bold;">Waspada</span>
                    @elseif($item->tinggi_genangan <= 100)
                        <span style="color: orange; font-weight: bold;">Siaga</span>
                    @else
                        <span style="color: red; font-weight: bold;">Awas</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>