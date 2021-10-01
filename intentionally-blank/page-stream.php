<?php
get_header();
$assets_uri = get_template_directory_uri() . '/assets/';
wp_enqueue_style('frontend', $assets_uri . 'css/frontend.css', array(), rand(1, 999999));

$iId = $_GET['id'];
$sTitle = get_field('stream_title', $iId);
$sDateStart = get_field('stream_date_start', $iId);
$sDateEnd = get_field('stream_date_end', $iId);
$sStartTime = get_field('stream_start_time', $iId);
$sEndTime = get_field('stream_end_time', $iId);
$sStreamLink = get_field('stream_link', $iId);
if(strpos($sStreamLink, 'youtu.be') !== false){
    $sStreamLink = str_replace('youtu.be/','www.youtube.com/embed/', $sStreamLink);
}else if(strpos($sStreamLink, 'youtube.com/watch?v=') !== false){
    $sStreamLink = str_replace('www.youtube.com/watch?v=','www.youtube.com/embed/', $sStreamLink);
}

$sStreamKey = explode('?v=', $sStreamLink);
$sStreamKey = $sStreamKey[1];

?>

<div class="broadcast__header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-3 col-lg-push-9">
				<p class="small">
					<b>Начало:</b> <?=$sDateStart?> | <?=$sStartTime?>
				</p>
				<p class="small">
					<b>Окончание:</b> <?=$sDateEnd?> | <?=$sEndTime?>
				</p>
			</div>
			<div class="col-xs-12 col-lg-9 col-lg-pull-3">
				<div class="broadcast__type">
					Прямой эфир с экспертом
				</div>
				<h1>
					«<?=$sTitle?>»
				</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="broadcast__video">
		<div class="embed-responsive embed-responsive-16by9">
<!--		  	<iframe class="embed-responsive-item" width="640" height="360" src="//play.live.dfw.ru/stream/id1066/3003.html" -->
<!--                    frameborder="0" border="0" allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling="no"></iframe>-->
            <iframe class="embed-responsive-item" width="640" height="360" src="<?=$sStreamLink?>"
                    frameborder="0" border="0" allowfullscreen webkitallowfullscreen mozallowfullscreen scrolling="no"></iframe>
		</div>
	</div>
	<div class="broadcast__chat">
		<h2 class="section-title">
			<span class="fa-stack"><i class="fa crcle fa-stack-2x" aria-hidden="true"></i><i class="fa fa-comments fa-stack-1x" aria-hidden="true"></i></span>Чат
		</h2>
		<p>
			Представьтесь, чтобы войти в чат
		</p>
		<div class="form-inline">
			<input type="text" class="form-control" placeholder="Ваше имя">
			<button class="btn btn-theme">
				Войти в чат
			</button>
		</div>
	</div>
</div>
<?php
get_footer();
?>
