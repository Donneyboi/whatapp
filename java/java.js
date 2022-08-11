$(document).ready(function () {
	//hide signin
	$('.signin').hide();
	//input hide
	
	$('.datediv').hide();
	$('.email').hide();
	$('.gender').hide();
	$('.country').hide();
	$('.passworddiv').hide();
	$('.finishdiv').hide();
//
     $('.showemail').on('click',function () {
    $('.firstdiv').fadeOut(100);
    $('.email').fadeIn(100);
    $('.datediv').fadeOut(100);
	$('.gender').fadeOut(100);
	$('.country').fadeOut(100);
	$('.passworddiv').fadeOut(100);
	$('.finishdiv').fadeOut(100);
	
    })

       $('.showedate').on('click',function () {
    $('.firstdiv').fadeOut(100);
    $('.email').fadeOut(100);
    $('.datediv').fadeIn(100);
	$('.gender').fadeOut(100);
	$('.country').fadeOut(100);
	$('.passworddiv').fadeOut(100);
	$('.finishdiv').fadeOut(100);
	
    })

     $('.showegender').on('click',function () {
    $('.firstdiv').fadeOut(100);
    $('.email').fadeOut(100);
    $('.datediv').fadeOut(100);
	$('.gender').fadeIn(100);
	$('.country').fadeOut(100);
	$('.passworddiv').fadeOut(100);
	$('.finishdiv').fadeOut(100);
	
    })

      $('.showcountry').on('click',function () {
    $('.firstdiv').fadeOut(100);
    $('.email').fadeOut(100);
    $('.datediv').fadeOut(100);
	$('.gender').fadeOut(100);
	$('.country').fadeIn(100);
	$('.passworddiv').fadeOut(100);
	$('.finishdiv').fadeOut(100);
	
    })


      $('.showpassword').on('click',function () {
    $('.firstdiv').fadeOut(100);
    $('.email').fadeOut(100);
    $('.datediv').fadeOut(100);
	$('.gender').fadeOut(100);
	$('.country').fadeOut(100);
	$('.passworddiv').fadeIn(100);
	$('.finishdiv').fadeOut(100);
	
    })

    $('.showpfinish').on('click',function () {
    $('.firstdiv').fadeOut(100);
    $('.email').fadeOut(100);
    $('.datediv').fadeOut(100);
	$('.gender').fadeOut(100);
	$('.country').fadeOut(100);
	$('.passworddiv').fadeOut(100);
	$('.finishdiv').fadeIn(100);
	
    })

    //

     $('.closefirstdiv').on('click',function () {
    $('.firstdiv').fadeIn(100);
    $('.email').fadeOut(100);
    $('.datediv').fadeOut(100);
	$('.gender').fadeOut(100);
	$('.country').fadeOut(100);
	$('.passworddiv').fadeOut(100);
	$('.finishdiv').fadeOut(100);
	
    })

       $('.closeemail').on('click',function () {
    $('.firstdiv').fadeOut(100);
    $('.email').fadeIn(100);
    $('.datediv').fadeOut(100);
	$('.gender').fadeOut(100);
	$('.country').fadeOut(100);
	$('.passworddiv').fadeOut(100);
	$('.finishdiv').fadeOut(100);
	
    })

     $('.closedate').on('click',function () {
    $('.firstdiv').fadeOut(100);
    $('.email').fadeOut(100);
    $('.datediv').fadeIn(100);
	$('.gender').fadeOut(100);
	$('.country').fadeOut(100);
	$('.passworddiv').fadeOut(100);
	$('.finishdiv').fadeOut(100);
	
    })

      $('.closegender').on('click',function () {
    $('.firstdiv').fadeOut(100);
    $('.email').fadeOut(100);
    $('.datediv').fadeOut(100);
	$('.gender').fadeIn(100);
	$('.country').fadeOut(100);
	$('.passworddiv').fadeOut(100);
	$('.finishdiv').fadeOut(100);
	
    })


      $('.closecountry').on('click',function () {
    $('.firstdiv').fadeOut(100);
    $('.email').fadeOut(100);
    $('.datediv').fadeOut(100);
	$('.gender').fadeOut(100);
	$('.country').fadeIn(100);
	$('.passworddiv').fadeOut(100);
	$('.finishdiv').fadeOut(100);
	
    })

    $('.closepassw').on('click',function () {
    $('.firstdiv').fadeOut(100);
    $('.email').fadeOut(100);
    $('.datediv').fadeOut(100);
	$('.gender').fadeOut(100);
	$('.country').fadeOut(100);
	$('.passworddiv').fadeIn(100);
	$('.finishdiv').fadeOut(100);
	
    })

	$('.showsigin').on('click',function () {
	$('.signin').fadeIn(100);
	$('.signup').fadeOut(100);
    })

    $('.showsigup').on('click',function () {
	$('.signin').fadeOut(100);
	$('.signup').fadeIn(100);
    })

	//
	$('.chat').hide();
	$('.storie').show();
	$('.notification').hide();
	$('.user').hide();

	$('.c').on('click',function () {
	$('.chat').show();	
	$('.storie').hide();
	$('.notification').hide();
	$('.user').hide();	
	})

	$('.s').on('click',function () {
	$('.chat').hide();	
	$('.storie').show();
	$('.notification').hide();
	$('.user').hide();	
	})


	$('.n').on('click',function () {
	$('.chat').hide();	
	$('.storie').hide();
	$('.notification').show();
	$('.user').hide();	
	})

    $('.u').on('click',function () {
	$('.chat').hide();	
	$('.storie').hide();
	$('.notification').hide();
	$('.user').show();	
	})

	//show hidden post
	$('.hpost').hide();
	$('.showhpost').on('click',function () {
	$('.hpost').show();
	})

	$('.closehpost').on('click',function () {
	$('.hpost').hide();
	})
	
       var d=0;
	$('.darkmode').on('click',function () {
		d++;
		if (d==2) {d=0;}
		if (d==1) {$('.homepage').css({"background":"white","color":"black"});}

		else{$('.homepage').css({"background":" rgba(0,0,0,1.7)","color":"white"});}


			})


  


$('.forms2').hide();
	$('.adds').on('click',function () {
	$('.forms2').show();
	})

})


