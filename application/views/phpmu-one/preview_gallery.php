<?php
$random2 = $this->db->query("SELECT * FROM gallery order by id_gallery DESC LIMIT 6");
		foreach ($random2->result_array() as $r2){;
			echo    "<div class='col-lg-4 col-md-4 col-xs-6 thumb'>
                            <img src='".base_url()."asset/img_galeri/$r2[gbr_gallery]' class='img-fluid img-thumbnail popup'/>
                     </div>";
        };
?>
