<a href="<?= base_url('buku/tambah'); ?>"> Tambah Buku Baru
</a>
<table border="2">
       <th>JUDUL</th>
       <th>PENERBIT</th>
       <th>PENGARANG</th>
       <th>UBAH</th>
       <th>HAPUS</th>
       <?php foreach ($judul as $a) : ?>
              <tr>
                     <td><?= $a['judul'] ?></td>
                     <td><?= $a['penerbit'] ?></td>
                     <td><?= $a['pengarang'] ?></td>
                     <td><a href="<?= site_url('buku/get_edit/' . $a['id']); ?>"> UBAH
                            </a>
                     </td>
                     <td><a href="<?= site_url('buku/hapus/' . $a['id']); ?>"> HAPUS
                            </a>
                     </td>
              </tr>
       <?php endforeach; ?>
</table>