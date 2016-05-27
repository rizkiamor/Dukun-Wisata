<div class="container">
			<ul class="content-columns">
        <?php
				require_once"../private/db/conn.php";
				$pdo=$amorpdo->prepare("select* from posting ORDER BY TGL_POST DESC LIMIT 3");
				$pdo->execute();
        //$gambar = array('../public/img/kartini.jpg','../public/img/kartini.jpg','../public/img/kartini.jpg','../public/img/kartini.jpg','../public/img/kartini.jpg','../public/img/kartini.jpg');
        foreach ($pdo as $g) {
				$isi = $g['ISI_POST'];
				$cetak_isi = substr($isi,0,95);
        ?>
				<li>
					<article class="boxeda">
						 <img src="<?php echo $g['FOTO']; ?>" alt="">
						 <div class="description">
						 	<h3><?php echo $g['JUDUL_POST'];?></h3>
						 	<p><?php echo $cetak_isi; ?>...</p>
								<p><div class="kmenu"><button value="<?php echo $g['ID_POST']; ?>" onclick="baca(this.value)"><i class="fa fa-list"></i></button></div></p>
						 </div>
					</article>
				</li>
        <?php } ?>
  			</ul>
		</div>
