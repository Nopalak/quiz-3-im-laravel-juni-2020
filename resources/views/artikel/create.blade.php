<input type="hidden" name="updated_at" value="{{$time}}">
                <div class="form-group">
                    <label for="judul"><b>Judul artikel</b></label>
                    <input type="text" name="judul" class="form-control" placeholder="ex: Dasar-dasar OOP">
                    <input type="text" name="judul" class="form-control" placeholder="ex: Dasar-dasar OOP" required>
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
                    <textarea name="isi" id="isi" cols="30" rows="5"></textarea>
                    <textarea name="isi" id="isi" cols="30" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tag"><b>Tag</b></label>
                    <input type="text" name="tag" class="form-control" placeholder="ex: kesehatan,sosial,...">
                </div>
                <button type="submit" class="btn btn-primary">Buat Artikel</button>
                </form>
        </div>
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