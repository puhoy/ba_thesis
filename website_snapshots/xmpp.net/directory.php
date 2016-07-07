
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>IM Observatory</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-sortable.css" rel="stylesheet" media="screen">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="stylesheet" type="text/css" href="css/main.css">

		<link rel="shortcut icon" href="./ico/favicon.png">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="https://xmpp.net/rss.php">

		
	</head>

	<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">IM Observatory</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="list.php">Test results</a></li>
					<li class="active"><a href="#">Public server directory</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="reports.php">Stats</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">

		<h1>Public XMPP Server Directory</h1>

		<p>This is a list of servers with public registration (i.e., anyone can sign up for free). Follow the links to the website to sign up, or use a client that supports in-band registration. Server administrators can register their servers by following the <a href="register.php">registration instructions</a>.</p>

		<table class="table table-bordered table-striped sortable">
			<thead>
				<tr>
					<th data-defaultsort="asc">Domain</th>
					<th>Year founded</th>
					<th>Country</th>
					<th>Certificate Authority (untrusted certificates in red text)</th>
					<th>Software</th>
					<th>Software release date</th>
					<th>Security grade client-to-server</th>
					<th>Security grade server-to-server</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<td>
					<a class="my-popover" data-content="ANONYMOUSsb4444v.onion :: Anonymous Jabber Server, provided by kJabber.de" data-toggle="popover" data-original-title="ANONYMOUSsb4444v.onion" href="http://www.anonymoussb4444v.onion/">
						ANONYMOUSsb4444v.onion <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=ANONYMOUSsb4444v.onion&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=ANONYMOUSsb4444v.onion&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="basket.coach" href="http://chatme.im/">
						basket.coach <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=basket.coach&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=basket.coach&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="" data-toggle="popover" data-original-title="blah.im" href="http://www.blah.im/">
						blah.im <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					AT				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=blah.im&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=blah.im&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="XMPP-Service run by Tim Schumacher." data-toggle="popover" data-original-title="boese-ban.de" href="https://datenknoten.me/dienste/xmpp">
						boese-ban.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2008				</td>
				<td>
					DE				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Prosody 0.10 nightly build 261 (2016-05-30, 6943b1dd4e3d)				</td>
				<td>
					2016/05/30				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=boese-ban.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=boese-ban.de&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by draugr.de." data-toggle="popover" data-original-title="brauchen.info" href="http://www.draugr.de/">
						brauchen.info <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.02				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=brauchen.info&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=brauchen.info&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Free Public Jabber Service" data-toggle="popover" data-original-title="ch3kr.net" href="http://jabber.ab-storm.de/">
						ch3kr.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2013				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=ch3kr.net&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=ch3kr.net&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="chatme.biz" href="http://chatme.im/">
						chatme.biz <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.biz&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.biz&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="chatme.community" href="http://chatme.im/">
						chatme.community <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.community&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.community&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="chatme.education" href="http://chatme.im/">
						chatme.education <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.education&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.education&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="chatme.im" href="http://chatme.im/">
						chatme.im <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					IT				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.im&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.im&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="chatme.link" href="http://chatme.im/">
						chatme.link <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.link&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.link&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="chatme.sexy" href="http://chatme.im/">
						chatme.sexy <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.sexy&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.sexy&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="chatme.singles" href="http://chatme.im/">
						chatme.singles <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.singles&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.singles&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="chatme.social" href="http://chatme.im/">
						chatme.social <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.social&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.social&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="chatme.xyz" href="http://chatme.im/">
						chatme.xyz <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 261 (2016-05-30, 6943b1dd4e3d)				</td>
				<td>
					2016/05/30				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.xyz&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chatme.xyz&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Australian-based public XMPP server, attempting to provide best possible end-user experience." data-toggle="popover" data-original-title="chinwag.im" href="https://chinwag.im/">
						chinwag.im <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					AU				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chinwag.im&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chinwag.im&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Chrome.pl is a publicly available service for hosting custom XMPP domains. Additional services include e-mail account with address same as JID, maintained transports, active community and commercial deployments." data-toggle="popover" data-original-title="chrome.pl" href="http://www.chrome.pl/">
						chrome.pl <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2001				</td>
				<td>
					PL				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					jabberd 2.4.0				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chrome.pl&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=chrome.pl&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by i-pobox.net." data-toggle="popover" data-original-title="climm.org" href="http://www.i-pobox.net/">
						climm.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2003				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=climm.org&amp;type=client">
						T					</a>
				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=climm.org&amp;type=server">
						T					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Public XMPP server hosted by Coderollers SRL." data-toggle="popover" data-original-title="coderollers.com" href="http://www.coderollers.com/xmpp-server/">
						coderollers.com <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					RO				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=coderollers.com&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=coderollers.com&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="CodingTeam.net is a forge for free (as in freedom) software projects. The Jabber server is mainly useful for communication inside CodingTeam projects (chatrooms integrated in the forge, presence for users, etc.) but is open to everyone." data-toggle="popover" data-original-title="codingteam.net" href="http://codingteam.net/jabber">
						codingteam.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2007				</td>
				<td>
					FR				</td>
				<td>
					<span class='text-danger'>StartCom Certification Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 196 (2016-01-07, eda0feeaf759)				</td>
				<td>
					2016/01/07				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=codingteam.net&amp;type=client">
						T					</a>
				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=codingteam.net&amp;type=server">
						T					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="comm.unicate.me UK based Jabber service." data-toggle="popover" data-original-title="comm.unicate.me" href="http://www.comm.unicate.me/">
						comm.unicate.me <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					UK				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=comm.unicate.me&amp;type=client">
						?					</a>
				</td>
				<td data-value="F">
					<a class="label label-danger" href="result.php?domain=comm.unicate.me&amp;type=server">
						F					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="CORE.mx Jabber Network - Respects your privacy and freedom." data-toggle="popover" data-original-title="core.mx" href="https://www.core.mx/">
						core.mx <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					NL				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					ejabberd 16.03				</td>
				<td>
									</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=core.mx&amp;type=client">
						B					</a>
				</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=core.mx&amp;type=server">
						B					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The Creep.im Public XMPP Service." data-toggle="popover" data-original-title="creep.im" href="http://creep.im/">
						creep.im <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					RU				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.03				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=creep.im&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=creep.im&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free,secure,privately owned XMPP server with a no-logging policy." data-toggle="popover" data-original-title="darkness.su" href="https://darkness.su/">
						darkness.su <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					RU				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=darkness.su&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=darkness.su&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="XMPP-Service run by Tim Schumacher." data-toggle="popover" data-original-title="datenknoten.me" href="https://datenknoten.me/dienste/xmpp">
						datenknoten.me <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					DE				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Prosody 0.10 nightly build 261 (2016-05-30, 6943b1dd4e3d)				</td>
				<td>
					2016/05/30				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=datenknoten.me&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=datenknoten.me&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by draugr.de." data-toggle="popover" data-original-title="deshalbfrei.org" href="http://www.draugr.de/">
						deshalbfrei.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.02				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=deshalbfrei.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=deshalbfrei.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="dotchat.me" href="http://chatme.im/">
						dotchat.me <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=dotchat.me&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=dotchat.me&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="XMPP server in Germany with a MUC service, a file transfer proxy, and more." data-toggle="popover" data-original-title="draugr.de" href="http://www.draugr.de/">
						draugr.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.02				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=draugr.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=draugr.de&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Free Public Chat Server. Please use end-to-end encryption." data-toggle="popover" data-original-title="earthbot.net" href="http://earthbot.net/">
						earthbot.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					US				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=earthbot.net&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=earthbot.net&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Driven by the German Jabber tutorial portal einfachjabber.de" data-toggle="popover" data-original-title="einfachjabber.de" href="http://einfachjabber.de/">
						einfachjabber.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=einfachjabber.de&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=einfachjabber.de&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A public self-hosted Jabber server located in France." data-toggle="popover" data-original-title="forumanalogue.fr" href="http://www.forumanalogue.fr/">
						forumanalogue.fr <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					FR				</td>
				<td>
					<span class='text-danger'>forumanalogue.fr</span>
				</td>
				<td>
					Openfire 4.0.2				</td>
				<td>
									</td>
				<td data-value="F">
					<a class="label label-danger" href="result.php?domain=forumanalogue.fr&amp;type=client">
						F					</a>
				</td>
				<td data-value="F">
					<a class="label label-danger" href="result.php?domain=forumanalogue.fr&amp;type=server">
						F					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Freifunk.it - Jabber für Freifunker, angeboten von kJabber.de" data-toggle="popover" data-original-title="Freifunk.it" href="http://www.freifunk.it/">
						Freifunk.it <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=Freifunk.it&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=Freifunk.it&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free, privacy conscious, XMPP service. Based in the UK." data-toggle="popover" data-original-title="fysh.in" href="https://www.fysh.in/">
						fysh.in <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					UK				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=fysh.in&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=fysh.in&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="getchat.link" href="http://chatme.im/">
						getchat.link <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=getchat.link&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=getchat.link&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="getchatme.link" href="http://chatme.im/">
						getchatme.link <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=getchatme.link&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=getchatme.link&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free public jabber server maintained by the French association APINC." data-toggle="popover" data-original-title="im.apinc.org" href="http://jabber.apinc.org/">
						im.apinc.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2004				</td>
				<td>
					FR				</td>
				<td>
					<span class='text-danger'>CA Cert Signing Authority</span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="F">
					<a class="label label-danger" href="result.php?domain=im.apinc.org&amp;type=client">
						F					</a>
				</td>
				<td data-value="F">
					<a class="label label-danger" href="result.php?domain=im.apinc.org&amp;type=server">
						F					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A completely free public Jabber service whose main goal is 100% uptime. Operated by Flosoft.biz." data-toggle="popover" data-original-title="im.flosoft.biz" href="http://im.flosoft.biz/">
						im.flosoft.biz <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2004				</td>
				<td>
					EU				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=im.flosoft.biz&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=im.flosoft.biz&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The KodeNet XMPP network - a free and secure IM service" data-toggle="popover" data-original-title="im.koderoot.net" href="https://space.koderoot.net/">
						im.koderoot.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					US				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=im.koderoot.net&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=im.koderoot.net&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Former li-nux.de service, offering an ICQ transport." data-toggle="popover" data-original-title="internet-exception.de" href="http://internet-exception.de/">
						internet-exception.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=internet-exception.de&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=internet-exception.de&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Free and open IM Server for all furry people out there ;-)." data-toggle="popover" data-original-title="is-a-furry.org" href="https://is-a-furry.org/">
						is-a-furry.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2013				</td>
				<td>
					DE				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=is-a-furry.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=is-a-furry.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Austrian Jabber server with many features." data-toggle="popover" data-original-title="jabber.at" href="https://www.jabber.at/">
						jabber.at <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					AT				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.04				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.at&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.at&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Privacy and security focused server that forces end-to-end encryption" data-toggle="popover" data-original-title="jabber.calyxinstitute.org" href="http://jabber.calyxinstitute.org/">
						jabber.calyxinstitute.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					NL				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.calyxinstitute.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.calyxinstitute.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by i-pobox.net." data-toggle="popover" data-original-title="jabber.chaotic.de" href="http://www.i-pobox.net/">
						jabber.chaotic.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2003				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=jabber.chaotic.de&amp;type=client">
						T					</a>
				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=jabber.chaotic.de&amp;type=server">
						T					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Representing the Jabber community in New Zealand." data-toggle="popover" data-original-title="jabber.co.nz" href="http://www.jabber.co.nz/">
						jabber.co.nz <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					NZ				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.co.nz&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.co.nz&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Public service hosted by jabbim.cz" data-toggle="popover" data-original-title="jabber.cz" href="http://www.jabbim.cz/">
						jabber.cz <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2001				</td>
				<td>
					CZ				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					ejabberd 2.1.10 Jabbim I need Holidays Edition				</td>
				<td>
					2011/12/24				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabber.cz&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabber.cz&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="German Jabber Server - der Deutsche Jabber Server." data-toggle="popover" data-original-title="jabber.de" href="http://www.jabber.de/">
						jabber.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					DE				</td>
				<td>
					<span>Equifax</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.de&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A UK XMPP server free to use for everyone" data-toggle="popover" data-original-title="jabber.earth.li" href="http://jabber.earth.li/">
						jabber.earth.li <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2000				</td>
				<td>
					UK				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					ejabberd 14.07				</td>
				<td>
					2014/07/23				</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=jabber.earth.li&amp;type=client">
						B					</a>
				</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=jabber.earth.li&amp;type=server">
						B					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A server for the Spanish-language Jabber community. Hosted by the non-profit organization Aditel." data-toggle="popover" data-original-title="jabberes.org" href="http://www.jabberes.org/">
						jabberes.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2003				</td>
				<td>
					ES				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 15.04.17				</td>
				<td>
									</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=jabberes.org&amp;type=client">
						B					</a>
				</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=jabberes.org&amp;type=server">
						B					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Online Social Community network in Nigeria with Instant messaging service" data-toggle="popover" data-original-title="jabber.etighichat.com" href="http://www.etighichat.com/">
						jabber.etighichat.com <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					NG				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.etighichat.com&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.etighichat.com&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by i-pobox.net." data-toggle="popover" data-original-title="jabber.fourecks.de" href="http://www.i-pobox.net/">
						jabber.fourecks.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2003				</td>
				<td>
					DE				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.fourecks.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.fourecks.de&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP service in Germany." data-toggle="popover" data-original-title="jabber.gate31.net" href="https://jabber.gate31.net/">
						jabber.gate31.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.gate31.net&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.gate31.net&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free Jabber service hosted by jabber.hot-chilli.net. This is an alternative domain, see website for details about our features like Jabber transports and Jabber services." data-toggle="popover" data-original-title="jabber-hosting.de" href="http://jabber.hot-chilli.net/">
						jabber-hosting.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'>StartCom Certification Authority</span>
				</td>
				<td>
					Prosody 0.9 nightly build 265 (2016-05-21, ad0b15f253ee)				</td>
				<td>
					2016/05/21				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=jabber-hosting.de&amp;type=client">
						T					</a>
				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=jabber-hosting.de&amp;type=server">
						T					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free Jabber service for everybody by hot-chilli.net webhosting, a friendly and individual online services company in Germany. We offer serveral Jabber transports (ICQ, AIM, Yahoo, MSN, IRC) and numerous other Jabber services like JMC, JUD, MUC and Proxy65." data-toggle="popover" data-original-title="jabber.hot-chilli.net" href="http://jabber.hot-chilli.net/">
						jabber.hot-chilli.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					Prosody 0.9 nightly build 265 (2016-05-21, ad0b15f253ee)				</td>
				<td>
					2016/05/21				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.hot-chilli.net&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.hot-chilli.net&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free Jabber service from iITSP." data-toggle="popover" data-original-title="jabber.iitsp.com" href="http://jabber.iitsp.com/">
						jabber.iitsp.com <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2008				</td>
				<td>
					USA				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.iitsp.com&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.iitsp.com&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Jabber service with multiple hostnames, ICQ and AIM Transports, MUC-Service with simple IRC-Entry (Port 6668), RSS-Feeds, and more." data-toggle="popover" data-original-title="jabber.i-pobox.net" href="http://www.i-pobox.net/">
						jabber.i-pobox.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2003				</td>
				<td>
					DE				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.i-pobox.net&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.i-pobox.net&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Just Jabber Me! - Also supports IPv6!" data-toggle="popover" data-original-title="jabber.me" href="http://www.jabber.me/">
						jabber.me <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					EU				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					Tigase 7.1.0-SNAPSHOT-b4127/46ed9144 (2016-01-08/01:05:15)				</td>
				<td>
					2016/01/08				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.me&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.me&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free Jabber service in New Zealand." data-toggle="popover" data-original-title="jabber.meta.net.nz" href="http://jabber.meta.net.nz/">
						jabber.meta.net.nz <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2003				</td>
				<td>
					NZ				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					ejabberd 15.09				</td>
				<td>
					2015/09/30				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.meta.net.nz&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.meta.net.nz&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Free Jabber server set up for Norwegian users in 2004. The service is provided free of charge and has also now an English web page due to the many users outside Norway." data-toggle="popover" data-original-title="jabber.no" href="http://jabber.no/">
						jabber.no <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2004				</td>
				<td>
					NO				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.01				</td>
				<td>
					2016/01/13				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.no&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.no&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="" data-toggle="popover" data-original-title="jabber.no-sense.net" href="http://jabber.no-sense.net/">
						jabber.no-sense.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					NL				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					jabberd 2.3.4				</td>
				<td>
					2015/10/30				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.no-sense.net&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.no-sense.net&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The original XMPP service, in continuous operation since 1999." data-toggle="popover" data-original-title="jabber.org" href="http://jabber.org/">
						jabber.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					1999				</td>
				<td>
					USA				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Isode M-Link 16.3v11-0				</td>
				<td>
									</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=jabber.org&amp;type=client">
						B					</a>
				</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=jabber.org&amp;type=server">
						B					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Public XMPP server which respects your privacy. 10+ years of the tradition :)" data-toggle="popover" data-original-title="jabberpl.org" href="https://jabberpl.org/">
						jabberpl.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2002				</td>
				<td>
					DE				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabberpl.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabberpl.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="jabber.randomlol.de public Jabber Server" data-toggle="popover" data-original-title="jabber.randomlol.de" href="http://www.randomlol.de/jabber">
						jabber.randomlol.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.randomlol.de&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.randomlol.de&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A public XMPP server with several services like publish-subscribe and gateways to other proprietary IM networks. Hosted by Nauck IT KG." data-toggle="popover" data-original-title="jabber.rootbash.com" href="http://jabber.rootbash.com/">
						jabber.rootbash.com <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2006				</td>
				<td>
					DE				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=jabber.rootbash.com&amp;type=client">
						B					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.rootbash.com&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server free to use for everyone." data-toggle="popover" data-original-title="jabber.rueckgr.at" href="http://jabber.rueckgr.at/">
						jabber.rueckgr.at <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 15.07				</td>
				<td>
					2015/07/29				</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=jabber.rueckgr.at&amp;type=client">
						B					</a>
				</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=jabber.rueckgr.at&amp;type=server">
						B					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Just another Jabber Server in Germany." data-toggle="popover" data-original-title="jabber.schnied.net" href="http://jabber.schnied.net/">
						jabber.schnied.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2006				</td>
				<td>
					DE				</td>
				<td>
					<span>GeoTrust Global CA</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.schnied.net&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.schnied.net&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by i-pobox.net." data-toggle="popover" data-original-title="jabber.second-home.de" href="http://www.i-pobox.net/">
						jabber.second-home.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2003				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=jabber.second-home.de&amp;type=client">
						T					</a>
				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=jabber.second-home.de&amp;type=server">
						T					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A public XMPP server in Germany." data-toggle="popover" data-original-title="jabber.smash-net.org" href="http://jabber.smash-net.org">
						jabber.smash-net.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					DE				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.smash-net.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.smash-net.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by i-pobox.net." data-toggle="popover" data-original-title="jabber.sow.as" href="http://www.i-pobox.net/">
						jabber.sow.as <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2003				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=jabber.sow.as&amp;type=client">
						T					</a>
				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=jabber.sow.as&amp;type=server">
						T					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="XMPP-Service run by systemli tech collective." data-toggle="popover" data-original-title="jabber.systemli.org" href="https://www.systemli.org/service/xmpp.html">
						jabber.systemli.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2007				</td>
				<td>
					DE				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.systemli.org&amp;type=client">
						?					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.systemli.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Jabber Server of the German lotgd community." data-toggle="popover" data-original-title="jabber.tmkis.com" href="http://lotgdforum.de/">
						jabber.tmkis.com <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.tmkis.com&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.tmkis.com&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Austrian Jabber server with many features." data-toggle="popover" data-original-title="jabber.wien" href="https://www.jabber.wien/">
						jabber.wien <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					AT				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.04				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.wien&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.wien&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Aims to deliver Jabber services on a server located in New Zealand, making connections easy and quick for New Zealand residents." data-toggle="popover" data-original-title="jabber.yeahnah.co.nz" href="http://www.yeahnah.co.nz">
						jabber.yeahnah.co.nz <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					NZ				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.yeahnah.co.nz&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabber.yeahnah.co.nz&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Australian-based public XMPP server, conference-focussed but open for general use." data-toggle="popover" data-original-title="jabberzac.org" href="http://jabberzac.org/">
						jabberzac.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					AU				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Prosody 0.10 nightly build 261 (2016-05-30, 6943b1dd4e3d)				</td>
				<td>
					2016/05/30				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabberzac.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabberzac.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Austrian Jabber server with many features." data-toggle="popover" data-original-title="jabber.zone" href="https://www.jabber.zone/">
						jabber.zone <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					AT				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.04				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.zone&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabber.zone&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Public service hosted by jabbim.cz" data-toggle="popover" data-original-title="jabbim.com" href="http://www.jabbim.cz/">
						jabbim.com <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					CZ				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					ejabberd 2.1.10 Jabbim I need Holidays Edition				</td>
				<td>
					2011/12/24				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabbim.com&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabbim.com&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Stable ejabberd clustered server with good support and many transports and services: ICQ, AIM, MSN, Facebook, Weather, Yahoo, Notes, bots, MUCs, proxy65, STUN server for voice support, and more" data-toggle="popover" data-original-title="jabbim.cz" href="http://www.jabbim.cz/">
						jabbim.cz <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					CZ				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					ejabberd 2.1.10 Jabbim I need Holidays Edition				</td>
				<td>
					2011/12/24				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabbim.cz&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabbim.cz&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Hungarian public XMPP service" data-toggle="popover" data-original-title="jabbim.hu" href="http://www.jabbim.hu/">
						jabbim.hu <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2013				</td>
				<td>
					HU				</td>
				<td>
					<span>Online SSL Hitelesítő Alegység (Online SSL CA)</span>
				</td>
				<td>
					ejabberd 2.1.10				</td>
				<td>
					2011/12/24				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabbim.hu&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabbim.hu&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Public service hosted by jabbim.cz" data-toggle="popover" data-original-title="jabbim.pl" href="http://www.jabbim.cz/">
						jabbim.pl <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					CZ				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					ejabberd 2.1.10 Jabbim I need Holidays Edition				</td>
				<td>
					2011/12/24				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabbim.pl&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabbim.pl&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Public service hosted by jabbim.cz" data-toggle="popover" data-original-title="jabbim.sk" href="http://www.jabbim.cz/">
						jabbim.sk <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					CZ				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					ejabberd 2.1.10 Jabbim I need Holidays Edition				</td>
				<td>
					2011/12/24				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabbim.sk&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabbim.sk&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Jabber server from Indonesia." data-toggle="popover" data-original-title="jabin.org" href="http://www.jabin.org/">
						jabin.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					ID				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabin.org&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabin.org&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free XMPP service with transports, MUCs, a file tranfer proxy, twitter bot and more." data-toggle="popover" data-original-title="jabme.de" href="http://www.jabme.de/">
						jabme.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jabme.de&amp;type=client">
						?					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jabme.de&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An open Jabber service in Poland." data-toggle="popover" data-original-title="jabster.pl" href="http://www.jabster.pl/">
						jabster.pl <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2004				</td>
				<td>
					PL				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					ejabberd 2.1.10 Jabbim I need Holidays Edition				</td>
				<td>
					2011/12/24				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabster.pl&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jabster.pl&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A public Jabber instant messaging server in Austria." data-toggle="popover" data-original-title="jaim.at" href="http://www.jaim.at/">
						jaim.at <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2004				</td>
				<td>
					AT				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 2.1.10				</td>
				<td>
					2011/12/24				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jaim.at&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=jaim.at&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The Jappix XMPP service." data-toggle="popover" data-original-title="jappix.com" href="https://jappix.com/">
						jappix.com <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					FR				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jappix.com&amp;type=client">
						?					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jappix.com&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A public Jabber server in Italy." data-toggle="popover" data-original-title="jisshi.com" href="http://www.jisshi.com/">
						jisshi.com <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					IT				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jisshi.com&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=jisshi.com&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Home of JWChat, a web based Jabber client. Public BOSH gateway at http://jwchat.org/http-bind/." data-toggle="popover" data-original-title="jwchat.org" href="https://jwchat.org/">
						jwchat.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2003				</td>
				<td>
					DE				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					ejabberd 16.03				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jwchat.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=jwchat.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="XMPP-Service run by Tim Schumacher." data-toggle="popover" data-original-title="kaoskinder.de" href="https://datenknoten.me/dienste/xmpp">
						kaoskinder.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2008				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=kaoskinder.de&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=kaoskinder.de&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="kJabber.de :: Jabber Server Cluster in DE, NL and US with onion-Routing" data-toggle="popover" data-original-title="kJabber.de" href="https://www.kjabber.de/">
						kJabber.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=kJabber.de&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=kJabber.de&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="XMPP-Service run by the Hackspace Jena e.V.." data-toggle="popover" data-original-title="krautspace.de" href="https://www.krautspace.de/hswiki:noc">
						krautspace.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=krautspace.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=krautspace.de&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="" data-toggle="popover" data-original-title="kwoh.de" href="https://blog.kwoh.de/pages/jabber.html">
						kwoh.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					DE				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Prosody 0.10 nightly build 254 (2016-05-12, ba83ff7d9bd7)				</td>
				<td>
					2016/05/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=kwoh.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=kwoh.de&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Driven by the German Jabber tutorial portal einfachjabber.de" data-toggle="popover" data-original-title="labnote.org" href="http://einfachjabber.de/">
						labnote.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=labnote.org&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=labnote.org&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="LW.Org IM Public Service." data-toggle="popover" data-original-title="lightwitch.org" href="http://www.lightwitch.org/im-service">
						lightwitch.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					USA				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					Metronome 3.7.9				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=lightwitch.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=lightwitch.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free public XMPP service hosted in Austria with IRC, ICQ and MSN/Live! transport. No ads and high availibility, server messages and main website only in German." data-toggle="popover" data-original-title="linuxlovers.at" href="http://wiki.linuxlovers.at/de/about/jabber">
						linuxlovers.at <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2006				</td>
				<td>
					AT				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					ejabberd 16.02				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=linuxlovers.at&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=linuxlovers.at&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="simple. jabber." data-toggle="popover" data-original-title="lsd-25.ru" href="http://lsd-25.ru/">
						lsd-25.ru <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2008				</td>
				<td>
					RU				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 15.07				</td>
				<td>
					2015/07/29				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=lsd-25.ru&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=lsd-25.ru&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A small but reliable Jabber server. Not only for Mac users!" data-toggle="popover" data-original-title="macjabber.de" href="http://www.macjabber.de/">
						macjabber.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2006				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=macjabber.de&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=macjabber.de&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free server for facilitating communication among business professionals in the world of real estate." data-toggle="popover" data-original-title="mayplaces.com" href="http://mayplaces.com">
						mayplaces.com <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					USA				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=mayplaces.com&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=mayplaces.com&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="miqo'te jabber service" data-toggle="popover" data-original-title="miqote.com" href="http://miqote.com/">
						miqote.com <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					DE				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					Prosody 0.9.8				</td>
				<td>
					2015/03/26				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=miqote.com&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=miqote.com&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Neko IM is a free public Jabber server, running Prosody, located in Sandnes, Norway." data-toggle="popover" data-original-title="neko.im" href="http://www.neko.im/">
						neko.im <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2008				</td>
				<td>
					NO				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Prosody 0.10 nightly build 251 (2016-04-15, 4b4cf0167391)				</td>
				<td>
					2016/04/15				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=neko.im&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=neko.im&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A long-running, UK-based service with AIM / ICQ / MSN / Yahoo transports." data-toggle="popover" data-original-title="netmindz.net" href="http://www.netmindz.net/">
						netmindz.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2002				</td>
				<td>
					UK				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=netmindz.net&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=netmindz.net&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Public service hosted by jabbim.cz" data-toggle="popover" data-original-title="njs.netlab.cz" href="http://www.jabbim.cz/">
						njs.netlab.cz <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2001				</td>
				<td>
					CZ				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					ejabberd 2.1.10 Jabbim I need Holidays Edition				</td>
				<td>
					2011/12/24				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=njs.netlab.cz&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=njs.netlab.cz&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="" data-toggle="popover" data-original-title="palita.net" href="http://palita.net/">
						palita.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2008				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.01				</td>
				<td>
					2016/01/13				</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=palita.net&amp;type=client">
						B					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=palita.net&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="parliamone.club" href="http://chatme.im/">
						parliamone.club <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=parliamone.club&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=parliamone.club&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free Jabber service in Germany." data-toggle="popover" data-original-title="prosody.de" href="http://prosody.de/">
						prosody.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=prosody.de&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=prosody.de&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Another security minded chat service open to the public from psjbeisler" data-toggle="popover" data-original-title="psjb.me" href="https://psjb.me/">
						psjb.me <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					US				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=psjb.me&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=psjb.me&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Free public Jabber service with many capabilities and the best support for Ukrainian users. Located in UK." data-toggle="popover" data-original-title="richim.org" href="http://richim.org/">
						richim.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					UA				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.01				</td>
				<td>
					2016/01/13				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=richim.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=richim.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="rosolina.estate" href="http://chatme.im/">
						rosolina.estate <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=rosolina.estate&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=rosolina.estate&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Free XMPP server." data-toggle="popover" data-original-title="secnet.im" href="http://secnet.im/">
						secnet.im <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					PL				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=secnet.im&amp;type=client">
						B					</a>
				</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=secnet.im&amp;type=server">
						B					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="slang.cool" href="http://chatme.im/">
						slang.cool <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=slang.cool&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=slang.cool&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="" data-toggle="popover" data-original-title="sss.chaoslab.ru" href="http://sss.chaoslab.ru/">
						sss.chaoslab.ru <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2008				</td>
				<td>
					UA				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=sss.chaoslab.ru&amp;type=client">
						B					</a>
				</td>
				<td data-value="B">
					<a class="label label-warning" href="result.php?domain=sss.chaoslab.ru&amp;type=server">
						B					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by i-pobox.net." data-toggle="popover" data-original-title="sternenschweif.de" href="http://www.i-pobox.net/">
						sternenschweif.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2003				</td>
				<td>
					DE				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=sternenschweif.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=sternenschweif.de&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Servidor XMPP para la comunidad Hispana." data-toggle="popover" data-original-title="suchat.org" href="http://www.suchat.org/">
						suchat.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					ES				</td>
				<td>
					<span>GeoTrust Primary Certification Authority - G3</span>
				</td>
				<td>
					ejabberd 16.04				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=suchat.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=suchat.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Swissjabber is a free XMPP service located in Zurich / Switzerland." data-toggle="popover" data-original-title="swissjabber.ch" href="http://www.swissjabber.ch/">
						swissjabber.ch <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2002				</td>
				<td>
					CH				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=swissjabber.ch&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=swissjabber.ch&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Swissjabber is a free XMPP service located in Zurich / Switzerland." data-toggle="popover" data-original-title="swissjabber.de" href="http://www.swissjabber.ch/">
						swissjabber.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2002				</td>
				<td>
					CH				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=swissjabber.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=swissjabber.de&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Swissjabber is a free XMPP service located in Zurich / Switzerland." data-toggle="popover" data-original-title="swissjabber.eu" href="http://www.swissjabber.ch/">
						swissjabber.eu <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2002				</td>
				<td>
					CH				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=swissjabber.eu&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=swissjabber.eu&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Swissjabber is a free XMPP service located in Zurich / Switzerland." data-toggle="popover" data-original-title="swissjabber.li" href="http://www.swissjabber.ch/">
						swissjabber.li <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2002				</td>
				<td>
					CH				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=swissjabber.li&amp;type=client">
						A					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=swissjabber.li&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Swissjabber is a free XMPP service located in Zurich / Switzerland." data-toggle="popover" data-original-title="swissjabber.org" href="http://www.swissjabber.ch/">
						swissjabber.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2002				</td>
				<td>
					CH				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=swissjabber.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=swissjabber.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Driven by the German Jabber tutorial portal einfachjabber.de" data-toggle="popover" data-original-title="tekst.me" href="http://einfachjabber.de/">
						tekst.me <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=tekst.me&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=tekst.me&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="" data-toggle="popover" data-original-title="thesocial.im" href="https://www.thesocial.im/">
						thesocial.im <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					GB				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
					unknown unknown				</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=thesocial.im&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=thesocial.im&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="We aim for high availability, stability and openness. Our server is located in Germany and offers several transports (ICQ, MSN, IRC) and other services like MUC and Proxy65." data-toggle="popover" data-original-title="thiessen.im" href="http://www.thiessen.im">
						thiessen.im <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'>StartCom Certification Authority</span>
				</td>
				<td>
					Prosody 0.9 nightly build 264 (2016-04-19, 206f9b0485ad)				</td>
				<td>
					2016/04/19				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=thiessen.im&amp;type=client">
						T					</a>
				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=thiessen.im&amp;type=server">
						T					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="We aim for high availability, stability and openness. Our server is located in Germany and offers several transports (ICQ, MSN, IRC) and other services like MUC and Proxy65." data-toggle="popover" data-original-title="thiessen.it" href="http://www.thiessen.im">
						thiessen.it <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'>StartCom Certification Authority</span>
				</td>
				<td>
					Prosody 0.9 nightly build 264 (2016-04-19, 206f9b0485ad)				</td>
				<td>
					2016/04/19				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=thiessen.it&amp;type=client">
						T					</a>
				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=thiessen.it&amp;type=server">
						T					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="We aim for high availability, stability and openness. Our server is located in Germany and offers several transports (ICQ, MSN, IRC) and other services like MUC and Proxy65." data-toggle="popover" data-original-title="thiessen.org" href="http://www.thiessen.im">
						thiessen.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'>StartCom Certification Authority</span>
				</td>
				<td>
					Prosody 0.9 nightly build 264 (2016-04-19, 206f9b0485ad)				</td>
				<td>
					2016/04/19				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=thiessen.org&amp;type=client">
						T					</a>
				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=thiessen.org&amp;type=server">
						T					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The public Tigase service. - Also supports IPv6!" data-toggle="popover" data-original-title="tigase.im" href="http://www.tigase.im/">
						tigase.im <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2010				</td>
				<td>
					EU				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=tigase.im&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=tigase.im&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Dein freier XMPP-Service." data-toggle="popover" data-original-title="twattle.net" href="http://twattle.net/">
						twattle.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					DE				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Prosody 0.9 nightly build 265 (2016-05-21, ad0b15f253ee)				</td>
				<td>
					2016/05/21				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=twattle.net&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=twattle.net&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by draugr.de." data-toggle="popover" data-original-title="ubuntu-jabber.de" href="http://www.draugr.de/">
						ubuntu-jabber.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.02				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=ubuntu-jabber.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=ubuntu-jabber.de&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by draugr.de." data-toggle="popover" data-original-title="ubuntu-jabber.net" href="http://www.draugr.de/">
						ubuntu-jabber.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.02				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=ubuntu-jabber.net&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=ubuntu-jabber.net&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Univers Libre is a home server which offers jabber, mail and web accounts for everyone." data-toggle="popover" data-original-title="univers-libre.net" href="http://www.univers-libre.net/">
						univers-libre.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					FR				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					ejabberd 2.1.10				</td>
				<td>
					2011/12/24				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=univers-libre.net&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=univers-libre.net&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Anonymous and Secure Jabber Server." data-toggle="popover" data-original-title="uprod.biz" href="http://uprod.biz/">
						uprod.biz <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2013				</td>
				<td>
					USA				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.02				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=uprod.biz&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=uprod.biz&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by draugr.de." data-toggle="popover" data-original-title="verdammung.org" href="http://www.draugr.de/">
						verdammung.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.02				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=verdammung.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=verdammung.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Another public Jabber server that supports connecting via Tor as a hidden service." data-toggle="popover" data-original-title="wtfismyip.com" href="http://wtfismyip.com/jabber/">
						wtfismyip.com <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					USA				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.03				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=wtfismyip.com&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=wtfismyip.com&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="WuszNet Jabber Services" data-toggle="popover" data-original-title="wusz.org" href="http://www.wusz.org/">
						wusz.org <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2012				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 15.09				</td>
				<td>
					2015/09/30				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=wusz.org&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=wusz.org&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP server in Germany, hosted by draugr.de." data-toggle="popover" data-original-title="xabber.de" href="http://www.draugr.de/">
						xabber.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.02				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xabber.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xabber.de&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="xmpp.guru" href="http://chatme.im/">
						xmpp.guru <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 261 (2016-05-30, 6943b1dd4e3d)				</td>
				<td>
					2016/05/30				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.guru&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.guru&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free Jabber service hosted by jabber.hot-chilli.net. This is an alternative domain, see website for details about our features like Jabber transports and Jabber services." data-toggle="popover" data-original-title="xmpp-hosting.de" href="http://jabber.hot-chilli.net/">
						xmpp-hosting.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2005				</td>
				<td>
					DE				</td>
				<td>
					<span class='text-danger'>StartCom Certification Authority</span>
				</td>
				<td>
					Prosody 0.9 nightly build 265 (2016-05-21, ad0b15f253ee)				</td>
				<td>
					2016/05/21				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=xmpp-hosting.de&amp;type=client">
						T					</a>
				</td>
				<td data-value="T">
					<a class="label label-warning" href="result.php?domain=xmpp-hosting.de&amp;type=server">
						T					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="An XMPP service free and open to all netizens alike." data-toggle="popover" data-original-title="xmpp.is" href="http://xmpp.is/">
						xmpp.is <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2015				</td>
				<td>
					DE				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.is&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.is&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A free public XMPP service hosted in Japan." data-toggle="popover" data-original-title="xmpp.jp" href="http://www.xmpp.jp/">
						xmpp.jp <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					JP				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.04				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.jp&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.jp&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Jabber service with multiple hostnames, ICQ and AIM Transports, MUC-Service with simple IRC-Entry (Port 6668), RSS-Feeds, and more." data-toggle="popover" data-original-title="xmppnet.de" href="http://www.i-pobox.net/">
						xmppnet.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2003				</td>
				<td>
					DE				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmppnet.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmppnet.de&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="XMPP.ninja high encryption and IPv6" data-toggle="popover" data-original-title="xmpp.ninja" href="https://xmpp.ninja/">
						xmpp.ninja <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					EU				</td>
				<td>
					<span>AddTrust External CA Root</span>
				</td>
				<td>
					ejabberd 0.0				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.ninja&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.ninja&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Russian jabber service." data-toggle="popover" data-original-title="xmpp.ru.net" href="https://www.xmpp.ru.net/">
						xmpp.ru.net <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2011				</td>
				<td>
					RU				</td>
				<td>
					<span>Equifax</span>
				</td>
				<td>
					jabberd 2.3.2				</td>
				<td>
					2014/02/24				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=xmpp.ru.net&amp;type=client">
						C					</a>
				</td>
				<td data-value="C">
					<a class="label label-warning" href="result.php?domain=xmpp.ru.net&amp;type=server">
						C					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="xmpp.technology" href="http://chatme.im/">
						xmpp.technology <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.technology&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.technology&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="The first Italian public XMPP server, all free with Jingle nodes." data-toggle="popover" data-original-title="xmpp.tips" href="http://chatme.im/">
						xmpp.tips <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					IT				</td>
				<td>
					<span>CA Cert Signing Authority</span>
				</td>
				<td>
					Prosody 0.10 nightly build 264 (2016-06-12, 82d8c11ab0cb)				</td>
				<td>
					2016/06/12				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.tips&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.tips&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Austrian Jabber server with many features." data-toggle="popover" data-original-title="xmpp.zone" href="https://www.xmpp.zone/">
						xmpp.zone <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2014				</td>
				<td>
					AT				</td>
				<td>
					<span>StartCom Certification Authority</span>
				</td>
				<td>
					ejabberd 16.04				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.zone&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=xmpp.zone&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="A public XMPP service optimized for use with the yaxim and Bruno Android clients. It also features cute yaks." data-toggle="popover" data-original-title="yax.im" href="https://yaxim.org/yax.im/">
						yax.im <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2013				</td>
				<td>
					DE				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					Prosody 0.9.10				</td>
				<td>
					2016/01/27				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=yax.im&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=yax.im&amp;type=server">
						A					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="" data-toggle="popover" data-original-title="zauris.ru" href="http://zauris.ru/">
						zauris.ru <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2011				</td>
				<td>
					RU				</td>
				<td>
					<span class='text-danger'></span>
				</td>
				<td>
									</td>
				<td>
									</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=zauris.ru&amp;type=client">
						?					</a>
				</td>
				<td data-value="G">
					<a class="label label-default" href="result.php?domain=zauris.ru&amp;type=server">
						?					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a class="my-popover" data-content="Our Jabber Server originally started for a couple of friends but is also open for everyone else. We are respecting everyones privacy and are trying to provide a high availability. No conversations will be logged." data-toggle="popover" data-original-title="zsim.de" href="http://zsim.de/">
						zsim.de <span class="glyphicon glyphicon-link"></span>
					</a>
				</td>
				<td>
					2009				</td>
				<td>
					DE				</td>
				<td>
					<span>DST Root CA X3</span>
				</td>
				<td>
					ejabberd 16.02				</td>
				<td>
									</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=zsim.de&amp;type=client">
						A					</a>
				</td>
				<td data-value="A">
					<a class="label label-success" href="result.php?domain=zsim.de&amp;type=server">
						A					</a>
				</td>
			</tr>
		</tbody>
		</table>
		


		<div class="footer">
			<p>Some rights reserved.</p>
		</div>
	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="./js/jquery.js"></script>
	<script src="./js/jquery.timeago.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/bootstrap-sortable.js"></script>

	<script src="./js/main.js"></script>

	</body>
</html>
