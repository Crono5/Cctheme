<?php 

if(!isset($_GET['pag']))
{
	$limitei = 0;
	$limitef = 0;
	$paginacion = 1;
	$paginacion1 = 4;
}
else
{
	$limitei = $_GET['pag'];
	$limitef = 11;
	
	if($_GET['pag'] >= 4)
	{
		$paginacion = $_GET['pag'] - 1;
		$paginacion1 = $_GET['pag'] + 2;;
	}
	else
	{
		$paginacion = 1;
		$paginacion1 = 4;
	}
}

//$sql = db_query('SELECT * FROM smf_messages ORDER BY smf_messages . ID_TOPIC DESC LIMIT '.$limitei * $limitef. ' , 11',__FILE__, __LINE__);

foreach($context['normal_posts'] as $np)
{
	
	/*$coment = db_query("SELECT * FROM smf_comentarios WHERE id_post = {$fila['ID_TOPIC']}",__FILE__, __LINE__);
	$num_coment = mysql_num_rows($coment);
	$puntos = db_query("SELECT * FROM smf_puntos WERE id_post = {$fila['ID_TOPIC']}",__FILE__, __LINE__);*/
	
	$vistas = db_query("SELECT * FROM smf_topics WHERE ID_TOPIC = {$np['id']}",_FILE__, __LINE__);
	$imgpost = db_query("SELECT * FROM smf_messages WHERE ID_TOPIC = {$np['id']}",_FILE__, __LINE__);
	
	$imgpost = mysql_fetch_array($imgpost);
?>
<div class="row destacados" id="postHome">
		      <div class="span2" id="tumbHome">
				<ul class="thumbnails">
					<li class="thumbnail">
						<a href="<?php echo $url.'?topic='.$np['id']; ?>">
						<img src="<?php if($imgpost['img_post'] == NULL){echo $settings['images_url'].'/post/icono_'.$np['id_category'].'.png';}else{echo 'thum/'.$imgpost['img_post'];}  ?>" alt=""></a>
						<div class="caption" id="userTumbHome">
              			<h5><i class="icon-user"></i> <strong><a href="<?php echo $url.'?action=profile;user='.$np['user']; ?>"><?php echo $np['user']; ?></a></strong></h5>
              			</div>
					</li>
				</ul>
			  </div>
			  <div class="span4" id="infoPostH">
					<h3 id="tituloPostHome"><a href="<?php echo $url.'?topic='.$np['id']; ?>"><?php echo censorText($np['title']) ?></a></h3>
					<p><?php if($imgpost['des_post'] == NULL){ echo substr($imgpost['body'], 0, 140);}else{echo $imgpost['des_post'];} ?></p>
					<div class="row">
						<div class="span1" id="datosPost">
						<i class="icon-eye-open"></i> <strong><?php $vistas = mysql_fetch_array($vistas); echo $vistas['numViews']; ?></strong>						
						</div>
						<div class="span1" id="datosPost">
						<i class="icon-heart"></i> 
						<strong><?php echo $np['points']; ?></strong>				
						</div>
						<div class="span1" id="datosPostFecha">
						<i class="icon-time"></i>
						<strong>
							<?php echo date("d/m/y/W",$np['date']);
							
							if($imgpost['id_fecha'] == NULL)
							{
								$idfecha = $np['id'];
								$fechacomp = date("d.m.y.W",$np['date']);
								$mes = date("m",$np['date']);
								$semana = date("W",$np['date']);
								$dia = date("d",$np['date']);
								$ano = date("y",$np['date']);
								
								//echo ' - '.$idfecha.' - '.$fechacomp.' - '.$mes .' - '.$semana .' - '. $dia. ' - '. $ano;
								
								db_query("UPDATE smf_messages SET id_fecha = '$idfecha' WHERE ID_TOPIC = '$idfecha'",_FILE__,__LINE__);
								
								db_query("INSERT INTO smf_fechas(id_fecha,dia,semana,mes,ano,fecha_completa) VALUES('$idfecha','$dia','$semana','$mes','$ano','$fechacomp')",_FILE__,__LINE__);
							
							}
							?>
							
							</strong>
						</div>
						<div class="span1" id="datosPost">
						<i class="icon-comment"></i><strong> <?php echo $np['comments']; ?></strong>
						</div>
						
					</div>
				</div>		
</div>

<?php 
}
?>

<div class="pagination">
				  <ul>
				    <li><a href="#">Prev</a></li>
				    <?php for($i=$paginacion; $i <= $paginacion1; $i++)
				    { ?>
				    <li class="<?php if(!isset($_GET['pag'])&& $i == 1){echo 'active';}elseif($i == $_GET['pag']){echo 'active';} ?>"><a href="<?php if($i == 1){echo $url.'index.php';}else{echo $url.'?pag='.$i;}?>"><?php echo $i; ?></a></li>
				    <?php } ?>
				    <li><a href="#">Next</a></li>
				  </ul>
				  </div>