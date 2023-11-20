	<!-- main -->
	<section id="main" class="clearfix home-default" style="background: linear-gradient(#1f6142,#FFFFFF);" >
		<div class="container">

			<?php 
				
			?>
			
			<!-- main-content -->
			<div class="main-content">
				<!-- row -->
				<div class="row">
					<!-- product-list -->
					<div class="col-md-9">
						<!-- categorys -->
						<div class="section" style="background: linear-gradient(#b38f00,#66cc99);">
							<div class="row" id="bit_exchange_box">
					<div id="bit_exchange_results"></div>
								<form id="bit_exchange_form">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-3 hidden-xs hidden-sm">
											<div style="margin-top:50px;">
												<img src="assets/icons/Bitcoin.png" id="bit_image_send" width="72px" height="72px" class="img-circle img-bordered">
											</div>
										</div>
										<div class="col-md-9">
											<h3><i class="fa fa-arrow-down"></i> <?php echo  $lang['send']; ?></h3>
											<div class="form-group"> 
												<select class="form-control form_style_1 input-lg" id="bit_gateway_send" name="bit_gateway_send" onchange="bit_refresh('1');"> new
													<?php /* echo "found" . " <br> ";
													$gateways = $db->query("SELECT * FROM bit_gateways WHERE allow_send='1' and status='1' ORDER BY id");
													echo "found" . " <br> ";
													if($gateways->num_rows>0) { 
														while($g = $gateways->fetch_assoc()) {
															if($g['default_send'] == "1") { $sel = 'selected'; } else { $sel = ''; }
															echo '<option value="'.$g[id].'" '.$sel.'>'.$g[name].' '.$g[currency].'</option>';
														}
													} else {
														echo '<option>'.$lang[no_have_gateways].'</option>';
													}
													*/ ?>
												</select>
											</div>
											<div class="form-group">
												<input type="text" class="form-control form_style_1 input-lg" id="bit_amount_send" name="bit_amount_send" value="0" onkeyup="bit_calculator();" onkeydown="bit_calculator();">
											</div>
											<div class="text text-muted pull-right" style="padding-bottom:10px;font-weight:bold;"><?php echo $lang['exchange_rate']; ?>: <span id="bit_exchange_rate">-</span></div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-9">
											<h3><i class="fa fa-arrow-up"></i> <?php echo $lang['receive']; ?></h3>
											<div class="form-group">
												<select class="form-control form_style_1 input-lg" id="bit_gateway_receive" name="bit_gateway_receive"  onchange="bit_refresh('2');">
													<?php /*
											$gateways = $db->query("SELECT * FROM bit_gateways WHERE allow_receive='1' and status='1' ORDER BY id");
											if($gateways->num_rows>0) {
												while($g = $gateways->fetch_assoc()) {
													if($g['default_receive'] == "1") { $sel = 'selected'; } else { $sel = ''; }
													echo '<option value="'.$g[id].'" '.$sel.'>'.$g[name].' '.$g[currency].'</option>';
												}
											} else {
												echo '<option>'.$lang[no_have_gateways].'</option>';
											}
											*/ ?>
												</select>
											</div>
											<div class="form-group">
												<input type="text" class="form-control form_style_1 input-lg" id="bit_amount_receive" name="bit_amount_receive" disabled value="0">
											</div>
											<div class="text text-muted" style="padding-bottom:10px;font-weight:bold;"><?php echo $lang['reserve']; ?>: <span id="bit_reserve">-</span></div>
										</div>
										<div class="col-md-3 hidden-xs hidden-sm">
											<div style="margin-top:50px;">
												<img src="assets/icons/Skrill.png" id="bit_image_receive" width="72px" height="72px" class="img-circle img-bordered">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<input type="hidden" name="bit_amount_receive" id="bit_amount_receive2">
									<input type="hidden" name="bit_rate_from" id="bit_rate_from">
									<input type="hidden" name="bit_rate_to" id="bit_rate_to">
									<input type="hidden" name="bit_currency_from" id="bit_currency_from">
									<input type="hidden" name="bit_currency_to" id="bit_currency_to">
									<input type="hidden" id="bit_login_to_exchange" name="bit_login_to_exchange" value="<?php echo $settings['login_to_exchange']; ?>">
									<input type="hidden" id="bit_ses_uid" name="bit_ses_uid" value="<?php if(checkSession()) { echo $_SESSION['bit_uid']; } else { echo '0'; } ?>">
									<center>
										<button type="button" class="btn btn-primary btn-lg"  onclick="bit_exchange_step_1();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i> <?php echo $lang['btn_exchange']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
									</center>
								</div>
							</form>			
							</div>
						</div><!-- category-ad -->	

                        <!-- exchange rate start -->
                        <div class="section featureds " style=" font-size:17px; border:0px solid black; background:#1aec8ac4; ">
                            <div class="card-header bg-info text-white text-center">
                                <h3 style="color: black; padding: 10px; margin-top: 0px;">Today's Rate </h3>        </div>
                                <div class="card-body" style=" color:black; padding: 0 !important;">

                                    <table class="table">
                                        <thead>
                                             <tr>
                                                    <th scope="col">Currency</th>
                                                     <th scope="col">We Buy</th>
                                                     <th scope="col">We Sell</th>
                                             </tr>
                                        </thead>
                                         <tbody>
                                        <tr>
                                            <td>Perfect money</td>
                                            <td>86 BDT </td>
                                            <td>90 BDT </td>
                                        </tr>
                                        <tr>
                                            <td>Payeer</td>
                                            <td>86 BDT </td>
                                            <td>90 BDT </td>
                                        </tr>
                                        <tr>
                                             <td>Paypal</td>
                                             <td>70 BDT </td>
                                             <td>86 BDT </td>
                                        </tr>
                                    
                                        <tr>
                                        <td>Webmoney</td>
                                        <td>86 BDT </td>
                                        <td>90 BDT </td>
                                        </tr>
                                    
                                        <tr>
                                        <td>AdvCash</td>
                                        <td>85 BDT </td>
                                         <td>90 BDT </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                        </div>

                        <!-- exchange rate end -->

						
						<!-- featureds -->
						<div class="section featureds">
							<div class="row">
								<div class="col-sm-12">
									<div class="section-title featured-top">
										<h4><?php echo $lang['awesome_testimonials']; ?></h4>
									</div>
								</div>
							</div>
							
							<!-- featured-slider -->
							<div class="featured-slider">
								<div id="featured-slider" >
								<?php
							$query = $db->query("SELECT * FROM bit_testimonials WHERE status='1' ORDER BY RAND() LIMIT 5");
							if($query->num_rows>0) {
								while($row = $query->fetch_assoc()) {
								?>
									<!-- featured -->
									<div class="featured">
										<!-- ad-info -->
										<div class="ad-info">
											<?php if($row['type'] == "1") { ?>
											<h3 class="item-price"><span class="label label-success" style="color:#fff;"><i class="fa fa-smile-o"></i> <?php echo $lang['positive']; ?></span></h3>
											<?php } elseif($row['type'] == "2") { ?>
											<h3 class="item-price"><span class="label label-warning" style="color:#fff;"><i class="fa fa-meh-o"></i> <?php echo $lang['neutral']; ?></span></h3>
											
											<?php } elseif($row['type'] == "3") { ?>
											<h3 class="item-price"><span class="label label-danger" style="color:#fff;"><i class="fa fa-frown-o"></i> <?php echo $lang['negative']; ?></span></h3>
											
											<?php } else { ?>
											<h3 class="item-price"><span class="label label-default" style="color:#fff;"><i class="fa fa-meh-o"></i> Unknown</span></h3>
											
											<?php } ?>
											<h4 class="item-title"><?php echo $row['content']; ?></h4>
											<div class="item-cat">
												<span><?php echo idinfo($row['uid'],"username"); ?></span> 
											</div>
										</div><!-- ad-info -->
									</div><!-- featured -->
									<?php
									}
							} else {
								echo $lang['no_have_testimonials'];
							}
							?>
								
									
								</div><!-- featured-slider -->
							</div><!-- #featured-slider -->
						</div><!-- featureds -->

						<!-- trending-ads -->
						<div class="section trending-ads">
							<div class="section-title tab-manu">
								<h4><?php echo $lang['latest_exchanges']; ?></h4>
							</div>
							<br/>
							<div class="row">
								<div class="col-md-12">
									<table class="table">
										<thead>
											<tr>
												<th><?php echo $lang['send']; ?></th>
												<th><?php echo $lang['receive']; ?></th>
												<th><?php echo $lang['amount']; ?></th>
												<th><?php echo $lang['exchange_id']; ?></th>
												<th><?php echo $lang['status']; ?></th>
											</tr>
										</thead>
										<tbody>
											<?php /*
											$query = $db->query("SELECT * FROM bit_exchanges ORDER BY id DESC LIMIT 10"); 
											if($query->num_rows>0) {
												while($row = $query->fetch_assoc()) {
													?>
													<tr>
														<td><img src="<?php echo gatewayicon(gatewayinfo($row['gateway_send'],"name")); ?>" width="20px" height="20"> <?php echo gatewayinfo($row['gateway_send'],"name"); ?> <?php echo gatewayinfo($row['gateway_send'],"currency"); ?></td>
														<td><img src="<?php echo gatewayicon(gatewayinfo($row['gateway_receive'],"name")); ?>" width="20px" height="20"> <?php echo gatewayinfo($row['gateway_receive'],"name"); ?> <?php echo gatewayinfo($row['gateway_receive'],"currency"); ?></td>
														<td><?php echo $row['amount_send']; ?> <?php echo gatewayinfo($row['gateway_send'],"currency"); ?></td>
														<td><?php echo cropexchangeid($row['exchange_id'],10); ?></td>
														<td><?php
										if($row['status'] == "1") {
											echo '<span class="label label-warning"><i class="fa fa-clock-o"></i> '.$lang[status_1].'</span>';
										} elseif($row['status'] == "2") {
											echo '<span class="label label-warning"><i class="fa fa-clock-o"></i> '.$lang[status_2].'</span>';
										} elseif($row['status'] == "3") {
											echo '<span class="label label-info"><i class="fa fa-clock-o"></i> '.$lang[status_3].'</span>';
										} elseif($row['status'] == "4") {
											echo '<span class="label label-success"><i class="fa fa-check"></i> '.$lang[status_4].'</span>';
										} elseif($row['status'] == "5") {
											echo '<span class="label label-danger"><i class="fa fa-times"></i> '.$lang[status_5].'</span>';
										} elseif($row['status'] == "6") {
											echo '<span class="label label-danger"><i class="fa fa-times"></i> '.$lang[status_6].'</span>';
										} elseif($row['status'] == "7") {
											echo '<span class="label label-danger"><i class="fa fa-times"></i> '.$lang[status_7].'</span>';
										} else {
											echo '<span class="label label-default">'.$lang[status_unknown].'</span>';
										}
										?></td>
													</tr>
													<?php
												}
											} else {
												echo '<tr><td colspan="5">'.$lang[still_no_exchanges].'</td></tr>';
											}
											*/ ?>
										</tbody>
									</table>
								</div>
							</div>
						</div><!--trending-ads -->		

						
					</div><!-- product-list -->

					<!-- advertisement -->
					<div class="col-md-3">
						<div class="section" style="background-color: skyblue;">
							<div class="section-title tab-manu">
								<h4><?php echo $lang['track_exchange']; ?></h4>
							</div>
							<br/>
							<form action="<?php echo $settings['url']; ?>track" method="POST">
								<div class="form-group">
									<input type="text" class="form-control" name="order_id" placeholder="<?php echo $lang['type_here_exchange_id']; ?>">
								</div>
								<button type="submit" class="btn btn-primary btn-block" name="bit_track"><?php echo $lang['btn_track']; ?></button>
							</form>
						</div>
						
						<div class="section" style="background:#b6fab4">
							<div class="section-title tab-manu">
								<h4><?php echo $lang['our_reserve']; ?></h4>
							</div>
							<br/>
								<div class="row">
								<?php /* echo "bal";
				$db = mysqli_connect('localhost', 'root', '', 'dollar');
								$query2 = $db->query("SELECT * FROM bit_gateways ORDER BY id"); 
								if($query2->num_rows>0) { 
									while($row = $query2->fetch_assoc()) { 
									?>
									<div class="col-md-12" style="margin-bottom:10px;"> 
										<img src="<?php echo gatewayicon($row['name']); ?>" width="42px" height="42px" class="img-circle img-bordered pull-left"> asd
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;  color:black; "><?php echo $row['name']." ".$row['currency']; ?></span><br/>
											<span style="font-size:15px;  color:black; " ><?php echo $row['reserve']." ".$row['currency']; ?> </span>
										</span>
									</div>
									<br><br>
									<?php
									}
								} else {
									?>
									<div class="col-md-12">
										<?php echo $lang['no_have_gateways']; ?>
									</div>
									<?php
								}
								*/?>
								
								</div>

						</div>
                        <div class="card bg-light" style="border:4px solid black;">
                            <div class="card-header text-white text-center" style=" background:#ebff00; " >
                                <h3 style="color: black; padding: 10px; margin-top: 0px;"> নোটিশ </h3>        </div>
                                <div class="card-body" style=" color:black; padding: 5px;">

                                    <marquee style="font-size:16px; height:340px; " behavior="scroll" direction="up" scrollamount="2" onmouseout="this.start()" onmouseover="this.stop()" >
                                    পেপাল ডলার বা অন্য কোন ডলার যে গুলো আমাদের ওয়েবসাইটে নেই, সে গুলো ক্রয় - বিক্রয় করার জন্য আমাদের ফেসবুক পেইজে মেসেজ করুন।
                                    <br> <br>
                                    বিকাশ বা রকেটে টাকা রিসিভ করার পর যদি দেখেন ৫/১০ টাকা কম পেয়েছেন , তাহলে বুঝবেন ফী কাটা হয়েছে।
                                    <br> <br>
                                    ক্রয় - বিক্রয় করার সময় যেকোনো ধরনের সমস্যা বা কোনো কিছু বুঝতে অসুবিধা হলে পেইজে মেসেজ করুন অথবা সরাসরি ফোন করুন।
                                    <br> <br>
                                    ক্রয় - বিক্রয় করার পর অবশ্যই রিভিউ দিবেন।
                                    <br> <br>
                                    আপনি যদি মোবাইল থেকে ওয়েবসাইট ভিজিট করেন, তাহলে লেটেস্ট এক্সচেঞ্জ সম্পূর্ণ দেখার জন্য ব্রাউজার এর ডেস্কটপ মোড চালু করে নিতে হবে।
                                    <br> <br>
                                    আমাদের সাথে থাকার জন্য ধন্যবাদ ।
                                  </marquee> 

                                </div>
    </div>
					</div><!-- advertisement -->
				</div><!-- row -->
			</div><!-- main-content -->
		</div><!-- container -->

         

	</section><!-- main -->
