<?php
//echo "<pre>";
//print_r($hist);
$serData ='';
if(count($popup)>0){ 
    foreach($popup as $value)
    {
        if($value->ca_report_submit==0)
            {
        $services = DB::table('cs_services')
                    ->whereIn('role_id',explode(",",$value->ca_service))
                    ->get();

                  //  print_r($services);            
        $ser = array();
        foreach($services as $valuee){
            $ser[] = $valuee->role_name;
        }
        $serData = implode(" + ",$ser);
        
    }
  //  print_r($value);
}}

$serData1 ='';
        if($hist->ca_report_submit==0)
            {
        $services1 = DB::table('cs_services')
                    ->whereIn('role_id',explode(",",$hist->ca_service))
                    ->get();

                  //  print_r($services);            
        $ser1 = array();
        foreach($services1 as $valuee){
            $ser1[] = $valuee->role_name;
        }
        $serData1 = implode(" + ",$ser1);
        
    }
?>
<div class="modal-header">
<h5 class="modal-title">Booking (Id: {{ $popup[0]->ca_id}} )</h5>
<a href="#" id="ModalCommentdismiss" data-bs-dismiss="modal">Close</a>
</div>
<div class="modal-body">
<div class="booking-details">
<ul>
<li class="tx-14"><span class="mr-10"><ion-icon name="map"></ion-icon></span><span>{{ $popup[0]->customer_address}}</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="calendar"></ion-icon></span><span><?php echo date("d-M-Y H:i:s", strtotime($popup[0]->created_date));  ?></span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="clipboard"></ion-icon></span><span>{{$serData}}</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="cash"></ion-icon></span><span><?php echo $popup[0]->ca_price."+".$popup[0]->ca_payment_type."=";if($popup[0]->ca_payment_type=="Cash"){echo $popup[0]->ca_price;}elseif($popup[0]->ca_payment_type=="GST"){echo $popup[0]->ca_price+($popup[0]->ca_price/10);}?></span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="person"></ion-icon></span><span>{{ $popup[0]->faculty_first_name}}  {{ $popup[0]->faculty_last_name}}</span></li>
</ul>
</div>
<h4 class="mt-2">Customer Details</h4>
<div class="booking-details">
<ul>
<li class="tx-14"><span class="mr-10"><ion-icon name="person"></ion-icon></span><span><?php echo $popup[0]->customer_fname." ".$popup[0]->customer_lname;?></span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="call"></ion-icon></span><span><a href="tel:<?php echo $popup[0]->customer_mobile;?>">{{ $popup[0]->customer_mobile}}</a></span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="mail"></ion-icon></span><span><a href="<?php echo $popup[0]->customer_email;?>">{{ $popup[0]->customer_email}}</a></span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="map"></ion-icon></span><span>{{ $popup[0]->customer_address}}</span></li>
</ul>
</div>
<h4 class="mt-2">Job Notes</h4>
<div style="background:#ffc107 !important;padding:4px !important; font-weight:700;display:inline-block"><?php if(isset($popup[0]->ca_notes) && $popup[0]->ca_notes!==""){echo $popup[0]->ca_notes;}else{echo "No Notes";}?></div>
<h4 class="mt-2">Job History</h4>
<div class="booking-details">
<ul>
    <?php if(isset($hist)&& $hist!=''){ ?>
<li class="tx-14"><span class="mr-10"><ion-icon name="map"></ion-icon></span><span><?php echo $hist->customer_address;?></span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="calendar"></ion-icon></span><span><?php echo date("d-M-Y H:i:s", strtotime($hist->created_date));?></span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="clipboard"></ion-icon></span><span>{{$serData1}}</span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="cash"></ion-icon></span><span><?php echo $hist->ca_price."+".$hist->ca_payment_type."=";if($hist->ca_payment_type=="Cash"){echo $hist->ca_price;}elseif($hist->ca_payment_type=="GST"){echo $hist->ca_price+($hist->ca_price/10);}?></span></li>
<li class="tx-14"><span class="mr-10"><ion-icon name="person"></ion-icon></span><span>{{ $hist->faculty_first_name}}  {{ $hist->faculty_last_name}}</span></li>
 <?php }else{ ?>
    <li class="tx-14"><span><?php echo "No History available";?></span></li>

 <?php   }?>
</ul>
</div>
</div>