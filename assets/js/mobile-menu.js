import $ from 'jquery';


$(()=>{

    $('#mobile_close').on('click', ()=>{
 
       $('#mobile_header').children().fadeOut(200);
       $('#bluryDiv').removeClass("blurDiv")
       $('#mobile_header').animate({ width: '0' }, 300);
       $('#fixed-cover-full-screen').addClass("hidden")
       $('#fixed-cover-full-screen').remove("fixed");
      })
   
      $('#mobile_open').on('click',()=>{
       $('#mobile_header').children().fadeIn(200);
       $('#bluryDiv').addClass("blurDiv");
       $('#mobile_header').animate({ width: '18rem' }, 300);
       $('#fixed-cover-full-screen').removeClass("hidden")
       $('#fixed-cover-full-screen').addClass("fixed");
      })
   
   
      $('#fixed-cover-full-screen').on('click', ()=>{
         console.log("click")
         $('#mobile_header').children().fadeOut(200);
         $('#bluryDiv').removeClass("blurDiv")
         $('#mobile_header').animate({ width: '0' }, 300);
         $('#fixed-cover-full-screen').addClass("hidden")
         $('#fixed-cover-full-screen').remove("fixed");
      })
 
 })