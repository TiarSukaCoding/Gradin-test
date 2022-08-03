
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Layanan</th>
                    <th scope="col">Jenis Pengiriman</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Estimasi Tanggal Pengiriman</th>
                    <th scope="col">Total Rating</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kurir as $k)
                <tr>
                    <td scope="row">{{$k->id}}</td>
                    <td>{{$k->nama}}</td>
                    @switch($k->j_layanan_id)
                        @case(1)
                            <td>JNE</td>
                            @break
                        @case(2)
                            <td>JNT</td>
                            @break
                        @case(3)
                            <td>SiCepat</td>
                            @break
                        @case(4)
                            <td>Ninja Xpress</td>
                            @break
                        @case(5)
                            <td>Anteraja</td>
                            @break
                        @default
                            <td>Layanan tidak ditemukan</td>
                    @endswitch
                    @switch($k->jenis_id)
                        @case(1)
                            <td>Reguler</td>
                            @break
                        @case(2)
                            <td>Hemat</td>
                            @break
                        @case(3)
                            <td>Instant</td>
                            @break
                        @default
                            <td>Jenis tidak ditemukan</td>
                    @endswitch
                    @switch($k->barang_id)
                        @case(1)
                            <td>Masker</td>
                            @break
                        @case(2)
                            <td>Casing Handphone</td>
                            @break
                        @case(3)
                            <td>Hoodie</td>
                            @break
                        @default
                            <td>Barang tidak ditemukan</td>
                    @endswitch
                    @switch($k->customer_id)
                        @case(1)
                            <td>Wawan</td>
                            @break
                        @case(2)
                            <td>Sutrisno</td>
                            @break
                        @case(3)
                            <td>Krisna</td>
                            @break
                        @default
                            <td>Customer tidak ditemukan</td>
                    @endswitch
                    <td>{{$k->alamat}}</td>
                    <td>{{$k->estimasi}}</td>
                    @if ($k->rating != null)
                        <td>{{$k->rating}}⭐</td>
                    @else
                        <td>Belum ada Penilaian</td>
                    @endif
                    <td>
                        <button wire:click="getKurir({{ $k->id }})" class="btn btn-sm btn-warning">Edit</button>
                        <button wire:click="destroy({{ $k->id }})" class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
