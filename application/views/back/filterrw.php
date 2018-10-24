<option selected disabled>Pilih Terlebih Dahulu</option>
<?php 
$post = $this->input->post('kelu');
$rw = $this->db->query('SELECT * FROM data where kelurahan="'.$post.'" Group By rw')->result();
foreach ($rw as $key): ?>
	<option value="<?=$key->rw?>"><?=$key->rw?></option>
<?php endforeach ?>
