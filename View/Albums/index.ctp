<h2><?php echo __d('gallery','Albums');?></h2>
<?php if(count($albums) == 0): __d('gallery','No albums found.'); else: ?>
<style>
.albums ul li {
	margin:0px 0px 5px 10px;
	display:block;
	clear:both;
	list-style:none;
	padding:0px;
}
</style>
<div class="albums">
<ul>
<?php foreach($albums as $album): ?>
	<li>
		<h3><?php echo $album['Album']['title']; ?></h3>
		<p><?php echo $this->Html->image('photos/'.$album['Photo'][0]['small'], array('style' => 'float:left;margin:5px 5px 5px 0px;')); ?><?php echo $album['Album']['description']; ?></p>
		<?php echo $this->Html->link(__d('gallery','view album'), array('plugin' => 'gallery', 'controller' => 'albums', 'action' => 'view', 'slug' => $album['Album']['slug'])); ?>
	</li>
<?php endforeach; ?>
</ul>
</div>
<?php endif; ?>
<div class="paging"><?php echo $this->Paginator->numbers(); ?></div>
