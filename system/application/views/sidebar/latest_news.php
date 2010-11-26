<div id="side_news">
				<img src="<?=base_url()?>images/titles/latest_news.png" width="149px" height="16px">
				
				<?php foreach($latest_news as $newsrow):?>
				<div id="teaser">
				<?php 
				$newsid = $newsrow->menu;
				$shortnews = substr($newsrow->title, 0,150);
				//$shortnews = strip_tags($shortnews);
				echo $shortnews;
				echo "<br/><br/>";
				
				?>
				</div>
				
				<div id="news_link">
				<a class="more_button" href="<?=base_url()?>news/viewitem/<?=$newsid?>">More</a>
				</div>
				<?php endforeach; ?>
			</div>
			