<h2>Golongan</h2>

<a href="<?php echo URL; ?>/golongan/input" class="btn">Input Pelanggan</a>

<table>
<thead>

      <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>NAME</th>
            <th>EDIT</th>
      </tr>
</thead>
<tbody>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['gol_kode']; ?></td>
                  <td><?php echo $row['gol_name']; ?></td>
                  <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn">Edit</a></td>
            </tr>
      <?php $no++;
      } ?>
</tbody>

</table>