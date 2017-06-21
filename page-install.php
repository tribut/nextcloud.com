<head>
	<script>
	require(["require.config"], function() {
		require(["pages/install"])
	});
	</script>
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/install.css" rel="stylesheet">
</head>

<script>
var PHPStrings = <?php
$phpArray = array(
		server =>  array(
			options => array(
				"Zip", "Web Installer", "appliance",
			),
			zip => array(
				name => 'Zip',
				link => $DOWNLOAD_SERVER_STABLE_ZIP,
				extraClass => "download-filtered__downloads__OS--zip",
				title => 'Zip title here',
			),
			web => array(
				name => "Web Installer",
				link => $DOWNLOAD_SERVER_WEB_INSTALLER,
				extraClass => "download-filtered__downloads__OS--web",
				title => "Web title here",
			),
			appliance => array(
				name => "appliance",
				link => "https://github.com/nextcloud/vm",
				extraClass => "download-filtered__downloads__OS--appliance",
				title => "appliance title here",
			),
		),
		desktop => array(
			options => array(
				'windows', 'Mac', 'Linux',
			),
			windows => array(
				name => 'Windows',
				link => $DOWNLOAD_CLIENT_DESKTOP_STABLE_WIN,
				extraClass => "download-filtered__downloads__OS--windows",
				title => "Windows title here",
			),
			mac => array(
				name => 'Mac',
				link => $DOWNLOAD_CLIENT_DESKTOP_STABLE_MAC,
				extraClass => "download-filtered__downloads__OS--mac",
				title => "Mac title here",
			),
			Linux => array(
				name => 'Linux',
				link => $DOWNLOAD_CLIENT_DESKTOP_STABLE_LINUX,
				extraClass => "download-filtered__downloads__OS--linux",
				title => "Linux title here",
			),
		),
		mobile => array(
			android => array(
				name => 'Windows',
				link => $DOWNLOAD_CLIENT_MOBILE_ANDROID,
				extraClass => "download-filtered__downloads__OS--android",
				title => "Android title here"
			),
			ios => array(
				name => "iOS",
				link => $DOWNLOAD_CLIENT_MOBILE_IOS,
				extraClass => "download-filtered__downloads__OS--ios",
				title => "iOS title here",
			),
			windows => array(
				name => "windows",
				link => $DOWNLOAD_CLIENT_MOBILE_WIN,
				extraClass => "download-filtered__downloads__OS--windows",
				title => "Windows title here",
			),
			fdroid => array(
				name => "Fdroid",
				link => $DOWNLOAD_CLIENT_MOBILE_FDROID,
				extraClass => "download-filtered__downloads__OS--froid",
				title => "Fdroid title here",
			)
		)
);

echo json_encode($phpArray);
?>;
</script>

<section class="install-hero">
	<div class="container-fluid background">
			<h1 class="text--center"><?php echo $l->t('This is the first step to secure your data.');?></h1>
			<h2 class="text--center"><?php echo $l->t('From the menu above choose what you want to download.');?></h2>
	</div>
</section>
<section class="downloads">
	<div class="container">
		<div class="col-lg-4 download-type">
			<img class="download-type__svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/install/server.svg" />
			<h1 class="download-type__title section--paragraph__tittle"><?php echo $l->t('Get Nextcloud Server');?></h1>
			<p class="download-type__description section__paragraph">There are several ways to get your own nextcloud for you and for your data</p>
			<a class="btn-primary" data-category="server" href="#">Get Nextcloud</a>
		</div>

		<div class="col-lg-4 download-type">
			<img class="download-type__svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/install/Desktop.svg" />
			<h1 class="download-type__title section--paragraph__tittle">Desktop Clients</h1>
			<p class="download-type__description section__paragraph">Install Nextcloud client and get acess to your data wherever you are.</p>
			<a class="btn-primary" data-category="desktop" href="#">Get Nextcloud</a>
		</div>

		<div class="col-lg-4 download-type">
			<img class="download-type__svg" src="<?php echo get_template_directory_uri(); ?>/assets/img/install/mobile.svg" />
			<h1 class="download-type__title section--paragraph__tittle">Mobile Clients</h1>
			<p class="download-type__description section__paragraph">Install Nextcloud client and get acess to your data wherever you are.</p>
			<a class="btn-primary" data-category="mobile" href="#">Get Nextcloud</a>
		</div>
	</div>
</section>

<section class="download-filtered download-filtered--server">
  <div class="container">
    <div class="download-filtered__text">
      <h1 class="section--paragraph__tittle">Download</h1>
      <p class="section__paragraph">Choose from the dropdown above the download option you want</p>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <select class="download-filtered__select" name="">
          </select>
        </div>
      </div>
    </div>

    <div class="download-filtered__downloads col-md-6 col-md-offset-3">
			<span class="download-filtered__downloads__OS"></span>
			<div class="download-filtered__downloads__info">
			  <h1></h1>
				<a class="btn-primary" href="">Download</a>
			</div>
    </div>
  </div>
</section>
