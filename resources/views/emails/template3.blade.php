<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
	xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="x-apple-disable-message-reformatting" />
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
	<style>
		html,
		body {
			margin: 0 auto !important;
			padding: 0 !important;
			height: 100% !important;
			width: 100% !important;
			background: #f1f1f1;
		}

		* {
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		}

		table,
		td {
			mso-table-lspace: 0pt !important;
			mso-table-rspace: 0pt !important;
			line-height: 1!important;
		}

		table {
			border-spacing: 0 !important;
			border-collapse: collapse !important;
			table-layout: fixed !important;
			margin: 0 auto !important;
		}

		img {
			-ms-interpolation-mode: bicubic;
		}

		a {
			text-decoration: none;
		}

		.bg_white {
			background: #ffffff;
		}

		.bg_light {
			background: #fafafa;
		}

		.email-section {
			padding: 2.5em 0;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: "Poppins", sans-serif;
			color: #000000;
			margin-top: 0;
		}

		body {
			font-family: "Poppins", sans-serif;
			font-weight: 400;
			font-size: 15px;
			color: rgba(0, 0, 0, 0.4);
		}

		.text-services {
			padding: 10px 10px 0;
			text-align: center;
		}

		.text-services h3 {
			font-size: 12px;
			font-weight: 600;
		}

		.services-list {
			padding: 0;
			margin: 0 0 20px 0;
			width: 100%;
			float: left;
		}

		.services-list img {
			float: left;
		}

		.services-list .text {
			width: calc(100% - 60px);
			float: right;
		}

		.services-list h3 {
			margin-top: 0;
			margin-bottom: 0;
		}

		.services-list p {
			margin: 0;
		}

		p {
			margin: 0;
			padding: 0;
		}

		h3 {
			padding: 0;
			margin: 0;
		}

		.img {
			width: 96px;
			height: 96px;
		}

		@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
			u~div .email-container {
				min-width: 320px !important;
			}

			.text-services {
				text-align: center;
			}

			.text-services h3 {
				font-size: 13px;
			}

			.text-services p {
				font-size: 10px;
			}

			.img {
				width: 64px;
				height: 64px;
			}
		}

		@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
			u~div .email-container {
				min-width: 375px !important;
			}
		}

		@media only screen and (min-device-width: 414px) {
			u~div .email-container {
				min-width: 414px !important;
			}

			.text-services h3 {
				font-size: 15px;
			}

			.text-services p {
				font-size: 12px;
			}
		}
		.tblHeader td, .tblHeader tr {
			padding: 0!important;
			margin: 0!important;
			border-spacing: 0;
			border-collapse: collapse;
		}
	</style>
</head>

<body width="100%">
	<div style="width: 100%; background: #f1f1f1; padding: 2rem 0;">
		<div style="
					max-width: 600px;
					margin: 0 auto;
					padding: 1rem;
					background: #ffffff;
					border-radius: 8px;
				" class="email-container">
			<table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
				style="margin: auto">
				<tr>
					<td valign="middle">
						<div style="
									background: #98ed98;
									border-radius: 8px;
									height: 120px;
									text-align: center;
									font-size: 1.35rem;
									color: #000000;
									font-weight: 500;
									display: flex;
									flex-direction: column;
									justify-content: center;
									align-content: center;
								">
							<!-- <p style="
										display: flex;
										justify-content: center;
										align-content: center;
										align-items: center;
									">
							</p> -->
							<table class="tblHeader" cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td>
											<p></p>
										</td>
									</tr>
									<tr>
										<td>Make New Friends with</td>
									</tr>
									<tr>
										<td>
											<table>
												<tr>
													<td>
														Friend MATCHES
													</td>
													<td>
														&#x1F60D;
													</td>
													<td>
														on LTS
													</td>
													<td>
														&#x1F525;
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td>
											<table>
												<td>
													SEND LIKES NOW
												</td>
												<td>
													&#x2665;&#xFE0F;
												</td>
											</table>
										</td>
									</tr>
									<tr>
										<td>
											<p></p>
										</td>
									</tr>
								</table>
						</div>
					</td>
				</tr>
				<tr>
					<td valign="middle" style="padding: 20px 0">
						<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
							@foreach ($users->chunk(3) as $items)
							<tr>
								<td class="bg_white">
									<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
										<tr>
											@foreach ($items as $key => $user)
											<td valign="top" width="33.333%" style="padding-top: 20px">
												<table role="presentation" cellspacing="0" cellpadding="0" border="0"
													width="100%">
													<tr>
														<td class="icon">
                                                            @if($user['profile_picture'])
															<img src="{{$user['profile_picture']}}" class="img" alt="" style="
																		margin: 0 auto;
																		display: block;
																		object-fit: cover;
																		border-radius: 100%;
																	" />
                                                                    @else
                                                                    <img src="http://lt-admin.mynewsystem.net/assets/email/user.png" class="img" alt="" style="
                                                                    margin: 0 auto;
                                                                    display: block;
                                                                    object-fit: cover;
                                                                    border-radius: 100%;
                                                                " />
                                                                    @endif
														</td>
													</tr>
													<tr>
														<td class="text-services">
															<table>
																<tr>
																	<td>
																		<span>
																			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="12px" width="12px" version="1.1"
																				fill="#98ed98">
																				<g transform="translate(0 -1028.4)">
																					<path
																						d="m7 1031.4c-1.5355 0-3.0784 0.5-4.25 1.7-2.3431 2.4-2.2788 6.1 0 8.5l9.25 9.8 9.25-9.8c2.279-2.4 2.343-6.1 0-8.5-2.343-2.3-6.157-2.3-8.5 0l-0.75 0.8-0.75-0.8c-1.172-1.2-2.7145-1.7-4.25-1.7z" />
																				</g>
																			</svg>
																		</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<table>
																			<tr>
																				<td><h3>@if($user['username']) {{$user['username']}} @else {{$user['firstname']}} {{$user['lastname']}}@endif</h3></td>
																				<td>@if($key % 2 == 0)  &#x1F49A; @else &#x1F49A; @endif</td>
																			</tr>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td><p>{{$user['countryDetail']['country'] ?? ''}}</p></td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
											</td>
											@endforeach
										</tr>
									</table>
								</td>
							</tr>
							@endforeach
						</table>
					</td>
				</tr>
				<tr>
					<td valign="middle">
						<div style="
									height: 120px;
									text-align: center;
									font-size: 1.35rem;
									color: #000000;
									font-weight: 600;
									display: flex;
									flex-direction: column;
									justify-content: center;
									align-content: center;
								">
							<table>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>
										<button style="
										width: 120%;
										margin: 0 auto;
										background: #98ed98;
										border: none;
										border-radius: 8px;
										padding: 12px 4px;
										cursor: pointer;
										color: #000000;
										font-size: 1.25rem;
										font-weight: 600;
									">
								Download Now
							</button>
									</td>
								</tr>
								<tr>
									<td></td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
		</d>
</body>

</html>
