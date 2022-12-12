<style>
	td {
		padding: 5px 10px;
	}
</style>
<a class="link_function" href="/views/create.php">
	<div class="button__bg"></div>
	<span>Добавить</span>
</a>
<table class="table">
	<thead class="table__header">
		<tr>
			<th>Type</th>
			<th>Title</th>
			<th>Size</th>
			<th>Description</th>
			<th>Price</th>
			<th>Image</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php
        require_once './scripts/type_name.php';
		foreach ($products as $item) : ?>
			<tr>
				<td><?= get_name($item['type_is']) ?></td>
				<td><?= $item['title'] ?></td>
				<td><?= $item['size'] ?></td>
				<td><?= $item['description'] ?></td>
				<td><?= $item['price'] ?></td>
				<td><?= $item['img_name'] ?></td>

				<td>
					<a class="link_function" href='/scripts/delete_product.php?
					id=<?= $item['id'] ?>'>
						<div class="button__bg"></div>
						<span>Удалить</span>
					</a>

					<a class="link_function" href='/views/update.php
					?id=<?= $item['id'] ?>
					'>
						<div class="button__bg"></div>
						<span>Редактировать</span>
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>