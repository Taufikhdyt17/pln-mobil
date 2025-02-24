<div class="modal fade bs-example-modal-lg" id="createPeminjamanModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{Route('user.storePeminjaman')}}">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Create Peminjaman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                        <label class="weight-600">Keperluan</label>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="keperluan1" name="keperluan_id" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="keperluan1">Dinas</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="keperluan2" name="keperluan_id" value="2" class="custom-control-input">
                            <label class="custom-control-label" for="keperluan2">Non Dinas</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Pemohon</label>
                        <input name="nama" class="form-control" type="text" placeholder="Nama Pemohon">
                        @error('nama') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="weight-600">Bagian</label>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="bagian1" name="bagian" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="bagian1">REN</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="bagian2" name="bagian" value="2" class="custom-control-input">
                            <label class="custom-control-label" for="bagian2">JAR</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="bagian3" name="bagian" value="3" class="custom-control-input">
                            <label class="custom-control-label" for="bagian3">TEL</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="bagian4" name="bagian" value="4" class="custom-control-input">
                            <label class="custom-control-label" for="bagian4">SAR</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="bagian5" name="bagian" value="5" class="custom-control-input">
                            <label class="custom-control-label" for="bagian5">KUM</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="bagian6" name="bagian" value="6" class="custom-control-input">
                            <label class="custom-control-label" for="bagian6">K3L</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="bagian7" name="bagian" value="7" class="custom-control-input">
                            <label class="custom-control-label" for="bagian7">DAN</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>jumlah Penumpang</label>
                        <input name="jumlah_penumpang" class="form-control" type="number" placeholder="jumlah Penumpang">
                        @error('jumlah_penumpang') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Berangkat</label>
                        <input name="tgl_berangkat" class="form-control" type="datetime-local" placeholder="Tanggal Berangkat">
                        @error('tgl_berangkat') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input name="tgl_kembali" class="form-control" type="datetime-local" placeholder="Tanggal Kembali">
                        @error('tgl_kembali') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Lokasi/Tujuan</label>
                        <input name="tujuan" class="form-control" type="text" placeholder="Lokasi/Tujuan">
                        @error('tujuan') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Keperluan</label>
                        <textarea name="keperluan" class="form-control" cols="30" rows="10"></textarea>
                        @error('keperluan') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Jenis Mobil</label>
                        <select class="form-control" name="jenis_id">
                            @foreach ($jenis as $data)
                            <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                        </select>
                        @error('jenis_id') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>