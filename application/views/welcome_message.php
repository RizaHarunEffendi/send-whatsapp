<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html> -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('form'); ?>/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('form'); ?>/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('form'); ?>/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('form'); ?>/css/style.css">

    <title>Login #8</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="<?= base_url('form'); ?>/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Send Message <strong>Whatsapp Gateway</strong></h3>
                                <p class="mb-4">Cara Mudah Kirim Pesan Whatsapp</p>
                            </div>
                            <form action="<?= base_url('Welcome/send'); ?>" method="post">
                                <div class="form-group first">
                                    <label for="tujuan">No Tujuan</label>
                                    <input type="text" class="form-control" name="tujuan" id="tujuan">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="message">Message</label>
                                    <input type="text" class="form-control" name="message" id="message">

                                </div>

                                <input type="submit" value="Kirim" class="btn text-white btn-block btn-primary">
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="<?= base_url('form'); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('form'); ?>/js/popper.min.js"></script>
    <script src="<?= base_url('form'); ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url('form'); ?>/js/main.js"></script>
	<script>
		<?php if($this->session->flashdata('success')){ ?>
			alert("Berhasil Kirim Pesan");
		<?php } ?>
	</script>
</body>

</html>