<div class="wrap-share-btn">
	<div class="title-share-btn"><?= pll__('Поделиться:')?></div>
	<div class="share-buttons">					
		<div class="wrap-social border-biruse">
			<a class="twitter" href="https://twitter.com/share?url=<?= get_the_title()?>&text=<?= get_the_title()?>" title="Twitter" target="_blank">
				<span class="screen-reader-text">
					<img src="<?= get_template_directory_uri()?>/images/twitter.svg" />
				</span>
			</a>
		</div>
		<div class="wrap-social border-red">
			<a class="google" href="https://plus.google.com/share?url=<?= get_the_title()?>&title=<?= get_the_title()?>" title="Google+" target="_blank">
				<span class="screen-reader-text">
					<img src="<?= get_template_directory_uri()?>/images/google-plus.svg" />
				</span>
			</a>
		</div>
		<div class="wrap-social border-red">
			<a class="pinterest pinit-marklet" href="https://www.pinterest.ru/pin/create/bookmarklet/?media=<?= get_the_title()?>" title="Pinterest" target="_blank" data-pin-config="above" data-pin-do="buttonBookmark">
				<span class="screen-reader-text">
					<img src="<?= get_template_directory_uri()?>/images/pinterest.svg" />
				</span>
			</a>
		</div>
		<div class="wrap-social border-transparent">
			<a class="facebook" href="http://www.facebook.com/sharer.php?u=<?= get_the_title()?>&t=<?= get_the_title()?>" title="Facebook" target="_blank">
				<span class="screen-reader-text"><img src="<?= get_template_directory_uri()?>/images/facebook.svg" /></span>
			</a>
		</div>
		<div class="wrap-social border-blue">
			<a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= get_the_title()?>&title=<?= get_the_title()?>" title="LinkedIn" target="_blank">
				<span class="screen-reader-text">
					<img src="<?= get_template_directory_uri()?>/images/linkedin.svg" />
				</span>
			</a>
		</div>
	</div>