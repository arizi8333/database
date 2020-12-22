<div class="form-group">
            <div class="form-group">
                <label>Nama Penduduk:</label>
                <input type="nama" name="nama" class="form-control" placeholder="Nama" value="{{ $penduduks->nama }}">
                @if ($errors->has('nama'))
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Tempat Lahir:</strong>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ $penduduks->tempat_lahir }}">
                @if ($errors->has('tempat_lahir'))
                    <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $penduduks->tanggal_lahir }}">
                @if ($errors->has('tanggal_lahir'))
                    <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Agama:</strong>
                <input type="text" name="agama" class="form-control" placeholder="Agama" value="{{ $penduduks->agama }}">
                @if ($errors->has('agama'))
                    <span class="text-danger">{{ $errors->first('agama') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                <select type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" value="{{ $penduduks->jenis_kelamin }}">
                    <option value="Pria">Pria</option>
                    <option value="Perempuan">Perempuan</option>
                @if ($errors->has('jenis_kelamin'))
                    <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                @endif
                </select>
            </div>

            <div class="form-group">
                <strong>Status Pernikahan:</strong>
                <select type="text" name="status_pernikahan" class="form-control" placeholder="Status Pernikahan" value="{{ $penduduks->status_pernikahan }}">
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                    <option value="janda/duda">Janda / Duda</option>
                @if ($errors->has('status_pernikahan'))
                    <span class="text-danger">{{ $errors->first('status_pernikahan') }}</span>
                @endif
                </select>
            </div>

            <div class="form-group">
                <strong>Status Keluarga:</strong>
                <select type="text" name="status_keluarga" class="form-control" placeholder="Status Keluarga" value="{{ $penduduks->status_pernikahan }}">
                    <option value="Ayah">Ayah</option>
                    <option value="Ibu">Ibu</option>
                    <option value="Anak">Anak</option>
                    <option value="Orang Tua">Orang Tua</option>
                @if ($errors->has('status_keluarga'))
                    <span class="text-danger">{{ $errors->first('status_keluarga') }}</span>
                @endif
                </select>
            </div>

            <div class="form-group">
                <strong>Nama Ibu:</strong>
                <input type="text" name="ibu" class="form-control" placeholder="Ibu" value="{{ $penduduks->ibu }}">
                @if ($errors->has('ibu'))
                    <span class="text-danger">{{ $errors->first('ibu') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Nama Ayah:</strong>
                <input type="text" name="ayah" class="form-control" placeholder="Ayah" value="{{ $penduduks->ayah }}">
                @if ($errors->has('ayah'))
                    <span class="text-danger">{{ $errors->first('ayah') }}</span>
                @endif
            </div>
</div>