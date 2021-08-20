// HIDE FOOTER
$('.section-clients, .section-default').css('display','none')

// SCROLL DOWN TO NEXT SECTIONS
$('#select-customer .cust-padding-margin').click(function(){
    $('.sub-block').removeClass('active');
    $(this).find('.sub-block').addClass('active');
    let idName = $(this).attr('id');
    if(idName == 'new-cust'){
        $('.block').removeClass('show')
        $('#select-shipping').addClass('show');
        $('html, body').animate({
            scrollTop: $("#select-shipping").offset().top - 200, 
        }, 1000);
    }else{
        $('.block').removeClass('show')
        $('#visit-login-page').addClass('show');
        $('html, body').animate({
            scrollTop: $("#visit-login-page").offset().top - 100, 
        }, 1000);
    }
})  

$('#select-shipping .cust-padding-margin').click(function(){
    $('#select-shipping .cust-padding-margin .sub-block').removeClass('active');
    $(this).find('.sub-block').addClass('active');
        // $('.block').removeClass('show')
        $('#select-sender-dtl').removeClass('show');
        $('#select-payment-mode .cust-padding-margin .sub-block').removeClass('active');
        $('#select-payment-mode').addClass('show');
        $('html, body').animate({
            scrollTop: $("#select-payment-mode").offset().top - 200, 
        }, 1000);
})  

$('#select-payment-mode .cust-padding-margin').click(function(){
    $('#select-payment-mode .cust-padding-margin .sub-block').removeClass('active');
    $(this).find('.sub-block').addClass('active');
    $('#select-sender-dtl').addClass('show');
    $('html, body').animate({
        scrollTop: $("#select-sender-dtl").offset().top - 200, 
    }, 1000);
})  
$('#select-sender-dtl .cust-padding-margin').click(function(){
    $('#select-sender-dtl .cust-padding-margin .sub-block').removeClass('active');
    // $(this).find('.sub-block').addClass('active');
})  

// ON FOCUSOUT FROM SENDER DETAILS INPUT BOX - MOVE TO RECIEVER DETAILS SECTION
$("#sender-details input").focusout(function() {
     if( $('#sender-name').val() != '' && $('#sender-contact-no').val() != '' && $('#sender-email').val() != '' && $('#sender-city').val() != '' && $('#sender-address').val() != '' && $('#sender-area').val() != '' && $('#package-qty').val() != '' &&  $('#package-wgt').val() != ''){
         if($('#volumetric-check-box').is(':checked') == true){
            if( $('#length').val() != '' && $('#width').val() != '' && $('#height').val() != ''){
                $('#reciever-details').removeClass('disabled');
                $('html, body').animate({
                    scrollTop: $("#reciever-details").offset().top -100 , 
                }, 1000);
            }
         }else{
            $('#reciever-details').removeClass('disabled');
            $('html, body').animate({
                scrollTop: $("#reciever-details").offset().top -100 , 
            }, 1000);
         }
        
     }else{
        $('#reciever-details') .addClass('disabled');
     }
  })

  // ON FOCUSOUT FROM RECIEVER DETAILS INPUT BOX - MOVE TO SUPPORTING DOCS SECTION
  $("#reciever-details input").focusout(function() {
    if( $('#reciever-name').val() != '' && $('#reciever-contact-no').val() != '' && $('#reciever-email').val() != '' && $('#reciever-city').val() != '' && $('#reciever-address').val() != '' && $('#reciever-area').val() != ''){
        $('#supporting-document').removeClass('disabled');
        $('html, body').animate({
            scrollTop: $("#supporting-document").offset().top -100 , 
        }, 1000);
     }else{
        $('#supporting-document') .addClass('disabled');
     }
  })

//   RESTRICTION ON TAB PRESS - BOOK CONSIGNMENT PAGE
  $('#package-wgt').keydown(function(objEvent) {
    if (objEvent.keyCode == 9) {  //tab pressed
        if( $('#sender-name').val() == '' || $('#sender-contact-no').val() == '' || $('#sender-email').val() == '' || $('#sender-city').val() == '' || $('#sender-address').val() == '' || $('#sender-area').val() == '' || $('#package-qty').val() == '' || $('#package-wgt').val() == ''){
            objEvent.preventDefault(); // stops its action
        }else{
            if($('#volumetric-check-box').is(':checked') == true){
                if( $('#length').val() == '' || $('#width').val() == '' || $('#height').val() == ''){
                    objEvent.preventDefault(); // stops its action
                }
            }
        }
    }
})

//   RESTRICTION ON TAB PRESS - BOOK CONSIGNMENT PAGE
$('#reciever-area').keydown(function(objEvent) {
    if (objEvent.keyCode == 9) {
        if( $('#reciever-name').val() == '' || $('#reciever-contact-no').val() == '' || $('#reciever-email').val() == '' || $('#reciever-city').val() == '' || $('#reciever-address').val() == '' || $('#reciever-area').val() == ''){
            objEvent.preventDefault(); // stops its action
        }
    }
})

// DISABLE ENABLE WHEN CHECKBOX IS CHECKED
$('#volumetric-check-box').click(function(){
    if($(this).is(':checked')){
       $('.volumetric-input-boxes').removeClass('disabled')
       $('.volumetric-input-boxes input').attr('disabled',false);
    }else{
        $('.volumetric-input-boxes').addClass('disabled')
       $('.volumetric-input-boxes input').attr('disabled',true);
    }

})

// USER-BOOK-CONSIGNMENT PAGE 
$('#sel-consignee').change(function(){
    if( $(this).val !== 'Select Consigne'){
        $('#consignee-address').removeClass('hide');
        $('#reciever-details, #Attachements, #payment-info, #declaration').removeClass('disabled');
        $('#supporting-document').removeClass('disabled');
        $('html, body').animate({
            scrollTop: $("#reciever-details").offset().top -100 , 
        }, 1000);
    }
})

$('#volum-info').click(function(){
    if($(this).is(':checked')){
       $('#supporting-document .send-rcv-dtl').removeClass('disabled')
    }else{
        $('#supporting-document .send-rcv-dtl').addClass('disabled')
    }
})
$('#declaration-checkbox').click(function(){
    if($(this).is(':checked')){
       $('#declaration .send-rcv-dtl .submit-btn').removeClass('disabled')
    }else{
        $('#declaration .send-rcv-dtl .submit-btn').addClass('disabled')
    }
})

function CloneDiv(){
     // get the last DIV which ID starts with ^= "klon"
    var $div = $('div[id^="package-info"]:last');

    // Read the Number from that DIV's ID (i.e: 3 from "klon3")
    // And increment that number by 1
    var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;

    // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
    var $klon = $div.clone().prop('id', 'package-info'+num );

    console.log($klon)
    // Finally insert $klon wherever you want
    $div.after( $klon);
    // $(".package-info").clone().insertAfter(".package-info:last");

    if($('.package-info').length > 1){
        $('#reciever-details .btn-danger').removeClass('disabled');
    }
}

function CloneVolumDiv(){
     var $div = $('div[id^="volumetric-info"]:last');
     var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;
 
     // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
     var $klon = $div.clone().prop('id', 'volumetric-info'+num );
    
     // Finally insert $klon wherever you want
     $div.after( $klon);

     if($('.volumetric-info').length > 1){
        $('#supporting-document .btn-danger').removeClass('disabled');
     }
}

function CloneAttaDiv(){
    var $div = $('div[id^="image-uploader"]:last');
    var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;

    // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
    var $klon = $div.clone().prop('id', 'image-uploader'+num );
   
    // Finally insert $klon wherever you want
    $div.after( $klon);

    if($('.image-uploader').length > 1){
       $('#Attachements .btn-danger').removeClass('disabled');
    }
}

function DelAttaDiv(){
    $('.image-uploader:last').remove();
    if($('.image-uploader').length == 1){
        $('#Attachements .btn-danger').addClass('disabled');
    }
}

function DelVolumDiv(){
    $('.volumetric-info:last').remove();
    if($('.volumetric-info').length == 1){
        $('#supporting-document .btn-danger').addClass('disabled');
    }
}

function DelDiv(){
    $('.package-info:last').remove();
    if($('.package-info').length == 1){
        $('#reciever-details .btn-danger').addClass('disabled');
    }
}




  






// SWEET ALERT - BOOK CONSIGNMENT PAGE
function submitDetails(e){
    swal("Great!", "Your booking #AWB 85SFTN02, Our Executive will reach you to pick the consignment in next 2-3 Hours !", "success");
}

