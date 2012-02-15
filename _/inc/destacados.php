<?php
	$request = db_query("SELECT coms.id_post ,mess.ID_TOPIC FROM {$db_prefix}comentarios AS coms, {$db_prefix}messages AS mess WHERE coms.id_post = mess.ID_TOPIC", __FILE__, __LINE__);
	$context['cantidadcoment'] = mysql_num_rows($request);
	
	function ordenamay($datos)
	{
		$n = sizeof($datos);
		$datos1 = $datos; 
		$aux = '';
		for($j = 1; $j <= $n; $j++)
		{
			for($i = 1; $i <= $n; $i++)
			{
				if($datos[$j]['posterName'] == $datos[$i]['posterName'])
				{
					$datos[$j]['puntos'] += $datos[$i]['puntos'];
					$datos[$i]['posterName'] = $datos[$j+1]['posterName'];
					$datos[$i]['puntos'] = $datos[$j+1]['puntos'];
					$n--;
				}
			}
		}
		return $datos;
	}
?>

<div class="row widgetBloqueHome" id="destacados">
				<h2 id="titulosWidgetSidebar">Estadística</h2>
				<div class="row" id="infoHomeStats">
					<div class="span3" id="userInfo">
					<h3>Usuarios</h3>
					<div class="row">
						<div class="span3">
							<div class="span1" id="registradosData">
								<strong>Registrados</strong>
								<h4 id="h4Home"><?php echo $context['common_stats']['total_members']; ?></h4>
							</div>
							<div class="span1" id="registradosOnline">
								<strong>Online</strong>
								<h4 id="h4Home"><?php echo $context['num_guests'] + $context['num_users_online']; ?></h4>
							</div>
						</div>
						<div class="row">
					<div class="span3" id="ulUsuarioRegistrado">
							<strong>Último usuario registrado</strong>
								<h4 id="h4Home"><?php echo $context['common_stats']['latest_member']['link']; ?></h4>
						</div>
					</div>
					</div>
					
				</div> 
				<div class="span3" id="userPost">
					<h3>Publicaciones</h3>
					<div class="row">
						<div class="span3">
							<div class="span1" id="registradosData">
								<strong>Post</strong>
								<h4 id="h4Home"><?php echo $context['common_stats']['total_topics']; ?></h4>
							</div>
							<div class="span1" id="registradosOnline">
								<strong>Mensajes</strong>
								<h4 id="h4Home"><?php echo $context['cantidadcoment']; ?></h4>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="span3" id="usuarioRegistrado">
							<strong>Comentarios</strong>
								<h4 id="h4Home"><?php echo $context['cantidadcoment']; ?></h4>
						</div>
					</div>
					
					</div>
				</div>
				<div class="row" id="rankGenenral">
				
					<h3>Ranking General</h3>
					<div class="row" id="filtroHome">
<div class="span4"><h4>Ranking General <small>Los post con más puntos</small></h4></div>
<div class="span2" id="dropDHome">
<div class="btn-group">
<a class="btn" href="#">Día</a>
<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
<span class="caret"></span>
</a>
<ul class="dropdown-menu">
<li><a href="#">Semana</a></li>
<li><a href="#">Mes</a></li>
<li><a href="#">Año</a></li>
</ul>
</div>	
</div>	
</div>
					<table class="table table-striped">
        <thead>
          <tr>
          	<th>Título</th>
            <th>Puntos</th>
          </tr>
         </thead>
         <?php
         $max_puntos = db_query('SELECT * FROM smf_topics ORDER BY puntos DESC LIMIT 0 , 5',__FILE__, __LINE__); 
		 while($fila = mysql_fetch_array($max_puntos))
         { 
         	$postmp = db_query("SELECT * FROM smf_messages WHERE ID_TOPIC = {$fila['ID_TOPIC']}",_FILE__, __LINE__);
			$postmp = mysql_fetch_array($postmp);
         	?>
          <tr>
          	<td><a href="<?php echo $url.'?topic='.$fila['ID_TOPIC']; ?>"><?php echo $postmp['subject']; ?></a></td>
          	<td><?php echo $fila['puntos']; ?></td>
          </tr>
          
          <?php } ?>
           </tbody>
      </table>
      
<div class="row" id="filtroHome">
<div class="span4"><h4>Ranking General <small>Los post con más puntos</small></h4></div>
<div class="span2" id="dropDHome">
<div class="btn-group">
	<a class="btn" href="#">Día</a>
	<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
	<span class="caret"></span>
	</a>
	<ul class="dropdown-menu">
	<li><a href="#">Semana</a></li>
	<li><a href="#">Mes</a></li>
	<li><a href="#">Año</a></li>
</ul>
</div>	
</div>	
</div>
					<table class="table table-striped">
        <thead>
          <tr>
          	<th>Título</th>
            <th>Puntos</th>
          </tr>
         </thead>
          <?php 
          	$mes = date('m');
			$ano = date('y');
          	$dia = date('d');
			$semana = date('W');
			
          	$postdehoy = db_query("SELECT smf_messages.posterName, smf_topics.puntos
								FROM smf_fechas, smf_messages, smf_topics
								WHERE smf_fechas.dia =  '14'
								AND smf_fechas.mes =  '$mes'
								AND smf_fechas.ano =  '$ano'
								AND smf_messages.ID_TOPIC = smf_fechas.id_fecha
								AND smf_topics.ID_TOPIC = smf_messages.ID_TOPIC
								ORDER BY  smf_topics.puntos DESC ",_FILE__, __LINE__);
			
			$num_resultados = mysql_num_rows($postdehoy);
			
			global $aux, $sump, $i, $datos;
			
			$datos = array();
			$i = 1;
			$aux = '';
			$sump = 0;
			while($fila = mysql_fetch_array($postdehoy))
			{
				$datos[$i] = $fila;
				$i++; 
			}
			
			//print_r($datos);
			
			//echo '<br><br><br><br><br><br>'.sizeof($datos).'<br><br><br><br><br><br>';
			
			
			$datosn = array();
			
			$n = sizeof($datos);
			
			$datosn[1]['user'] = $datos[1]['posterName'];
			$datosn[1]['puntos'] = $datos[1]['puntos'];
			
			for($j = 1; $j <= $n; $j++)
			{
				
				for($i = 2; $i <= $n; $i++)
				{
					
					if($datosn[$j]['user'] == $datos[$i]['posterName'])
					{
						$datosn[$j]['puntos'] += $datos[$i]['puntos'];
						$datos[$i]['posterName']='';
						$datos[$i]['puntos'] = '';
						//unset($datos[$i+1]);
						//$n--; $i--;
					}
					else
					{
						$datosn[$j+1]['user'] = $datos[$i]['posterName'];
						$datosn[$j+1]['puntos'] = $datos[$i]['puntos'];
					}
				}
			}
			
			print_r($datosn);
			
			$n = sizeof($datosn);
			
			unset($datos[$n]);
			
			$n = sizeof($datosn);
		
		   for($i = 1; $i <= $n; $i++)
		   {?>
		   	
		   	<tr>
          	<td>
          		<a href="<?php echo $url.'?action=profile;user='.$datos[$i]['posterName']; ?>"><?php echo $datos[$i]['posterName']; ?></a>
          	</td>
          	<td>
          		<?php echo $datos[$i]['puntos']; ?>
          	</td>
          </tr>
		   	
		  <?php } ?>
           </tbody>
      </table>
      </div>
			</div>
