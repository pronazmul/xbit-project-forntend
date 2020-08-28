// Owl Carousel Start..................
$(document).ready(function() {
    var one = $("#one");
    var two = $("#two");

    $('#customNextBtn').click(function() {
        one.trigger('next.owl.carousel');
    })
    $('#customPrevBtn').click(function() {
        one.trigger('prev.owl.carousel');
    })
    one.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    two.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

});
// Owl Carousel End..................

//Axios. Request For Contract Form...

$('#contractSubmit').click(function(){

    let name = $('#contractName').val();
    let mobile = $('#contractMobile').val();
    let email = $('#contractEmail').val();
    let message = $('#contractMessage').val();

    insertContractData(name,mobile,email,message);

});

    function insertContractData(name,mobile,email,message){

        if(name.length==0){ toastr.error('ERROR! Type Name.');}
        else if(mobile.length==0){ toastr.error('ERROR! Type Mobile NO.');}
        else if(email.length==0){ toastr.error('ERROR! Type Email.');}
        else if(message.length==0){ toastr.error('ERROR! Type Message.');}
        else {

            $('#contractSubmit').html("<div class='spinner-grow spinner-grow-sm text-light' role='status'></div>");
            axios.post('/insertContractData',{
            
                name:name,
                mobile:mobile,
                email:email,
                message:message

            }).then(function(response){
                if(response.status==200){
                    $('#contractSubmit').html("MESSAGE");
                    toastr.success('Message Sent Successful.');
                        $('#contractName').val('');
                        $('#contractMobile').val('');
                        $('#contractEmail').val('');
                        $('#contractMessage').val('');

                }else{
                    $('#contractSubmit').html("MESSAGE");
                    toastr.error('Failed! Something Went Wrong.');
                }
            }).catch(function(error){

                    $('#contractSubmit').html("MESSAGE");
                    toastr.error('Failed! Something Went Wrong.');
            });

        }

    }



//Resistration Data Mannagement

$('#register').click(function(){

    let name = $('#regName').val();
    let email = $('#regEmail').val();
    let mobile = $('#regMobile').val();
    let pass = $('#regPass').val();
    let bkashno = $('#regBkashNumber').val();
    let bkashtrxid = $('#regBkashTrxid').val();

    userResisger(name,email,mobile,pass,bkashno,bkashtrxid);

});

    function userResisger(name,email,mobile,pass,bkashno,bkashtrxid){

        if(name.length==0){ toastr.error('ERROR! Type Name.');}
        else if(email.length==0){ toastr.error('ERROR! Type Email ID.');}
        else if(mobile.length==0){ toastr.error('ERROR! Type Mobile No.');}
        else if(pass.length==0){ toastr.error('ERROR! Type Password');}
        else if(bkashno.length==0){ toastr.error('ERROR! Type Bkash No.');}
        else if(bkashtrxid.length==0){ toastr.error('ERROR! Type Bkash Trxid.');}
        else {

            $('#register').html("<div class='spinner-grow spinner-grow-sm text-light' role='status'></div>");
            
            axios.post('/userResisger',{
                name:name,
                email:email,
                mobile:mobile,
                bkashno:bkashno,
                pass:pass,
                bkashtrxid:bkashtrxid

            }).then(function(response){
                if(response.status==200){
                    $('#register').html("Waitting For Apprival");
                    toastr.success('Request Success.');
                        $('#regName').val('');
                        $('#regEmail').val('');
                        $('#regMobile').val('');
                        $('#regPass').val('');
                        $('#regBkashNumber').val('');
                        $('#regBkashTrxid').val('');

                        setTimeout(function(){ $('#register').html("Resistration Now");}, 4000);
                }else{
                    $('#register').html("Resistration Now");
                    toastr.error('Failed! Something Went Wrong.');
                }
            }).catch(function(error){

                    $('#register').html("Resistration Now");
                    toastr.error('Failed! Something Went Wrong.');
            });

        }

    }

    
//Login Data Mannagement

$('#login').click(function(){

    let mobile = $('#loginMobile').val();
    let pass = $('#loginPass').val();

    userLogin(mobile,pass);

});

    function userLogin(mobile,pass){

        if(mobile.length==0){ toastr.error('ERROR! Type Mobile No.');}
        else if(pass.length==0){ toastr.error('ERROR! Type Password');}
        else {

            $('#login').html("Authenticating <div class='spinner-grow spinner-grow-sm text-light' role='status'></div>");
            
            axios.post('/userLogin',{
            
                mobile:mobile,
                pass:pass

            }).then(function(response){
                if(response.status==200 && response.data==1){
                    toastr.success('Login Success.');
                    $('#login').html("Logged In");
                        $('#loginMobile').val('');
                        $('#loginPass').val('');
                        window.location.href="/dashboard";
                }else{
                    $('#login').html("LOGIN");
                    toastr.error('Failed! Invalid user or pass.');
                }
            }).catch(function(error){
                    $('#login').html("LOGIN");
                    toastr.error('Failed! Something Went Wrong.');
            });

        }

    }

// Light Custom js
baguetteBox.run('.tz-gallery');