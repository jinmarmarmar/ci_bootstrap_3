<?php $this->load->view('email/header'); ?>

<p>This email is sent automatically from <a href="<?php echo site_url(); ?>">CI Bootstrap Website</a>.</p>

<table>
<?php foreach ($data as $key => $value) { ?>
	<tr>
		<td><strong><?php echo humanize($key); ?>: </strong></td>
		<td><?php echo $value; ?></td>
	</tr>
<?php } ?>
</table>

<?php $this->load->view('email/header'); ?>