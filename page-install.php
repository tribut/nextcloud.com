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
		<div class="circles" id="circles">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
	</div>

	<div class="circles" id="circles">
	<div class="circle"></div>
	<div class="circle"></div>
	<div class="circle"></div>
	<div class="circle"></div>
</div>

<div class="circles" id="circles">
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
<div class="circle"></div>
</div>
		<div class="top-header top-header--center">
			<h1 class="text--center"><?php echo $l->t('This is the first step to secure your data.');?></h1>
			<h2 class="text--center"><?php echo $l->t('From the menu above choose what you want to download.');?></h2>
	</div>
	</div>
</section>

<section class="download-type">
	<div class="container">
		<div class="col-lg-4">
			<h1>Get Nextcloud Server</h1>
			<p>There are several ways to get your own nextcloud for you and for your data</p>
			<a class="btn-primary" href="#"></a>
		</div>

		<div class="col-lg-4">
			<h1>Get Nextcloud Server</h1>
			<p>There are several ways to get your own nextcloud for you and for your data</p>
		</div>
	</div>
</section>

<!-- <section class="toggle-menu">
	<span class="toggle-menu__entry toggle-menu__entry--active" id="server"><?php echo $l->t('Server');?></span>
	<span class="toggle-menu__entry" id="desktop"><?php echo $l->t('Desktop Clients');?></span>
	<span class="toggle-menu__entry" id="mobile"><?php echo $l->t('Mobile Clients');?></span>
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
			 	<a class="btn-primary" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>">Get Nextcloud</a>
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
			<a class="btn-primary" href="https://download.nextcloud.com/server/installer/setup-nextcloud.php">Get Nextcloud</a>
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
			<a class="btn-primary" href="https://www.techandme.se/nextcloud-vm/">Tech and Me</a>
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

		<div class="col-lg-8" id="windows-client">
			<div class="server-wrapper__download">
				<span class="server-wrapper__download__title"><?php echo $l->t('Windows Client');?></span>
				<span class="server-wrapper__download__description"><?php echo $l->t('Use the desktop clients to keep your files
				synchronized between your Nextcloud server and your desktop. Select one or more directories on your local machine
				 and always have access to your latest files wherever you are. Windows 7, 8.x and 10');?></span>
			 	<a class="btn-primary" href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN; ?>">Nextcloud for Windows</a>
				<div class="server-wrapper__download__options">
					<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('instalation guide');?></a>
					<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
				</div>
			</div>
		</div>

	<div class="col-lg-8" id="mac-client">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Mac Client');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('Use the desktop clients to keep your files
			synchronized between your Nextcloud server and your desktop. Select one or more directories on your local machine
		 	and always have access to your latest files wherever you are. Windows 7, 8.x and 10');?></span>
 			<a class="btn-primary" href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC; ?>">Nextcloud for MacOS</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('instalation guide');?></a>
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
			</div>
		</div>
	</div>

	<div class="col-lg-8" id="linux-client">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Linux Client');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The official Nextcloud appliance, provided by Tech and Me, is the easiest way for less technical users to get Nextcloud up and running. It builds on Ubuntu Linux and is fully set up and configured with a secure connection. Grab the Nextcloud virtual machine image from the Tech and Me website:');?></span>
			<a class="btn-primary" href="<?php echo $DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX; ?>">Source code for Linux</a>
			<div class="server-wrapper__download__options">
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

		<div class="col-lg-8" id="android-client">
			<div class="server-wrapper__download">
				<span class="server-wrapper__download__title"><?php echo $l->t('Android Client');?></span>
				<span class="server-wrapper__download__description"><?php echo $l->t('The archive should be extracted in a
				 folder your web server has access to.');?></span>
			 	<a class="btn-primary" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">Nextcloud for Android</a>
				<div class="server-wrapper__download__options">
					<a class="server-wrapper__download__options__entry" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID_BETA; ?>"><?php echo $l->t('Beta Client');?></a>
					<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
				</div>
			</div>
		</div>

	<div class="col-lg-8" id="froid-client">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Froid Client');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The Web Installer is the easiest way to install Nextcloud on a web space. It checks the dependencies, downloads Nextcloud from the official server, unpacks it with the right permissions and the right user account. Finally, you will be redirected to the Nextcloud installer.');?></span>
			<a class="btn-primary" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID; ?>">Nextcloud for fdroid</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_FDROID_BETA; ?>"><?php echo $l->t('Beta Client');?></a>
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Changelog');?></a>
			</div>
		</div>
	</div>

	<div class="col-lg-8" id="ios-client">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('iOS Client');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The official Nextcloud appliance, provided by Tech and Me, is the easiest way for less technical users to get Nextcloud up and running. It builds on Ubuntu Linux and is fully set up and configured with a secure connection. Grab the Nextcloud virtual machine image from the Tech and Me website:');?></span>
			<a class="btn-primary" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_IOS; ?>">Nextcloud for iOS</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Source Code');?></a>
			</div>
		</div>
	</div>

	<div class="col-lg-8" id="windowsMobile-client">
		<div class="server-wrapper__download">
			<span class="server-wrapper__download__title"><?php echo $l->t('Windows Mobile Client');?></span>
			<span class="server-wrapper__download__description"><?php echo $l->t('The official Nextcloud appliance, provided by Tech and Me, is the easiest way for less technical users to get Nextcloud up and running. It builds on Ubuntu Linux and is fully set up and configured with a secure connection. Grab the Nextcloud virtual machine image from the Tech and Me website:');?></span>
			<a class="btn-primary" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_WIN; ?>">Nextcloud for Windows</a>
			<div class="server-wrapper__download__options">
				<a class="server-wrapper__download__options__entry" href="void(0)"><?php echo $l->t('Source Code');?></a>
			</div>
		</div>
	</div>
</div>
</section> -->
