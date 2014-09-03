<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div class="s5_calendar"></div>
<div class="s5_calendar_descp">
<?php if ($params->get('item_title')) : ?>
	<div class="s5_calendar_title">
	<?php if ($params->get('link_titles') && $item->linkOn != '') : ?>
		<a href="<?php echo $item->linkOn;?>" class="contentpagetitle<?php echo $params->get( 'moduleclass_sfx' ); ?>">
			<?php echo $item->title;?></a>
	<?php else : ?>
		<?php echo $item->title; ?>
	<?php endif; ?>


	</div>

<?php endif; ?>

<?php if (!$params->get('intro_only')) :
	echo $item->afterDisplayTitle;
endif; ?>

<?php echo $item->beforeDisplayContent; ?>
<?php echo $item->text; ?>


      <?php if (isset($item->linkOn) && $item->readmore && $params->get('readmore')) :
	      echo '<br/><a class="readmore" href="'.$item->linkOn.'">'.$item->linkText.'</a>';
        endif; ?>

</div>
<div style="clear:both;"></div>