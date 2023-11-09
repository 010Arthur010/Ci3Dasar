<form action="<?= base_url('buku/update'); ?>" method="post">
       <label>Judul</label>
              <input type="text" name="judul" value="<?= $judul; ?>">
              <input type="hidden" name="id" value="<?= $id; ?>">
                     <br>
       <label>Penerbit</label>
              <input type="text" name="penerbit" value="<?= $penerbit; ?>">
                     <br>
       <label>Pengarang</label>
              <input type="text" name="pengarang" value="<?= $pengarang; ?>">
                     <br>
              <input type="submit" name="simpan" value="Simpan">
</form>
