<head>
<script>
	require(["require.config"], function() {
		require(["pages/install"])
	});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/install.css" rel="stylesheet">
</head>

<section class="install-hero">
	<div class="container-fluid background">
		<div class="top-header top-header--center">
			<h1 class="text--center"><?php echo $l->t('This is the first step to secure your data.');?></h1>
			<h2 class="text--center"><?php echo $l->t('From the menu above choose what you want to download.');?></h2>
	</div>
	</div>
</section>

<section class="toggle-menu">
	<span class="toggle-menu__entry toggle-menu__entry--active"><?php echo $l->t('Server');?></span>
	<span class="toggle-menu__entry"><?php echo $l->t('Desktop Clients');?></span>
	<span class="toggle-menu__entry"><?php echo $l->t('Mobile Clients');?></span>
</section>

<section class="downloads-container" id="serverDownloads">
	<div class="container server-wrapper">
		<div class="col-lg-4">
			<div class="usefull-links">
				<span class="usefull-links__title"><?php echo $l->t('Usefull Links');?></span>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('How to install Nextcloud on my server');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('Upgrade manual');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('You need enterprise support');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('Check Package integrity using MD5');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('I want to extend my Nextcloud');?></a>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="server-wrapper__download">
				<span class="server-wrapper__download__title"><?php echo $l->t('Zip archive');?></span>
				<span class="server-wrapper__download__description"><?php echo $l->t('The archive should be extracted in a
				 folder your web server has access to.');?></span>
			 	<a class="btn-primary" href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>">Get Nextcloud</a>
				<div class="server-wrapper__download__options">
					<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('instalation guide');?></a>
					<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
				</div>
			</div>
		</div>

	<div class="col-lg-8">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Web installer');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The Web Installer is the easiest way to install Nextcloud on a web space. It checks the dependencies, downloads Nextcloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the Nextcloud installer.');?></span>
			<a class="btn-primary" href="#">Get Nextcloud</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('instalation guide');?></a>
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
			</div>
		</div>
	</div>

	<div class="col-lg-8">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Virtual Machine');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The official Nextcloud appliance, provided by Tech and Me, is the easiest way for less technical users to get Nextcloud up and running. It builds on Ubuntu Linux and is fully set up and configured with a secure connection. Grab the Nextcloud virtual machine image from the Tech and Me website:');?></span>
			<a class="btn-primary" href="#">Tech and Me</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Source Code');?></a>
			</div>
		</div>
	</div>
</div>
</section>

<section class="downloads-container" id="serverDownloads">
	<div class="container server-wrapper">
		<div class="col-lg-4">
			<div class="usefull-links">
				<span class="usefull-links__title"><?php echo $l->t('Usefull Links');?></span>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('How to install Nextcloud on my server');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('Upgrade manual');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('You need enterprise support');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('Check Package integrity using MD5');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('I want to extend my Nextcloud');?></a>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="server-wrapper__download">
				<span class="server-wrapper__download__title"><?php echo $l->t('Zip archive');?></span>
				<span class="server-wrapper__download__description"><?php echo $l->t('The archive should be extracted in a
				 folder your web server has access to.');?></span>
			 	<a class="btn-primary" href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>">Get Nextcloud</a>
				<div class="server-wrapper__download__options">
					<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('instalation guide');?></a>
					<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
				</div>
			</div>
		</div>

	<div class="col-lg-8">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Web installer');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The Web Installer is the easiest way to install Nextcloud on a web space. It checks the dependencies, downloads Nextcloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the Nextcloud installer.');?></span>
			<a class="btn-primary" href="#">Get Nextcloud</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('instalation guide');?></a>
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
			</div>
		</div>
	</div>

	<div class="col-lg-8">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Virtual Machine');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The official Nextcloud appliance, provided by Tech and Me, is the easiest way for less technical users to get Nextcloud up and running. It builds on Ubuntu Linux and is fully set up and configured with a secure connection. Grab the Nextcloud virtual machine image from the Tech and Me website:');?></span>
			<a class="btn-primary" href="#">Tech and Me</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Source Code');?></a>
			</div>
		</div>
	</div>
</div>
</section>

<section class="downloads-container" id="desktopDownloads">
	<div class="container server-wrapper">
		<div class="col-lg-4">
			<div class="usefull-links">
				<span class="usefull-links__title"><?php echo $l->t('Usefull Links');?></span>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('How to install Nextcloud on my server');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('Upgrade manual');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('You need enterprise support');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('Check Package integrity using MD5');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('I want to extend my Nextcloud');?></a>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="server-wrapper__download">
				<span class="server-wrapper__download__title"><?php echo $l->t('desktop client');?></span>
				<span class="server-wrapper__download__description"><?php echo $l->t('The archive should be extracted in a
				 folder your web server has access to.');?></span>
			 	<a class="btn-primary" href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>">Get Nextcloud</a>
				<div class="server-wrapper__download__options">
					<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('instalation guide');?></a>
					<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
				</div>
			</div>
		</div>

	<div class="col-lg-8">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Web installer');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The Web Installer is the easiest way to install Nextcloud on a web space. It checks the dependencies, downloads Nextcloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the Nextcloud installer.');?></span>
			<a class="btn-primary" href="#">Get Nextcloud</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('instalation guide');?></a>
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
			</div>
		</div>
	</div>

	<div class="col-lg-8">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Virtual Machine');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The official Nextcloud appliance, provided by Tech and Me, is the easiest way for less technical users to get Nextcloud up and running. It builds on Ubuntu Linux and is fully set up and configured with a secure connection. Grab the Nextcloud virtual machine image from the Tech and Me website:');?></span>
			<a class="btn-primary" href="#">Tech and Me</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Source Code');?></a>
			</div>
		</div>
	</div>
</div>
</section>

<section class="downloads-container" id="mobileDownloads">
	<div class="container server-wrapper">
		<div class="col-lg-4">
			<div class="usefull-links">
				<span class="usefull-links__title"><?php echo $l->t('Usefull Links');?></span>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('How to install Nextcloud on my server');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('Upgrade manual');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('You need enterprise support');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('Check Package integrity using MD5');?></a>
				<a class="usefull-links__link" href="void(0)"><?php echo $l->t('I want to extend my Nextcloud');?></a>
			</div>
		</div>

		<div class="col-lg-8">
			<div class="server-wrapper__download">
				<span class="server-wrapper__download__title"><?php echo $l->t('mobile');?></span>
				<span class="server-wrapper__download__description"><?php echo $l->t('The archive should be extracted in a
				 folder your web server has access to.');?></span>
			 	<a class="btn-primary" href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>">Get Nextcloud</a>
				<div class="server-wrapper__download__options">
					<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('instalation guide');?></a>
					<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
				</div>
			</div>
		</div>

	<div class="col-lg-8">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Web installer');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The Web Installer is the easiest way to install Nextcloud on a web space. It checks the dependencies, downloads Nextcloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the Nextcloud installer.');?></span>
			<a class="btn-primary" href="#">Get Nextcloud</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('instalation guide');?></a>
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
			</div>
		</div>
	</div>

	<div class="col-lg-8">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Virtual Machine');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The official Nextcloud appliance, provided by Tech and Me, is the easiest way for less technical users to get Nextcloud up and running. It builds on Ubuntu Linux and is fully set up and configured with a secure connection. Grab the Nextcloud virtual machine image from the Tech and Me website:');?></span>
			<a class="btn-primary" href="#">Tech and Me</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Source Code');?></a>
			</div>
		</div>
	</div>
</div>
</section>
