<div id="media-upload-header">
	<ul id='sidemenu'>
		<li id='tab-search'><a href='<?php echo admin_url("admin.php?action=wpfp_media_upload&post_id={$_GET['post_id']}&type=image&mode=search&tab=search") ?>' <?php if ($_GET['mode']=='search') { echo "class='current'"; }?>><?php echo __('Search(List)', FlickrPress::TEXT_DOMAIN) ?></a></li>
		<li id='tab-search_thumbnail'><a href='<?php echo admin_url("admin.php?action=wpfp_media_upload&post_id={$_GET['post_id']}&type=image&mode=search_thumbnail&tab=search_thumbnail") ?>' <?php if ($_GET['mode']=='search_thumbnail') { echo "class='current'"; }?>><?php echo __('Search(Thumbnail)', FlickrPress::TEXT_DOMAIN) ?></a></li>
	</ul>
</div>
