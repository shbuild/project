<md-tab label="Sales">
	<md-content class="md-padding">
	  <h1 class="md-display-2">Sales</h1>
	  <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
	  	<div class="form-group">
                <label class="col-md-4 control-label">Customer Name</label>
                <div class="col-md-6">
                        <input type="text" class="form-control" name="name" value="" ng-model="customer.name">
                </div>
        </div>
        <div class="form-group">
                <label class="col-md-4 control-label">Address</label>
                <div class="col-md-6">
                        <input type="text" class="form-control" name="address" ng-model="customer.address">
                </div>
        </div>
         <div class="form-group">
                <label class="col-md-4 control-label">Contact Number</label>
                <div class="col-md-6">
                        <input type="text" class="form-control" name="contact" ng-model="customer.contact">
                </div>
        </div>
	  </form>

	  <table class="table">
	  <thead>
	    <tr>
	      <th>Whole Grains</th>
	      <th>Stocks</th>
	      <th>Imported</th>
	      
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td width="20%">Dinorado</td>
	      <td width="20%">
	      	 
			      <div class="input-group">
			          <span class="input-group-btn">
			              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
			                  <span class="glyphicon glyphicon-minus"></span>
			              </button>
			          </span>
			          <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="100">
			          <span class="input-group-btn">
			              
			              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
			                  <span class="glyphicon glyphicon-plus"></span>
			              </button>
			          </span>
			          <span class="input-group-btn">
			         	
			         	 <button class="btn btn-default" data-toggle="modal" data-target="#confirm-order">
						    OK
						</button>
						
					</span>
			      </div>
		 		
	      </td>
	      <td></td>
	      
	    </tr>
	   
	  </tbody>
	</table>
	<div class="form-group">
		<span class="input-group-btn">
		 	 <button class="btn btn-default" data-toggle="modal" data-target="#confirm-order">
			    Submit
			</button>
		</span>
	</div>
	<div class="modal fade" id="confirm-order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h1>Orders</h1>
	                Note:Review the orders
	            </div>
	            <div class="modal-body">
	                Order Details
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Edit</button>
	                <button type="button" class="btn btn-default" data-dismiss="modal">Print</button>
	            </div>
	        </div>
	    </div>
	</div>
	</md-content>
</md-tab>


<script>
jQuery(function($){
		$('.btn-number').click(function(e){
	
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

})

</script>