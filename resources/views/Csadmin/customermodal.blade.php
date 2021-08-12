<!-- modal -->
<div class="modal fade" id="modaladdcustomers" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered wd-sm-400" role="document">
<div class="modal-content">
<div class="modal-header pd-15">
<a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</a>
<div class="media align-items-center">
 <h5 class="mg-b-0">Create New Customers</h5>
</div><!-- media -->
</div>
<form method="post" action="{{route('customerProccess')}}" enctype="multipart/form-data">
<input type="hidden" class="form-control" placeholder="First Name" name="customer_id" value="0">

@csrf
<div class="modal-body pd-25">
<div>
<div class="row row-xs">
<div class="col-lg-6">
<div class="form-group">
<label>First Name</label>
<input type="text" class="form-control" placeholder="First Name" name="customer_fname">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Last Name</label>
<input type="text" class="form-control" placeholder="Last Name" name="customer_lname">
</div>
</div>
</div>
<div class="row row-xs">
<div class="col-lg-6">
<div class="form-group">
<label>Email Id</label>
<input type="text" class="form-control" placeholder="Email Id" name="customer_email">
</div>
</div>	
<div class="col-lg-6">
<div class="form-group">
<label>Phone/Mobile</label>
<input type="number" class="form-control" placeholder="Enter 10 Digit Phone/Mobile number" name="customer_mobile">
</div>
</div>
</div>
<div class="form-group">
<label>Business Name</label>
<input type="text" class="form-control" placeholder="Business Name" name="customer_bussiness">
</div>
<input type="hidden" value="1" id="curentCount">
<div class="more-addon-whenedit"></div>
<div class="more-addon">
    <div class="row row-xs">
        <div class="col-lg-8 col-8">
            <div class="form-group">
                <label>Full Address</label>
                <input type="text" class="form-control contact-address" id="address_1" name="address[]" required />
             </div>
        </div>
        <div class="col-lg-3 col-3">
            <div class="form-group">
                <label>Type</label>
                <select class="form-control custom-select" required id="add_type_1" name="addresstype[]">
                    <option value="">Select address type</option>
                    <option value="rental">Rental</option>
                    <option value="home-owner" selected>Home Owner</option>
                    <option value="real-estate">Real Estate</option>
                    <option value="end-of-ease">End Of Lease</option>
                    <option value="commerical">Commerical</option>
                </select>
            </div>
        </div>
        <div class="col-lg-1 col-1">
            <label>&nbsp;</label>
            <button type="button" class="btn btn-success btn-block" onclick="addmoreadd()" style="padding: 7px 0px;width: 100%;text-align: center;"><i data-feather="plus"></i></button>
        </div>
    </div>
</div>
<div id='more_on_edit'></div>
<div class="form-group">
<label>Address Notes</label>
<textarea class="form-control" rows="5" placeholder="Address Notes" name="customer_address_notes"></textarea>
</div>
<button class="btn btn-primary btn-block">Save</button>
</div>
</div><!-- modal-body -->
</form>

</div><!-- modal-content -->
</div><!-- modal-dialog -->
</div><!-- modal -->


<script>
    function addmoreadd() {
         var str = '<div class="" ><div class="row row-xs">';
        str += '<div class="col-lg-8 col-8">';
            str += '<div class="form-group">';
                str += '<label>Full Address</label>';
                str += '<input type="text" class="form-control contact-address"  name="address[]" required />';
            str += '</div>';
        str += '</div>';
        str += '<div class="col-lg-3 col-3">';
        str += '<div class="form-group">';
                str += '<label>Type</label>';
                str += '<select class="form-control custom-select" required   name="addresstype[]">';
                    str += '<option value="">Select address type</option>';
                    str += '<option value="rental">Rental</option>';
                    str += '<option value="home-owner">Home Owner</option>';
                    str += '<option value="real-estate">Real Estate</option>';
                    str += '<option value="end-of-ease">End Of Lease</option>';
                    str += '<option value="commerical">Commerical</option>';
                str += '</select>';
            str += '</div>';
        str += '</div>';
        str += '<div class="col-lg-1 col-1">';
            str += '<label>&nbsp;</label>';
            str += '<button type="button" class="btn btn-danger btn-block" onclick="removeMe($(this))" style="padding: 7px 0px;width: 100%;text-align: center;">X</button>';
        str += '</div>';
        str += '</div>';
        str += '</div>';
        $('#modaladdcustomers').find('.more-addon').append(str);
     // initAutocomplete();
    }
    function removeMe(f) {
    $('#remove_' + f).remove();
    $('#curentCount').val(($('#curentCount').val() - 1));
}
</script>