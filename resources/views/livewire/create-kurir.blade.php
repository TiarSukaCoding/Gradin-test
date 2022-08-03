<div class="card bg-primary text-light">
    <div class="card-header">
        Tambah Data
    </div>
    <div class="card-body">
        <form wire:submit.prevent="store()">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input wire:model="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama">
                @error('nama')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="j_layanan_id" class="form-label">Jenis Layanan</label>
                <select wire:model="j_layanan_id" name="j_layanan_id" id="j_layanan_id" class="form-select @error('j_layanan_id') is-invalid @enderror" aria-label="Default select example">
                <option value="" selected>Pilih Layanan</option>
                <option value="1">JNE</option>
                <option value="2">JNT</option>
                <option value="3">SiCepat</option>
                <option value="4">Ninja Xpress</option>
                <option value="5">Anteraja</option>
                </select>
                @error('j_layanan_id')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jenis_id" class="form-label">Jenis</label>
                <select wire:model="jenis_id" name="jenis_id" id="jenis_id" class="form-select @error('jenis_id') is-invalid @enderror" aria-label="Default select example">
                <option value="" selected>Pilih Jenis</option>
                <option value="1">Reguler</option>
                <option value="2">Hemat</option>
                <option value="3">Instant</option>
                </select>
                @error('jenis_id')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="barang_id" class="form-label">Barang</label>
                <select wire:model="barang_id" name="barang_id" id="barang_id" class="form-select @error('barang_id') is-invalid @enderror" aria-label="Default select example">
                <option value="" selected>Pilih Barang</option>
                <option value="1">Masker</option>
                <option value="2">Casing Handphone</option>
                <option value="3">Hoodie</option>
                </select>
                @error('barang_id')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="customer_id" class="form-label">Cutomer</label>
                <select wire:model="customer_id" name="customer_id" id="customer_id" class="form-select @error('customer_id') is-invalid @enderror" aria-label="Default select example">
                <option value="" selected>Pilih Customer</option>
                <option value="1">Wawan</option>
                <option value="2">Sutrisno</option>
                <option value="3">Krisna</option>
                </select>
                @error('customer_id')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input wire:model="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat">
                @error('alamat')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>
