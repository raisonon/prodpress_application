
<div id="app">

	<div>

		<h1><strong>prod.press</strong> lets developers build bigger and better products with WordPress.</h1>
		<br />

		<div class="">
			<br>
			<p>👌 Free and Open Source</p>
			<p>🐘 Use <strong>Model View Controller (MVC)</strong> with <strong>WP</strong></p>
			<p>⚡ Build with any front-end, from vanilla to reactive</p>
			<p>👉 Simple router for custom URLs in your app</p>
			<p>🔌 Create your own API and use it anywhere</p>
		</div>

		<a href="//prod.press">View more on http://prod.press</a>

	</div>

	<hr style="">
	
	<h4>🤩  Made for WordPress developers. 🛠 Use your existing PHP and HTML skills.</h4>
	
	<p>Your applications pages can be automatically accessed once they are created in the controller file using the following URL format:</p>
	<p>🔗  <em>[site url]/[app_slug]/pp_route=[controller file]/[controller method]</em>.</p>
	<p>🔗  <a target="_blank" href="/<?= $app_root?>/?pp_route=examples/test"><?= $domain ?>/<?= $app_root?>/?pp_route=examples/test</a></p>
	<p>🔗  <a target="_blank" href="/<?= $app_root?>/?pp_route=examples/vue"><?= $domain ?>/<?= $app_root?>/?pp_route=examples/vue</a></p>
	<p>🔗  <a target="_blank" href="/custom"><?= $domain ?>/custom</a></p>

	<p>You can also set custom urls in the file <em>config.php</em> where we can control the url router. This page is an example. The url <em>/prodpress-welcome/</em>.</p>

	<p>👉 <a href="">Learn more on our website.</a></p>

	<hr>

	<div>
		<h4><img draggable="false" class="emoji" alt="🛠" src="https://s.w.org/images/core/emoji/2.4/svg/1f6e0.svg"> Developer Tools built in</h4>
		<p>Use npm dependency manager to look after your libraries.</p>
		<p>Gulp pre-processing makes automating your jobs a breeze.</p>
	</div>


	<hr>

	<h4>👷‍♀️ Extend with Modules</h4>
	<p>Build modules that can be used across projects and use the same format as your main app, using the following format:</p>
	<p>🔗  <em>[site url]/[app_slug]/pp_module_route=[module name][controller file]/[controller method]</em>.</p>
	<p>🚀 Speed up your development with ready-made modules. <strong>Coming Soon.</strong></p>
	<hr>

	<h4>🎛 Settings</h4>
	<p>The app slug mentioned above is a custom slug for the application can be set in your wp-config.php file using:</p>
	<p><pre>define('PP_SLUG', 'app');</pre></p>
	<p>Custom URLs can be managed in <pre>config/config.php</pre></p>

	<hr>

	<h3>🤝 Theme Integration</h3>
	<p>ProdPress works with any theme. You will need to setup wrappers to work with your theme. Have a look at your themes index.php file. Find the wrappers there and add to the <em>views/wrappers</em> folder.</p>


</div>