<form action="<?= base_url('anggota/update'); ?>" method="post">
       <label>Anggota</label>
              <input type="text" name="anggota" value="<?= $anggota; ?>">
              <input type="hidden" name="idanggota" value="<?= $idanggota; ?>">
                     <br>
       <label>Alamat</label>
              <input type="text" name="alamat" value="<?= $alamat; ?>">
                     <br>
              <input type="submit" name="simpan" value="Simpan">
</form>
