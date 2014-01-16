<h2>Listing <span class='muted'>News</span></h2>
<br>
<?php if ($news): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Summary</th>
			<th>Message</th>
			<th>Author id</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($news as $item): ?>		<tr>
                        <img src="/assets/img/news/<?php echo $item->image; ?>" alt="teksts">
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->summary; ?></td>
			<td><?php echo $item->message; ?></td>
			<td><?php echo $item->author_id; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('news/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						
                                                    <?php echo Html::anchor('news/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						
                                                        <?php echo Html::anchor('news/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', 
                                                                array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					
                                        </div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>
<a href="/products/create">asdasas</a>
<?php else: ?>
<p>No News.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('news/create', 'Add new News', array('class' => 'btn btn-success')); ?>

</p>
