<!DOCTYPE html>
<html>

<?php $this->load->view('/template/head'); ?>

<body>
	<?php $this->load->view('/template/header'); ?>

	<div class="board-contents">
		<div class="board-contents-table">
			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Contents</th>
						<th>Created Time</th>
						<th>Buttons</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($list as $key => $value) { ?>
						<tr>
							<td><?= $value->idx; ?></td>
							<td><?= $value->name; ?></td>
							<td><?= $value->content; ?></td>
							<td><?= date('Y.m.d', strtotime($value->created_at)); ?></td>
							<td>
								<a href="/home/edit/<?= $value->idx; ?>">수정</a>
								<a href="/home/remove/<?= $value->idx; ?>">삭제</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>

<style type="text/css">
	.board-header {
		display: inline-flex;
		justify-content: flex-start;
		width: 100%;
		margin-bottom: 30px;
	}
	.board-header > div {
		margin-right: 10px;
	}
	.board-contents {
		text-align: center;
	}
	.board-contents-table {
		max-width: 1000px;
		width: 100%;
		margin: auto;
	}
	.board-contents-table table {
		width: 100%;
	}
	.board-contents-table table th {
		background: #E9E9E9;
		text-align: center;
		padding: 10px;
	}
	.board-contents-table table td {
		text-align: center;
		padding: 10px;
	}
</style>

<script type="text/javascript">
	
</script>