<?php if (!defined('THINK_PATH')) exit();?><div class="col4  modSwitch">
	<div class="h">
		<h2>其它视频</h2>
		<ul class="t_tab" id="othertab">
			<li class="current"><a target="_blank"  href="<?php echo U('/other@v');?>">最新视频</a></li>
			<li><a target="_blank"   href="<?php echo U('/198@u');?>">ChinaJoy</a></li>
		</ul>
	</div>
	<div class="bline"></div>
	<div id="othercontent">
		<div   class="c">
			<?php if(is_array($othervideos)): $i = 0; $__LIST__ = $othervideos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): $mod = ($i % 2 );++$i;?><div class="col1">

				<div class="pack packc">
					<div class="pic">

						<a href="<?php echo U('/'.$video['id'].'@v');?>" title="<?php echo ($video["video_title"]); ?>"
							target="new"><img class="quic"
							src="/Public/Static/images/placeholder.png"
							lazy-src="<?php echo ($video["video_picture"]); ?>"></a><span class="vtime"
							style="display: block;"><span class="bg"></span></span>
					</div>
					<div class="txt">
						<h6 class="caption">
							<a href="<?php echo U('/'.$video['id'].'@v');?>" title="<?php echo ($video["video_title"]); ?>"
								target="new"><?php echo ($video["video_title"]); ?></a>
						</h6>

					</div>
					<div class="thumb">
						<a href="<?php echo U('/'.$video['uid'].'@u');?>" class="user"
							target="_blank"><img title="<?php echo ($video['user']['nickname']); ?>"
							  src="/Public/Static/images/placeholder.png"
							lazy-src="<?php echo ($video['user']['avatar_mid_url']); ?>"></a><a
							href="<?php echo U('/'.$video['uid'].'@u');?>" target="_blank"><?php echo ($video['user']['nickname']); ?></a>
					</div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>


		<div   class="c" style="display: none;">
			<?php if(is_array($other1videos)): $i = 0; $__LIST__ = $other1videos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): $mod = ($i % 2 );++$i;?><div class="col1">

				<div class="pack packc">
					<div class="pic">

						<a href="<?php echo U('/'.$video['id'].'@v');?>" title="<?php echo ($video["video_title"]); ?>"
							target="new"> <img class="quic"
							src="/Public/Static/images/placeholder.png"
							lazy-src="<?php echo ($video["video_picture"]); ?>"></a> <span class="vtime"
							style="display: block;"><span class="bg"></span></span>
					</div>
					<div class="txt">
						<h6 class="caption">
							<a href="<?php echo U('/'.$video['id'].'@v');?>" title="<?php echo ($video["video_title"]); ?>"
								target="new"><?php echo ($video["video_title"]); ?></a>
						</h6>

					</div>
					<div class="thumb">
						<a href="<?php echo U('/'.$video['uid'].'@u');?>" class="user"
							target="_blank"><img title="<?php echo ($video['user']['nickname']); ?>"
							src="/Public/Static/images/placeholder.png"
							lazy-src="<?php echo ($video['user']['avatar_mid_url']); ?>"></a><a
							href="<?php echo U('/'.$video['uid'].'@u');?>" target="_blank"><?php echo ($video['user']['nickname']); ?></a>
					</div>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>

		 
	</div>
</div>