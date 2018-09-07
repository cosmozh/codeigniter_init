<!DOCTYPE html>
<html>

<?php $this->load->view('/template/head'); ?>

<body>
	<?php $this->load->view('/template/header'); ?>

	<div class="board-edit">
		<form action="/home/update/<?= $selected[0]->idx; ?>" method="post">
			<div>
				<div>
					<span>글제목</span>
				</div>
				<div>
					<input type="text" name="name" value="<?= $selected[0]->name; ?>">
				</div>
			</div>
			<div>
				<div>
					<span>내용</span>
				</div>
				<div>
					<input type="text" name="content" value="<?= $selected[0]->content; ?>">
				</div>
			</div>
			<div>
				<button type="submit">Modify</button>
			</div>
		</form>
	</div>
</body>
</html>

<style type="text/css">
	
</style>

<script type="text/javascript">
	
</script>