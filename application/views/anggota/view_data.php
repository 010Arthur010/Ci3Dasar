<a href="<?= base_url('anggota/tambah'); ?>"> Tambah Anggota Baru
</a>
<table>
       <th>ANGGOTA</th>
       <th>ALAMAT</th>
       <th>UBAH</th>
       <th>HAPUS</th>
       <?php foreach ($anggota as $a) : ?>
              <tr>
                     <td><?= $a['anggota'] ?></td>
                     <td><?= $a['alamat'] ?></td>
                     <td><a href="<?= site_url('anggota/get_edit/' . $a['idanggota']); ?>"> UBAH
                            </a>
                     </td>
                     <td><a href="<?= site_url('anggota/hapus/' . $a['idanggota']); ?>"> HAPUS
                            </a>
                     </td>
              </tr>
       <?php endforeach; ?>
</table>