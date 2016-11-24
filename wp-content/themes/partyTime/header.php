<?php
?><!DOCTYPE html>
<html lang="ru">
<head>
  <!-- <base href="h ttp://dev.partytime/" target="_blank"> -->
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=1300, initial-scale=1">
	<title>PartyTime</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300&subset=latin,cyrillic-ext,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/component.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom-owl.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style/main.css" />

  <?php wp_head(); ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5J3VHB');</script>
<!-- End Google Tag Manager -->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3VHB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header class="header">
		<div class="header__menu-top-violet">
			<div class="header__menu-top container">
				<ul class="menu-social">
					<li class="menu-social__icon">
						<a href="https://www.facebook.com/partytime.com.ua" target="_blank">

							<!-- <img src="img/fb-logo.svg" alt="" /> -->

							<svg  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="20px" height="20px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
							   <path id="facebook" fill="#776e88" d="M17.252,11.106V8.65c0-0.922,0.611-1.138,1.041-1.138h2.643V3.459l-3.639-0.015
								c-4.041,0-4.961,3.023-4.961,4.961v2.701H10v4.178h2.336v11.823h4.916V15.284h3.316l0.428-4.178H17.252z"/>
						  </svg>
						</a>
					</li>
					<li class="menu-social__icon">
						<a href="https://www.instagram.com/partytimeagency/" target="_blank">
							 <!-- <img src="img/instag-logo.svg" alt="" /> -->
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="20px" height="20px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
							   <path id="instagram" fill="#776e88" d="M22.107,3.415H7.893c-2.469,0-4.479,2.007-4.479,4.477v4.73v9.486c0,2.469,2.01,4.479,4.479,4.479h14.215
								c2.469,0,4.479-2.01,4.479-4.479v-9.486v-4.73C26.586,5.421,24.576,3.415,22.107,3.415 M23.393,6.086l0.512-0.004v0.511v3.416
								l-3.916,0.014l-0.012-3.928L23.393,6.086z M11.693,12.622c0.742-1.028,1.945-1.7,3.307-1.7s2.564,0.672,3.307,1.7
								c0.484,0.67,0.771,1.49,0.771,2.379c0,2.248-1.828,4.078-4.078,4.078c-2.248,0-4.078-1.83-4.078-4.078
								C10.922,14.112,11.211,13.292,11.693,12.622 M24.328,22.107c0,1.225-0.994,2.219-2.221,2.219H7.893
								c-1.225,0-2.219-0.994-2.219-2.219v-9.486h3.459C8.832,13.356,8.664,14.159,8.664,15c0,3.494,2.842,6.335,6.336,6.335
								s6.336-2.842,6.336-6.335c0-0.842-0.17-1.645-0.467-2.379h3.459V22.107z"/>
							</svg>
						</a>
					</li>
					<li class="menu-social__icon">
						<a href="https://twitter.com/partytimekiev" target="_blank">
							<!-- <img src="img/twitter-logo.svg" alt="" /> -->
							<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="20px" height="20px" fill="#776e88" viewBox="0 0 543.684 543.684" style="enable-background:new 0 0 543.684 543.684;"
								 xml:space="preserve">
							<g>
								<g>
									<path id="twitter" fill="#776e88" d="M527.657,106.697c-2.681,0.783-5.361,1.512-8.041,2.191c-16.384,4.137-17.89-1.322-6.028-13.366
										c5.312-5.397,10.006-11.267,14.082-17.607c9.137-14.217,1.212-20.417-14.333-13.776c-5.545,2.369-11.182,4.517-16.897,6.432
										c-16.017,5.379-38.746-2.735-53.018-11.787c-18.018-11.426-38.495-17.136-61.438-17.136c-32.137,0-59.529,11.334-82.192,33.984
										c-22.656,22.662-33.99,50.062-33.99,82.191c0,4.394,0.251,8.855,0.747,13.378c0.814,7.362-11.585,12.699-28.317,10.336
										c-36.194-5.11-70.582-16.077-103.171-32.889c-32.32-16.671-60.845-37.65-85.57-62.938C37.672,73.624,21.687,74.665,17.274,90.98
										c-2.644,9.78-3.959,19.951-3.959,30.515c0,19.908,4.675,38.372,14.027,55.392c4.651,8.47,10.098,16.138,16.353,22.999
										c10.521,11.549,8.911,18.25-5.734,14.144c-14.639-4.106-25.367-10.202-25.367-9.804s0,0.722,0,0.722
										c0,28.048,8.807,52.693,26.432,73.911c10.857,13.072,23.47,23.17,37.834,30.282c15.147,7.503,22.203,11.688,13.733,12.784
										c-5.11,0.661-10.251,0.991-15.422,0.991c-3.5,0-7.172-0.159-11.003-0.483c-6.059-0.514-7.148,12.111,2.038,26.298
										c7.301,11.273,16.646,21.193,28.03,29.762c11.579,8.721,24.058,14.981,37.417,18.794c16.255,4.633,19.517,13.073,5.024,21.763
										c-35.863,21.519-75.551,32.277-119.058,32.277c-4.902,0-9.578-0.11-14.045-0.324c-7.754-0.373-2.552,6.456,12.417,14.296
										c46.775,24.499,97.43,36.738,151.972,36.738c41.237,0,79.964-6.529,116.176-19.596c36.199-13.066,67.136-30.576,92.791-52.516
										c25.655-21.94,47.779-47.173,66.365-75.711c18.581-28.537,32.424-58.33,41.543-89.376c9.106-31.053,13.666-62.167,13.666-93.342
										c0-2.809-0.024-5.331-0.067-7.552c-0.086-4.174,10.955-15.472,23.28-27.032c5.563-5.22,10.869-10.698,15.937-16.444
										C548.833,107.78,543.882,101.966,527.657,106.697z"/>
								</g>
							</g>

							</svg>

						</a>
					</li>
					<li class="menu-social__icon">
						<a href="https://vk.com/partytimeagency" target="_blank">
							<!-- <img src="img/vk-logo.svg" alt="" /> -->
							<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="20px" height="20px" viewBox="0 0 548.358 548.358" style="enable-background:new 0 0 548.358 548.358;"
								 xml:space="preserve" fill="#776e88">
							<g>
								<path id="vk"  fill="#776e88" d="M545.451,400.298c-0.664-1.431-1.283-2.618-1.858-3.569c-9.514-17.135-27.695-38.167-54.532-63.102l-0.567-0.571
									l-0.284-0.28l-0.287-0.287h-0.288c-12.18-11.611-19.893-19.418-23.123-23.415c-5.91-7.614-7.234-15.321-4.004-23.13
									c2.282-5.9,10.854-18.36,25.696-37.397c7.807-10.089,13.99-18.175,18.556-24.267c32.931-43.78,47.208-71.756,42.828-83.939
									l-1.701-2.847c-1.143-1.714-4.093-3.282-8.846-4.712c-4.764-1.427-10.853-1.663-18.278-0.712l-82.224,0.568
									c-1.332-0.472-3.234-0.428-5.712,0.144c-2.475,0.572-3.713,0.859-3.713,0.859l-1.431,0.715l-1.136,0.859
									c-0.952,0.568-1.999,1.567-3.142,2.995c-1.137,1.423-2.088,3.093-2.848,4.996c-8.952,23.031-19.13,44.444-30.553,64.238
									c-7.043,11.803-13.511,22.032-19.418,30.693c-5.899,8.658-10.848,15.037-14.842,19.126c-4,4.093-7.61,7.372-10.852,9.849
									c-3.237,2.478-5.708,3.525-7.419,3.142c-1.715-0.383-3.33-0.763-4.859-1.143c-2.663-1.714-4.805-4.045-6.42-6.995
									c-1.622-2.95-2.714-6.663-3.285-11.136c-0.568-4.476-0.904-8.326-1-11.563c-0.089-3.233-0.048-7.806,0.145-13.706
									c0.198-5.903,0.287-9.897,0.287-11.991c0-7.234,0.141-15.085,0.424-23.555c0.288-8.47,0.521-15.181,0.716-20.125
									c0.194-4.949,0.284-10.185,0.284-15.705s-0.336-9.849-1-12.991c-0.656-3.138-1.663-6.184-2.99-9.137
									c-1.335-2.95-3.289-5.232-5.853-6.852c-2.569-1.618-5.763-2.902-9.564-3.856c-10.089-2.283-22.936-3.518-38.547-3.71
									c-35.401-0.38-58.148,1.906-68.236,6.855c-3.997,2.091-7.614,4.948-10.848,8.562c-3.427,4.189-3.905,6.475-1.431,6.851
									c11.422,1.711,19.508,5.804,24.267,12.275l1.715,3.429c1.334,2.474,2.666,6.854,3.999,13.134c1.331,6.28,2.19,13.227,2.568,20.837
									c0.95,13.897,0.95,25.793,0,35.689c-0.953,9.9-1.853,17.607-2.712,23.127c-0.859,5.52-2.143,9.993-3.855,13.418
									c-1.715,3.426-2.856,5.52-3.428,6.28c-0.571,0.76-1.047,1.239-1.425,1.427c-2.474,0.948-5.047,1.431-7.71,1.431
									c-2.667,0-5.901-1.334-9.707-4c-3.805-2.666-7.754-6.328-11.847-10.992c-4.093-4.665-8.709-11.184-13.85-19.558
									c-5.137-8.374-10.467-18.271-15.987-29.691l-4.567-8.282c-2.855-5.328-6.755-13.086-11.704-23.267
									c-4.952-10.185-9.329-20.037-13.134-29.554c-1.521-3.997-3.806-7.04-6.851-9.134l-1.429-0.859c-0.95-0.76-2.475-1.567-4.567-2.427
									c-2.095-0.859-4.281-1.475-6.567-1.854l-78.229,0.568c-7.994,0-13.418,1.811-16.274,5.428l-1.143,1.711
									C0.288,140.146,0,141.668,0,143.763c0,2.094,0.571,4.664,1.714,7.707c11.42,26.84,23.839,52.725,37.257,77.659
									c13.418,24.934,25.078,45.019,34.973,60.237c9.897,15.229,19.985,29.602,30.264,43.112c10.279,13.515,17.083,22.176,20.412,25.981
									c3.333,3.812,5.951,6.662,7.854,8.565l7.139,6.851c4.568,4.569,11.276,10.041,20.127,16.416
									c8.853,6.379,18.654,12.659,29.408,18.85c10.756,6.181,23.269,11.225,37.546,15.126c14.275,3.905,28.169,5.472,41.684,4.716h32.834
									c6.659-0.575,11.704-2.669,15.133-6.283l1.136-1.431c0.764-1.136,1.479-2.901,2.139-5.276c0.668-2.379,1-5,1-7.851
									c-0.195-8.183,0.428-15.558,1.852-22.124c1.423-6.564,3.045-11.513,4.859-14.846c1.813-3.33,3.859-6.14,6.136-8.418
									c2.282-2.283,3.908-3.666,4.862-4.142c0.948-0.479,1.705-0.804,2.276-0.999c4.568-1.522,9.944-0.048,16.136,4.429
									c6.187,4.473,11.99,9.996,17.418,16.56c5.425,6.57,11.943,13.941,19.555,22.124c7.617,8.186,14.277,14.271,19.985,18.274
									l5.708,3.426c3.812,2.286,8.761,4.38,14.853,6.283c6.081,1.902,11.409,2.378,15.984,1.427l73.087-1.14
									c7.229,0,12.854-1.197,16.844-3.572c3.998-2.379,6.373-5,7.139-7.851c0.764-2.854,0.805-6.092,0.145-9.712
									C546.782,404.25,546.115,401.725,545.451,400.298z"/>
							</g>
							</svg>

						</a>
					</li>
					<li class="menu-social__icon">
						<a href="https://www.youtube.com/user/partytimeagency" target="_blank">
							<!-- <img src="img/youtube-logo.svg" alt="" /> -->
								<svg   width="20px" height="20px"  fill="#776e88" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 64 64">
								  <g>
								    <g>
								      <g fill="#776e88">
								        <path  id="yT" d="m37.635,41.44c-0.542,0-1.088,0.257-1.635,0.79v10.999c0.547,0.544 1.093,0.806 1.635,0.806 0.941,0 1.423-0.806 1.423-2.434v-7.698c0.001-1.632-0.482-2.463-1.423-2.463z"/>
								        <path id="yT" d="m49.601,41.44c-1.093,0-1.642,0.831-1.642,2.502v1.671h3.274v-1.671c0.001-1.671-0.546-2.502-1.632-2.502z"/>
								        <g>
								          <path id="yT" d="m56.396,29.049c-2.055-2.139-4.357-2.148-5.414-2.271-7.556-0.54-18.889-0.54-18.889-0.54h-0.025c0,0-11.333,0-18.896,0.54-1.054,0.123-3.352,0.133-5.409,2.271-1.618,1.632-2.147,5.327-2.147,5.327s-0.536,4.343-0.536,8.685v4.073c0,4.341 0.536,8.686 0.536,8.686s0.529,3.695 2.147,5.321c2.057,2.139 4.753,2.072 5.952,2.295 4.324,0.413 18.365,0.538 18.365,0.538s11.347-0.016 18.903-0.562c1.057-0.121 3.359-0.133 5.414-2.271 1.619-1.626 2.147-5.321 2.147-5.321s0.536-4.345 0.536-8.686v-4.073c0-4.342-0.536-8.685-0.536-8.685s-0.529-3.695-2.148-5.327zm-39.417,27.706h-3.642v-20.802h-3.851v-3.406h11.414v3.406h-3.92v20.802zm12.912,0h-3.278v-1.969c-1.299,1.489-2.54,2.221-3.742,2.221-1.054,0-1.781-0.432-2.112-1.346-0.178-0.546-0.286-1.409-0.286-2.683v-14.261h3.275v13.28c0,0.765 0,1.164 0.024,1.27 0.083,0.507 0.336,0.769 0.771,0.769 0.658,0 1.341-0.507 2.069-1.533v-13.786h3.278v18.038zm12.44-5.409c0,1.663-0.11,2.866-0.331,3.631-0.438,1.344-1.313,2.03-2.613,2.03-1.168,0-2.294-0.647-3.387-1.999v1.747h-3.277v-24.208h3.277v7.905c1.056-1.299 2.179-1.956 3.387-1.956 1.299,0 2.174,0.688 2.613,2.036 0.221,0.729 0.331,1.918 0.331,3.628v7.186zm12.179-3.016h-6.55v3.199c0,1.671 0.549,2.506 1.673,2.506 0.806,0 1.275-0.44 1.463-1.311 0.029-0.178 0.073-0.908 0.073-2.219h3.341v0.479c0,1.051-0.043,1.776-0.071,2.106-0.108,0.723-0.368,1.378-0.766,1.955-0.906,1.312-2.25,1.96-3.963,1.96-1.711,0-3.014-0.618-3.96-1.853-0.696-0.902-1.051-2.326-1.051-4.241v-6.319c0-1.927 0.318-3.333 1.012-4.249 0.946-1.234 2.249-1.849 3.922-1.849 1.643,0 2.947,0.614 3.863,1.849 0.685,0.916 1.015,2.322 1.015,4.249v3.738z"/>
								          <path id="yT" d="m23.436,24.434v-9.908l4.412-14.552h-3.71l-2.503,9.605-2.605-9.605h-3.863c0.777,2.268 1.581,4.544 2.356,6.816 1.174,3.411 1.91,5.982 2.244,7.735v9.908h3.669z"/>
								          <path id="yT" d="m32.047,24.685c1.656,0 2.942-0.624 3.858-1.864 0.692-0.91 1.029-2.346 1.029-4.287v-6.387c0-1.945-0.337-3.367-1.029-4.289-0.917-1.25-2.202-1.87-3.858-1.87-1.654,0-2.943,0.62-3.854,1.87-0.707,0.922-1.034,2.344-1.034,4.289v6.387c0,1.941 0.327,3.377 1.034,4.287 0.911,1.24 2.2,1.864 3.854,1.864zm-1.581-13.199c0-1.686 0.514-2.529 1.581-2.529 1.062,0 1.573,0.844 1.573,2.529v7.669c0,1.687-0.511,2.53-1.573,2.53-1.067,0-1.581-0.844-1.581-2.53v-7.669z"/>
								          <path id="yT" d="m48.988,24.434v-18.231h-3.308v13.935c-0.733,1.034-1.427,1.548-2.088,1.548-0.445,0-0.708-0.265-0.777-0.773-0.042-0.109-0.042-0.51-0.042-1.285v-13.425h-3.299v14.418c0,1.289 0.108,2.161 0.293,2.711 0.332,0.92 1.068,1.353 2.133,1.353 1.204,0 2.46-0.732 3.781-2.24v1.989h3.307z"/>
								        </g>
								      </g>
								    </g>
								  </g>
								</svg>

						</a>
					</li>
        </ul>
				<ul class="menu_phone">
					<li class="menu-social__icon">
            <a href="tel:+З8О44З5З172О">
							<svg width="20px" height="20px" fill="#776e88" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 578.106 578.106" style="enable-background:new 0 0 578.106 578.106;" xml:space="preserve" >
							<g>
								<g>
									<path id="phone" d="M577.83,456.128c1.225,9.385-1.635,17.545-8.568,24.48l-81.396,80.781
										c-3.672,4.08-8.465,7.551-14.381,10.404c-5.916,2.857-11.729,4.693-17.439,5.508c-0.408,0-1.635,0.105-3.676,0.309
										c-2.037,0.203-4.689,0.307-7.953,0.307c-7.754,0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584
										c-25.096-10.404-53.553-26.012-85.376-46.818c-31.823-20.805-65.688-49.367-101.592-85.68
										c-28.56-28.152-52.224-55.08-70.992-80.783c-18.768-25.705-33.864-49.471-45.288-71.299
										c-11.425-21.828-19.993-41.616-25.705-59.364S4.59,177.362,2.55,164.51s-2.856-22.95-2.448-30.294
										c0.408-7.344,0.612-11.424,0.612-12.24c0.816-5.712,2.652-11.526,5.508-17.442s6.324-10.71,10.404-14.382L98.022,8.756
										c5.712-5.712,12.24-8.568,19.584-8.568c5.304,0,9.996,1.53,14.076,4.59s7.548,6.834,10.404,11.322l65.484,124.236
										c3.672,6.528,4.692,13.668,3.06,21.42c-1.632,7.752-5.1,14.28-10.404,19.584l-29.988,29.988c-0.816,0.816-1.53,2.142-2.142,3.978
										s-0.918,3.366-0.918,4.59c1.632,8.568,5.304,18.36,11.016,29.376c4.896,9.792,12.444,21.726,22.644,35.802
										s24.684,30.293,43.452,48.653c18.36,18.77,34.68,33.354,48.96,43.76c14.277,10.4,26.215,18.053,35.803,22.949
										c9.588,4.896,16.932,7.854,22.031,8.871l7.648,1.531c0.816,0,2.145-0.307,3.979-0.918c1.836-0.613,3.162-1.326,3.979-2.143
										l34.883-35.496c7.348-6.527,15.912-9.791,25.705-9.791c6.938,0,12.443,1.223,16.523,3.672h0.611l118.115,69.768
										C571.098,441.238,576.197,447.968,577.83,456.128z" fill="#776e88"/>
								</g>
							</g>
							</svg>
            </a>
          </li>
          <li class="menu-top__list">
              <a href="tel:+З8О44З5З172О">+З8 (О44) З5З 17 2О</a>
          </li>
				</ul>

        <?php
            wp_nav_menu( array(
                   'theme_location'  => 'top',
                   'menu'            => '',
                   'container'       => false,
                   'container_class' => '',
                   'container_id'    => '',
                   'menu_class'      => 'menu-top',
                   'menu_id'         => 'top-menu',
                   'echo'            => true,
                   'fallback_cb'     => 'wp_page_menu',
                   'before'          => '',
                   'after'           => '',
                   'link_before'     => '',
                   'link_after'      => '',
                   'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                   'depth'           => 0,
                   'walker'          => '',
               )
        ); ?>
			</div>
		</div>
		<div class="header__menu-top-white">
			<div class="header__menu-bottom container">
				<a href="/about.html" class="brand"><img src="/wp-content/themes/partyTime/img/logo-pTyme.png" alt="" class="brand_img"></a>
				<div class="wrap-menu">
					<a class="dropdown">
						<span></span>
						<span></span>
						<span></span>
					</a>
					<!-- <ul class="main-menu">
						<li class="main-menu__list"><a href="#" target="_blank">Корпоративные мероприятия</a></li>
						<li class="main-menu__list"><a href="#" target="_blank">Частные мероприятия</a></li>
						<li class="main-menu__list"><a href="#" target="_blank">Бизнес мероприятия</a></li>
						<li class="main-menu__list"><a href="#" target="_blank">Специальные мероприятия</a></li>
					</ul> -->
          <?php
              wp_nav_menu( array(
                     'menu_class'=>'main-menu',
                     'theme_location'=>'main',
                     'after'=>'',
                     'menu_id' => 'main-menu',
                     'menu'            => '',
                     'container'       => false,
                     'container_class' => '',
                     'container_id'    => '',
                     'echo'            => true,
                     'fallback_cb'     => 'wp_page_menu',
                     'before'          => '',
                     'link_before'     => '',
                     'link_after'      => '',
                     'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                     'depth'           => 0,
                     'walker'          => '',
                 )
          ); ?>
				</div>
			</div>
		</div>
	</header>
