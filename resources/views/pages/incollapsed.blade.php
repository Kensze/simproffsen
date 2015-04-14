<div class="well">
<div id="product_box">
	<div id="product_id">
		<p> ID</p>
	</div>
	<div id="product_count">
		<p> Antal </p>
	</div>
	<div id="product_cost_total">
		<p> Totalt </p>
	</div>
	<?php if ($_SERVER['REQUEST_URI'] == '/cart'): ?>
		<?php foreach($cart as $row) :?>
		{!! Form::open(array('url' => '/cart/update')) !!}
	    {!! Form::hidden('id', $row->rowid) !!}
		<div id="product_id">
			<p>{!! $row->name; !!}</p>
		</div>
		<div id="product_count">
			<p></p>
			{!! Form::select('size', array('L' => 'Large', 'S' => 'Small')) !!}
	        {!! Form::text('quantity', $row->qty) !!}
		</div>
		<div id="product_cost_total">
			<p> Totalt </p>
		</div>
	        <tr>
	            <td>
	                <p><strong></strong></p>
	                <p><?php echo ($row->options->has('size') ? $row->size : '');?></p>
	            </td>
	            <td><input type="text" value="<?php echo $row->qty;?>"></td>
	            <td>$<?php echo $row->price;?></td>
	            <td>$<?php echo $row->subtotal;?></td>
	            <td>
	                  
	                  {!! Form::text('size', $row->size) !!}
	                  
	                  {!! Form::submit('uppadatera') !!}
	                  {!! Form::close() !!}
	            </td>
	       </tr>

   		<?php endforeach;?>
	<?php endif ?>
	<?php echo $_SERVER['REQUEST_URI'];?>
	

</div>
<div id="total_box">
Hejsan
  
</div>
</div>
<div id="buttons">
<button type="button" id="trash_cart">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
  Töm varukorgen
</button>
<button type="button" id="continue_check_out">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
  Till betalning
</button>
</div>




