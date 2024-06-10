<?php
				foreach ($rss->result_array() as $row) {
					$isi = $row['isi_berita']; 
					fwrite($file, "<item>
						                <title>".cetak_meta($row['judul'],0,255)."</title>
						                <link>".base_url()."berita/detail/$row[judul_seo]</link>
						                <description>".strip_tags(html_entity_decode($isi))."</description>
					                </item>");
				}
?>