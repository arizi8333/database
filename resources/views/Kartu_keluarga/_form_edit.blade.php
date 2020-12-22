<div class="form-group">
                <label>Nama Jorong:</label>
                {!! Form::select('jorong_id', $jorongs, NULL, ['class' => "form-control"]) !!}
                @if ($errors->has('jorong_id'))
                    <span class="text-danger">{{ $errors->first('jorong_id') }}</span>
                @endif
            </div>

            <div class="form-group">
                <strong>No Kartu Keluarga:</strong>
                <input type="text" name="no" class="form-control" placeholder="No" value="{{ $kartukeluargas->no }}">
                @if ($errors->has('no'))
                    <span class="text-danger">{{ $errors->first('no') }}</span>
                @endif
            </div>
            
            <div class="form-group">
                <strong>Tanggal Pencatatan:</strong>
                <input type="date" name="tanggal_pencatatan" class="form-control" placeholder="Tanggal Pencatatan" value="{{ $kartukeluargas->no }}>
                @if ($errors->has('tanggal_pencatatan'))
                    <span class="text-danger">{{ $errors->first('tanggal_pencatatan') }}</span>
                @endif
            </div>