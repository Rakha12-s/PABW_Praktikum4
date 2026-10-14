<!DOCTYPE html>
<html>
<head>
    <title>SmartBus TransLive - Daftar Rute & Armada</title>
</head>
<body>
    <h2>Daftar Rute & Armada Bus SmartBus TransLive</h2>
    <hr>

    @foreach($rutes as $rute)
        <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; border-radius: 5px;">
            <h3>Rute: {{ $rute->nama_rute }}</h3>
            <p><strong>Asal &rarr; Tujuan:</strong> {{ $rute->asal }} &rarr; {{ $rute->tujuan }}</p>
            <p><strong>Tarif Perjalanan:</strong> Rp {{ number_format($rute->tarif, 0, ',', '.') }}</p>

            <h4>Daftar Armada Bus yang Tersedia:</h4>
            <table border="1" cellpadding="6" cellspacing="0" width="100%">
                <thead>
                    <tr style="background-color: #f2f2f2;">
                        <th>No</th>
                        <th>Nama Bus</th>
                        <th>Nomor Plat</th>
                        <th>Kapasitas Kursi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($rute->buses as $key => $bus)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $bus->nama_bus }}</td>
                        <td>{{ $bus->nomor_plat }}</td>
                        <td>{{ $bus->kapasitas }} Kursi</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" align="center">Belum ada armada bus pada rute ini.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endforeach
</body>
</html>