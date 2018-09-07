<!DOCTYPE html>
<html>

<?php $this->load->view('/template/head'); ?>

<body>
	<?php $this->load->view('/template/header'); ?>

	<div class="board-new">
		<form action="/home/create" method="post">
			<div>
				<div>
					<span>글제목</span>
				</div>
				<div>
					<input type="text" name="name">		
				</div>
			</div>
			<div>
				<div>
					<span>내용</span>
				</div>
				<div>
					<input type="text" name="content">		
				</div>
			</div>
			<div>
				<button type="submit">Write</button>
			</div>
		</form>
	</div>
</body>
</html>

<style type="text/css">
	
</style>

<script type="text/javascript">
	
</script>