<?php if (session()->has('message')) : ?>
	<div class="toast toast-top toast-end" id="toast">
		<div class="alert alert-success">
			<?= session('message') ?>
		</div>
	</div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
	<div class="toast toast-top toast-end" id="toast">
		<div class="alert alert-error">
			<svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
			<span><?= session('error') ?></span>
		</div>
	</div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
	<div class="toast toast-top toast-end" id="toast">
		<div class="alert alert-error">
			<svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
			<ul class="alert alert-error">
			<?php foreach (session('errors') as $error) : ?>
				<li><?= $error ?></li>
			<?php endforeach ?>
			</ul>
		</div>
	</div>
<?php endif ?>

<script>
	const toast = document.getElementById('toast');

	// Show the toast
	toast.classList.add('show', 'fade-in');

	// Set a timeout to hide the toast after a certain duration (e.g., 3 seconds)
	setTimeout(() => {
		toast.classList.remove('show');
		toast.classList.add('fade-out');
	}, 2000);
</script>