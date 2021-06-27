<?php

// Template Name: Quorse

get_header('quorse');
?>

<div class="search-page">
		<div class="row">
			<div class="col-sm-12">
				<main class="site-main">
				<?php while ( have_posts() ) : the_post(); ?>
					
					<section class="quorse-top-section">
						<div class="quorse-container">
							<div class="quorse-padding">
								<div class="quorse-top-row">
									<div class="quorse-breadcrumb">
										<p>
											<a href="https://quorse.com/live-virtual-training/">Live Virtual Training (Most Popular!)</a> <span class="breadcrumbSeparator">&gt;</span><?php echo the_title(); ?>
										</p>
									</div>
								</div>
								<div class="quorse-top-row" style="padding-bottom: 1px;">
								</div>
								<div class="quorse-top-row">
									<div class="quorse-page-title">
										<h1><?php echo the_title(); ?></h1>
									</div>
								</div>
								<div class="quorse-top-row">
									<div class="quorse-page-rating">
										<i aria-hidden="true" class="far fa-star"></i> <i aria-hidden="true" class="far fa-star"></i> <i aria-hidden="true" class="far fa-star"></i> <i aria-hidden="true" class="far fa-star"></i> <i aria-hidden="true" class="far fa-star"></i>  0
									</div>
								</div>
								<div class="quorse-top-row" style="margin-bottom: 33px;">
									
								</div>
							</div>
						</div>
					
					</section>
					<section class="quorse-main-content">
						<div class="quorse-container">
							<div class="quorse-main-row">
								<div class="quorse-main-col-left">
									<div class="quorse-padding">
										<div class="quorse-content">
											<h2>Course Objectives</h2>
											<?php if( get_field('course_objectives') ): ?>
												<?php the_field('course_objectives'); ?>
											<?php endif; ?>
										</div>
										<div class="quorse-content">
											<h2>Target Audience</h2>
											<?php if( get_field('target_audience') ): ?>
												<p><?php the_field('target_audience'); ?></p>
											<?php endif; ?>
										</div>
										<div class="quorse-content">
											<h2>Methodology</h2>
											<?php if( get_field('methodology') ): ?>
												<p><?php the_field('methodology'); ?></p>
											<?php endif; ?>
										</div>
										<div class="quorse-content">
											<h2>Course Modules</h2>
											<?php if( get_field('course_modules') ): ?>
												<?php the_field('course_modules'); ?>
											<?php endif; ?>
										</div>
										<div class="quorse-content">
											<h2>Get To Know The Trainer</h2>
										</div>
										<div class="quorse-content">
											<div class="quorse-trainer-info">
												<div class="trainerWrapper">
													<p class="trainerPhoto" style="background-image:url(<?php if( get_field('trainer_photo') ): ?>
												<?php the_field('trainer_photo'); ?>
											<?php endif; ?>)">
														<span style="display:inline-block;height:150px;width:150px"></span>
													</p>
													<div class="trainerDetails">
														<?php if( get_field('trainer_name') ): ?>
															<h4><?php the_field('trainer_name'); ?></h4>
														<?php endif; ?>
														<p quorse-rating-star=""><small><i aria-hidden="true" class="fas fa-star"></i> <i aria-hidden="true" class="fas fa-star"></i> <i aria-hidden="true" class="fas fa-star"></i> <i aria-hidden="true" class="fas fa-star"></i> <i aria-hidden="true" class="fas fa-star-half-alt"></i> </small>  &nbsp;
														<?php if( get_field('trainer_rating') ): ?>
															<?php the_field('trainer_rating'); ?>
														<?php endif; ?>
														</p>
														<?php if( get_field('trainer_description') ): ?>
														<p style="padding-bottom:10px;"><?php the_field('trainer_description'); ?></p>
														<?php endif; ?>
														<p class="trainerLink">
															<?php if( get_field('link_profile') ): ?>
															<a class="restricted-access" href="<?php the_field('link_profile'); ?>">VIEW PROFILE</a><?php endif; ?>
														</p>
													</div>
													<div class="clear">
													</div>
												</div>												
											</div>
										</div>
									</div>
								</div>
								<div class="quorse-main-col-right">
									<div class="quorse-padding">
										<div class="quorse-content">
											<div class="quorse-sidebar-card">
												<div class="quorse-sidebar-card-heading">
													<h2>Chat with us LIVE to get a</h2>
												</div>
												<div class="quorse-sidebar-card-title">
													<p>FREE QUOTATION!</p>
												</div>
												<div class="quorse-sidebar-card-subheading">
													<p>COURSE INCLUDES</p>
												</div>
												<div class="quorse-sidebar-card-list">
													<ul>
														<li>
															<span class="quorse-card-list-icon">
																<i aria-hidden="true" class="fas fa-video"></i>
															</span>
															<span class="quorse-card-list-text">16 hours (4 hrs x 4 days) of Live Online / Virtual Training</span>
														</li>
														<li>
															<span class="quorse-card-list-icon">
																<i aria-hidden="true" class="fas fa-book"></i>
															</span>
															<span class="quorse-card-list-text">E-WorkBook</span>
														</li>
														<li>
															<span class="quorse-card-list-icon">
																<i aria-hidden="true" class="fas fa-edit"></i>
															</span>
															<span class="quorse-card-list-text">Pre &amp; Post Assessment</span>
														</li>
														<li>
															<span class="quorse-card-list-icon">
																<i aria-hidden="true" class="fas fa-certificate"></i>
															</span>
															<span class="quorse-card-list-text">E-Cert</span>
														</li>
													</ul>
												</div>
												<div class="quorse-sidebar-card-subheading">
													<p>COURSE BENEFITS</p>
												</div>
												<div class="quorse-sidebar-card-list">
													<ul>
														<li>
															<span class="quorse-card-list-icon">
																<i aria-hidden="true" class="far fa-comments"></i>
															</span>
															<span class="quorse-card-list-text">30 Days of Email  Support</span>
														</li>
														<li>
															<span class="quorse-card-list-icon">
																<i aria-hidden="true" class="fas fa-users"></i>
															</span>
															<span class="quorse-card-list-text">1 or 15 pax, same price</span>
														</li>
														<li>
															<span class="quorse-card-list-icon">
																<i aria-hidden="true" class="far fa-grin"></i>
															</span>
															<span class="quorse-card-list-text">Confirmed-to-run even for 1 pax</span>
														</li>
														<li>
															<span class="quorse-card-list-icon">
																<i aria-hidden="true" class="fas fa-hands-helping"></i>
															</span>
															<span class="quorse-card-list-text">Hrdf Certified &amp; Claimable</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="quorse-sidebar-button">
												<a href="#">REQUEST FOR QUOTATION</a>
											</div>
											<div class="quorse-sidebar-note">
												<p>*T&amp;C Applies</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- section class="quorse-related-course">
						<div class="quorse-container">
							<div class="quorse-padding">
								<div class="quorse-related-heading">
									<h2>Courses you may like</h2>
								</div>
							</div>
						</div>
					</section -->
					<section class="quorse-bottom-section">
						<div class="quorse-container">
							<div class="quorse-bottom-row">
								<div class="quorse-bottom-col-side"></div>
								<div class="quorse-bottom-col-center">
									<div class="quorse-padding">
										<div class="quorse-bottom-heading">
											<h2>Got a Question To Ask?</h2>
										</div>
										<div class="quorse-bottom-text">
											<p>Live chat, call or email, we’re here for you</p>
										</div>
										<div class="quorse-bottom-search">
											<form class="quorse-bottom-search" action="https://wp.riyugan.online">
												<input type="text" placeholder="Or just type in the course you are looking for" name="s">
												<button type="submit">START SEARCHING</button>
											</form>
										</div>
									</div>
								</div>
								<div class="quorse-bottom-col-side"></div>
							</div>
						</div>
					</section>
					

				<?php endwhile; ?>
				</main><!-- #main -->
			</div>
				
		</div>
</div>

<?php get_footer('quorse'); ?>
