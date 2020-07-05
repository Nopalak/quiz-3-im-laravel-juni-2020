<input type="hidden" name="updated_at" value="{{$time}}">
                <div class="form-group">
                    <label for="judul"><b>Judul artikel</b></label>
                    <input type="text" name="judul" class="form-control" placeholder="ex: Dasar-dasar OOP" value="{{$data->judul}}">
                    <input type="text" name="judul" class="form-control" placeholder="ex: Dasar-dasar OOP" value="{{$data->judul}}" required>
                </div>
                <div class="form-group">
                    <label for="id_profil"><b>Id profil</b></label>
                    <select class="form-control" name="id_user">
                    <select class="form-control" name="id_user" required>
                        @foreach ($id as $item)
                            <option value="{{$item}}">{{$item}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="isi"><b>Isi artikel</b></label>
                    <textarea name="isi" id="isi" cols="30" rows="5">{!!$data->isi!!}</textarea>
                    <textarea name="isi" id="isi" cols="30" rows="5" required>{!!$data->isi!!}</textarea>
                </div>
                <div class="form-group">
                    <label for="tag"><b>Tag</b></label>
                    <input type="text" name="tag" class="form-control" placeholder="ex: kesehatan,sosial,..." value="{{$data->tag}}">
                </div>
                <button type="submit" class="btn btn-primary">Edit Artikel</button>
                </form>
        </div>
    </div>
    <script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>