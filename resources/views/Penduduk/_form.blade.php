            <div class="form-group">
                <label>ID Keluarga:</label>
                {!! Form::select('keluarga_id', $kartukeluargas, NULL, ['class' => "form-control"]) !!}
                @if ($errors->has('keluarga_id'))
                    <span class="text-danger">{{ $errors->first('keluarga_id') }}</span>
                @endif
                </div>
    
            <div class="form-group">
                <label>Nama Penduduk:</label>
                <input type="nama" name="nama" class="form-control" placeholder="Nama">
                @if ($errors->has('nama'))
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                @endif
            </div>
     
            <div class="form-group">
                <strong>Nomer Induk Keluarga:</strong>
                <input type="text" name="nik" class="form-control" placeholder="nik">
                @if ($errors->has('nik'))
                    <span class="text-danger">{{ $errors->first('nik') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Tempat Lahir:</strong>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                @if ($errors->has('tempat_lahir'))
                    <span class="text-danger">{{ $errors->first('tempat_lahir') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
                @if ($errors->has('tanggal_lahir'))
                    <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Agama:</strong>
                <input type="text" name="agama" class="form-control" placeholder="Agama">
                @if ($errors->has('agama'))
                    <span class="text-danger">{{ $errors->first('agama') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                <select type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
                    <option value="Pria">Pria</option>
                    <option value="Perempuan">Perempuan</option>
                @if ($errors->has('jenis_kelamin'))
                    <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                @endif
                </select>
            </div>

            <div class="form-group">
                <strong>Level Pendidikan:</strong>
                {!! Form::select('level_pendidikan_id', $levelpendidikans, NULL, ['class' => "form-control"]) !!}
                @if ($errors->has('level_pendidikan_id'))
                    <span class="text-danger">{{ $errors->first('level_pendidikan_id') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Pekerjaan:</strong>
                {!! Form::select('pekerjaan_id', $pekerjaans, NULL, ['class' => "form-control"]) !!}
                @if ($errors->has('pekerjaan_id'))
                    <span class="text-danger">{{ $errors->first('pekerjaan_id') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Status Pernikahan:</strong>
                <select type="text" name="status_pernikahan" class="form-control" placeholder="Status Pernikahan">
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
                <select type="text" name="status_keluarga" class="form-control" placeholder="Status Keluarga">
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
                <strong>Kewarganegaraan:</strong>
                {!! Form::select('kewarganegaraan_id', $kewarganegaraans, NULL, ['class' => "form-control"]) !!}
                @if ($errors->has('kewarganegaraan_id'))
                    <span class="text-danger">{{ $errors->first('kewarganegaraan_id') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Nama Ibu:</strong>
                <input type="text" name="ibu" class="form-control" placeholder="Ibu">
                @if ($errors->has('ibu'))
                    <span class="text-danger">{{ $errors->first('ibu') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>Nama Ayah:</strong>
                <input type="text" name="ayah" class="form-control" placeholder="Ayah">
                @if ($errors->has('ayah'))
                    <span class="text-danger">{{ $errors->first('ayah') }}</span>
                @endif
            </div>
</div>