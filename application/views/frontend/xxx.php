<div class="row">
						<div class="col-sm-6 col-md-1">
						</div>
						<div class="col-sm-6 col-md-2">
						  <div class="price-table active" style="border: 3px solid #53B3CB;">
							<div class="price-table-title" style="border-color: #53B3CB;">S</div>
							<div class="price-table-price" style="border-color: #53B3CB;background: #53B3CB;">รอบอก  34" </div>
							<ul class="price-table-info">
							  <li>ยาว 25"</li>
							</ul>
						  </div>
						</div>
						<div class="col-sm-6 col-md-2">
						  <div class="price-table active" style="border: 3px solid #53B3CB;">
							<div class="price-table-title" style="border-color: #53B3CB;">M</div>
							<div class="price-table-price" style="border-color: #53B3CB;background: #53B3CB;">รอบอก  36" </div>
							<ul class="price-table-info">
							  <li>ยาว 27"</li>
							</ul>
						  </div>
						</div>
						<div class="col-sm-6 col-md-2">
						  <div class="price-table active" style="border: 3px solid #53B3CB;">
							<div class="price-table-title" style="border-color: #53B3CB;">L</div>
							<div class="price-table-price" style="border-color: #53B3CB;background: #53B3CB;">รอบอก  40" </div>
							<ul class="price-table-info">
							  <li>ยาว 29"</li>
							</ul>
						  </div>
						</div>
						<div class="col-sm-6 col-md-2">
						  <div class="price-table active" style="border: 3px solid #53B3CB;">
							<div class="price-table-title" style="border-color: #53B3CB;">XL</div>
							<div class="price-table-price" style="border-color: #53B3CB;background: #53B3CB;">รอบอก  44" </div>
							<ul class="price-table-info">
							  <li>ยาว 31"</li>
							</ul>
						  </div>
						</div>
						<div class="col-sm-6 col-md-2">
						  <div class="price-table active" style="border: 3px solid #53B3CB;">
							<div class="price-table-title" style="border-color: #53B3CB;">2XL</div>
							<div class="price-table-price" style="border-color: #53B3CB;background: #53B3CB;">รอบอก  48" </div>
							<ul class="price-table-info">
							  <li>ยาว 32"</li>
							</ul>
						  </div>
						</div>
						<div class="col-sm-6 col-md-1">
						</div>

					</div>
					<!-- Size chart -->		




					-----------------------
					<?php echo form_open('path/to/controller/update/method'); ?>

<table cellpadding="6" cellspacing="1" style="width:100%" border="0">

<tr>
        <th>QTY</th>
        <th>Item Description</th>
        <th style="text-align:right">Item Price</th>
        <th style="text-align:right">Sub-Total</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>
                <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td>
                <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
        </tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
        <td colspan="2"> </td>
        <td class="right"><strong>Total</strong></td>
        <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>

<p><?php echo form_submit('', 'Update your Cart'); ?></p>