<?php
  $sql  = $this->db->query("SELECT * FROM berita ORDER BY id_berita DESC LIMIT 10");
  foreach ($sql->result_array() as $r){
  $isi_berita = htmlentities(strip_tags(nl2br($r['isi_berita']))); 
  $isi   = substr($isi_berita,0,500); 
  $isi   = phpmu(substr($isi_berita,0,strrpos($isi," ")));}

  ?>
