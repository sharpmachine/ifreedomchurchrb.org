<?php
/*
* WARNING -This is a recently added template (2013-01-30), and is likly to change as we fine-tune things over the coming weeks/months, if at all possible try to use our hooks or CSS/jQuery to acheive your customizations
* This displays the booking cart showing the persons bookings, attendees and a breakdown of pricing.
* You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager-pro/multiple-bookings/ and modifying it however you need.
* For more information, see http://wp-events-plugin.com/documentation/using-template-files/
*/
if(empty($EM_Multiple_Booking)) $EM_Multiple_Booking = EM_Multiple_Bookings::get_multiple_booking();
//TODO add delete booking from cart
//TODO make bookings editable
?>
<table class="em-cart-table em-mb-admin-table">
	<tbody class="em-cart-summary">
		<?php do_action('em_multiple_bookings_table_before_events', $EM_Multiple_Booking); //do not delete ?>
		<tr class="em-cart-title">
			<th class="em-cart-title-event">Event</th>
			<th class="em-cart-title-spaces">Spaces</th>
			<th class="em-cart-title-price">Price</th>
		</tr>
		<?php foreach($EM_Multiple_Booking->get_bookings() as $EM_Booking): /* @var $EM_Booking EM_Booking */ ?>
			<tr class="em-cart-table-event-summary" id="em-cart-table-event-summary-<?php echo $EM_Booking->get_event()->event_id; ?>">
				<td>
					<?php ob_start(); ?>
					<span class="em-cart-table-event-title"><a href="<?php echo $EM_Booking->get_event()->get_bookings_url(); ?>">#_EVENTNAME</a></span><br/>
					<?php _e('When','em-pro'); ?> : #_EVENTDATES @ #_EVENTTIMES<br />
					<?php _e('Where','em-pro'); ?> : #_LOCATIONFULLLINE
					<?php echo $EM_Booking->output(ob_get_clean()); ?><br />
					<div class="em-cart-table-details-actions">
						<a href="<?php echo $EM_Booking->get_admin_url(); ?>" class="em-cart-table-actions-edit">
							<?php _e('edit booking','em-pro'); ?>
						</a>
					</div>
					<div class="em-cart-table-details-triggers">
						<a href="#" class="em-cart-table-details-show" rel="<?php echo $EM_Booking->get_event()->event_id; ?>" id="em-cart-table-details-show-<?php echo $EM_Booking->get_event()->event_id; ?>">
							+ <?php _e('details','em-pro'); ?>
						</a>
						<a href="#" class="em-cart-table-details-hide" rel="<?php echo $EM_Booking->get_event()->event_id; ?>" id="em-cart-table-details-hide-<?php echo $EM_Booking->get_event()->event_id; ?>">
							- <?php _e('details','em-pro'); ?>
						</a>
					</div>
					<?php
						//get booking form information (aside from attendee info 
						$booking_data = EM_Booking_Form::get_booking_data($EM_Booking);
						if( count($booking_data['booking']) ){ 
						?>
						<div class="em-cart-table-event-details em-cart-table-event-details-<?php echo $EM_Booking->get_event()->event_id; ?> em-cart-info">
							<div class="em-cart-info-booking-title"><?php echo __('Booking Information','em-pro') ?></div>
							<div class="em-cart-info-values">
								<?php foreach( $booking_data['booking'] as $booking_label => $booking_value ): ?>
								<label><?php echo $booking_label; ?> :</label>
								<span><?php echo $booking_value; ?></span><br />
								<?php endforeach; ?>
							</div>
						</div>
					<?php } ?>
				</td>
				<td class="em-cart-table-spaces"><span><?php echo $EM_Booking->get_spaces(); ?></span></td>
				<td class="em-cart-table-price"><span><?php echo $EM_Booking->get_price(false, true); ?></span></td>
			</tr>
			<!-- BEGIN Subtotal Tickets for Event -->
			<?php $attendee_datas = EM_Attendees_Form::get_booking_attendees($EM_Booking); ?>
			<?php foreach( $EM_Booking->get_tickets_bookings() as $EM_Ticket_Booking ): ?>
			<tr class="em-cart-table-event-details em-cart-table-event-details-<?php echo $EM_Booking->get_event()->event_id; ?>" id="em-cart-row-<?php echo $EM_Booking->get_event()->event_id; ?>-<?php echo $EM_Ticket_Booking->get_ticket()->ticket_id; ?>">
				<td>
					<div class="em-cart-table-ticket"><?php echo $EM_Ticket_Booking->get_ticket()->ticket_name; ?></div>
					<?php //BEGIN Attendee Info (if applicable) ?>
					<?php foreach( EM_Attendees_Form::get_ticket_attendees($EM_Ticket_Booking) as $attendee_title => $attendee_data): ?>
					<div class="em-cart-info">
						<span class="em-cart-info-title"><?php echo $attendee_title; ?></span>
						<div class="em-cart-info-values">
						<?php
						foreach( $attendee_data as $attendee_label => $attendee_value ){
							?>
							<label><?php echo $attendee_label; ?> :</label>
							<span><?php echo $attendee_value; ?></span><br />
							<?php
						}
						?>
						</div>
					</div>
					<?php endforeach; ?>
					<?php //END Attendee Info ?>
				</td>
				<td class="em-cart-table-spaces"><?php echo $EM_Ticket_Booking->get_spaces(); ?></td>
				<td class="em-cart-table-price"><?php echo $EM_Ticket_Booking->get_price(false, true); ?></td>
			</tr>
			<?php endforeach; ?>
			<!-- END Subtotal Tickets for Event -->
		<?php endforeach; ?>
		<?php do_action('em_multiple_bookings_table_after_events', $EM_Multiple_Booking); //do not delete ?>
	</tbody>
	<tbody class="em-cart-totals">
		<?php do_action('em_multiple_bookings_table_before_totals', $EM_Multiple_Booking); //do not delete ?>
		<?php 
			$cols = 2;
			$has_taxes = $EM_Multiple_Booking->has_taxes();
			$has_discounts = !empty($EM_Multiple_Booking->booking_meta['discounts']) || !empty($EM_Multiple_Booking->booking_meta['coupon']); 
		?>
		<?php if( $has_discounts || $has_taxes ): ?>
		<tr class="em-cart-totals-sub">
			<th colspan="<?php echo $cols; ?>"><?php _e('Sub Total','em-pro'); ?></th>
			<td><?php echo $EM_Multiple_Booking->get_price(false,true,false); ?></td>
		</tr>
		<?php endif; ?>
		<?php if( $has_taxes ): ?>
		<tr class="em-cart-totals-tax">
			<th colspan="<?php echo $cols; ?>"><?php _e('Taxes','em-pro'); ?> ( <?php echo $EM_Multiple_Booking->get_tax_rate(); ?>% )</th>
			<td><?php echo em_get_currency_formatted($EM_Multiple_Booking->get_price(false,false,false) * (get_option('dbem_bookings_tax')/100)); ?></td>
		</tr>
		<?php endif; ?>
		<?php if( $has_discounts ): ?>
		<tr class="em-cart-totals-discount">
			<th colspan="<?php echo $cols; ?>"><?php _e('Discounts','em-pro'); ?></th>
			<td></td>
		</tr>
		<?php endif; ?>
		<tr class="em-cart-totals-total">
			<th colspan="<?php echo $cols; ?>"><?php _e('Total','em-pro'); ?></th>
			<td><?php echo $EM_Multiple_Booking->get_price(false, true, true); ?></td>
		</tr>
		<?php do_action('em_multiple_bookings_table_after_totals', $EM_Multiple_Booking); //do not delete ?>
	</tbody>
</table>