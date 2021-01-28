/*
Description: Free to use for personal and commercial use
Author: WebThemez.com
Website: http://webthemez.com
Note: Please do not remove the footer backlink (webthemez.com)--(if you want to remove contact: webthemez@gmail.com)
Licence: Creative Commons Attribution 3.0** - http://creativecommons.org/licenses/by/3.0/
*/
jQuery(document).ready(function ($) {
    
    //Set the carousel options
    $('#quote-carousel').carousel({
        pause: true,
        interval: 4000,
    });
    // fancybox
    $(".fancybox").fancybox();
    //isotope
    if ($('.isotopeWrapper').length) {
        var $container = $('.isotopeWrapper');
        var $resize = $('.isotopeWrapper').attr('id');
        // initialize isotope
        $container.isotope({
            itemSelector: '.isotopeItem',
            resizable: false, // disable normal resizing
            masonry: {
                columnWidth: $container.width() / $resize
            }
        });
        $("a[href='#top']").click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
        $('.navbar-inverse').on('click', 'li a', function () {
            $('.navbar-inverse .in').addClass('collapse').removeClass('in').css('height', '1px');
        });
        $('#filter a').click(function () {
            $('#filter a').removeClass('current');
            $(this).addClass('current');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 1000,
                    easing: 'easeOutQuart',
                    queue: false
                }
            });
            return false;
        });
        $(window).smartresize(function () {
            $container.isotope({
                // update columnWidth to a percentage of container width
                masonry: {
                    columnWidth: $container.width() / $resize
                }
            });
        });
    }
});
var modal=$(".modal");
window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
}
$("#x7").click(function(){
  $(".modal").css({"display":'none',"width":'auto'});
})

$("#im").click(function(e){
  $(".modal").css({"display":'block',"width":'100%',"heigh":'100%'});
})  
    
var mo =$(".mo");
  window.onclick = function(event) {
    if (event.target == mo) {
        mo.style.display = "none";
    }
  }
  $("#x").click(function(){
    $(".mo").css({"display":'none',"width":'auto'});
  })
  
  $("#im1").click(function(e){
    $(".mo").css({"display":'block',"width":'100%',"heigh":'100%'});
      
      



   })
   var sport1 =$(".sport1");
  window.onclick = function(event) {
    if (event.target == sport1) {
        sport1.style.display = "none";
    }
  }
  $("#xx").click(function(){
    $(".sport1").css({"display":'none',"width":'auto'});
  })
  
  $("#im2").click(function(e){
    $(".sport1").css({"display":'block',"width":'100%',"heigh":'100%'});
      
      



   })

   var sport2 =$(".sport2");
  window.onclick = function(event) {
    if (event.target == sport2) {
        sport2.style.display = "none";
    }
  }
  $("#x1").click(function(){
    $(".sport2").css({"display":'none',"width":'auto'});
  })
  
  $("#im3").click(function(e){
    $(".sport2").css({"display":'block',"width":'100%',"heigh":'100%'});
      
      



   })
   var sport3 =$(".sport3");
   window.onclick = function(event) {
     if (event.target == sport3) {
         sport3.style.display = "none";
     }
   }
   $("#x2").click(function(){
     $(".sport3").css({"display":'none',"width":'auto'});
   })
   
   $("#im4").click(function(e){
     $(".sport3").css({"display":'block',"width":'100%',"heigh":'100%'});
       
       
 
 
 
    })


    var sport4 =$(".sport4");
   window.onclick = function(event) {
     if (event.target == sport4) {
         sport4.style.display = "none";
     }
   }
   $("#x3").click(function(){
     $(".sport4").css({"display":'none',"width":'auto'});
   })
   
   $("#im5").click(function(e){
     $(".sport4").css({"display":'block',"width":'100%',"heigh":'100%'});
       
       
 
 
 
    })
    var comp1 =$(".comp1");
    window.onclick = function(event) {
      if (event.target == comp1) {
          comp1.style.display = "none";
      }
    }
    $("#x4").click(function(){
      $(".comp1").css({"display":'none',"width":'auto'});
    })
    
    $("#im6").click(function(e){
      $(".comp1").css({"display":'block',"width":'100%',"heigh":'100%'});
        
        
  
  
  
     })
 

     var comp2 =$(".comp2");
     window.onclick = function(event) {
       if (event.target == comp2) {
           comp2.style.display = "none";
       }
     }
     $("#x5").click(function(){
       $(".comp2").css({"display":'none',"width":'auto'});
     })
     
     $("#im7").click(function(e){
       $(".comp2").css({"display":'block',"width":'100%',"heigh":'100%'});
         
         
   
   
   
      })
      var comp3 =$(".comp3");
      window.onclick = function(event) {
        if (event.target == comp3) {
            comp3.style.display = "none";
        }
      }
      $("#x6").click(function(){
        $(".comp3").css({"display":'none',"width":'auto'});
      })
      
      $("#im8").click(function(e){
        $(".comp3").css({"display":'block',"width":'100%',"heigh":'100%'});
          
          
    
    
    
       })
       var modall=$(".modall");
       window.onclick = function(event) {
         if (event.target == modall) {
             modall.style.display = "none";
         }
       }
       $("#y1").click(function(){
         $(".modall").css({"display":'none',"width":'auto'});
       })
       
       $("#i1").click(function(e){
         $(".modall").css({"display":'block',"width":'100%',"heigh":'100%'});
       })  
           
       var moo =$(".moo");
         window.onclick = function(event) {
           if (event.target == moo) {
               moo.style.display = "none";
           }
         }
         $("#y2").click(function(){
           $(".moo").css({"display":'none',"width":'auto'});
         })
         
         $("#i2").click(function(e){
           $(".moo").css({"display":'block',"width":'100%',"heigh":'100%'});
             
             
       
       
       
          })
          var sport11 =$(".sport11");
         window.onclick = function(event) {
           if (event.target == sport11) {
               sport11.style.display = "none";
           }
         }
         $("#y3").click(function(){
           $(".sport11").css({"display":'none',"width":'auto'});
         })
         
         $("#i3").click(function(e){
           $(".sport11").css({"display":'block',"width":'100%',"heigh":'100%'});
             
             
       
       
       
          })
       
          var sport22 =$(".sport22");
         window.onclick = function(event) {
           if (event.target == sport22) {
               sport22.style.display = "none";
           }
         }
         $("#y4").click(function(){
           $(".sport22").css({"display":'none',"width":'auto'});
         })
         
         $("#i4").click(function(e){
           $(".sport22").css({"display":'block',"width":'100%',"heigh":'100%'});
             
             
       
       
       
          })
          var sport33 =$(".sport33");
          window.onclick = function(event) {
            if (event.target == sport33) {
                sport33.style.display = "none";
            }
          }
          $("#y5").click(function(){
            $(".sport33").css({"display":'none',"width":'auto'});
          })
          
          $("#i5").click(function(e){
            $(".sport33").css({"display":'block',"width":'100%',"heigh":'100%'});
              
              
        
        
        
           })
       
       
           var sport44 =$(".sport44");
          window.onclick = function(event) {
            if (event.target == sport44) {
                sport44.style.display = "none";
            }
          }
          $("#y6").click(function(){
            $(".sport44").css({"display":'none',"width":'auto'});
          })
          
          $("#i6").click(function(e){
            $(".sport44").css({"display":'block',"width":'100%',"heigh":'100%'});
              
              
        
        
        
           })
           var comp11 =$(".comp11");
           window.onclick = function(event) {
             if (event.target == comp11) {
                 comp11.style.display = "none";
             }
           }
           $("#y7").click(function(){
             $(".comp11").css({"display":'none',"width":'auto'});
           })
           
           $("#i7").click(function(e){
             $(".comp11").css({"display":'block',"width":'100%',"heigh":'100%'});
               
               
         
         
         
            })
        
       
            var comp22 =$(".comp22");
            window.onclick = function(event) {
              if (event.target == comp22) {
                  comp22.style.display = "none";
              }
            }
            $("#y8").click(function(){
              $(".comp22").css({"display":'none',"width":'auto'});
            })
            
            $("#i8").click(function(e){
              $(".comp22").css({"display":'block',"width":'100%',"heigh":'100%'});
                
                
          
          
          
             })
             var comp33 =$(".comp33");
             window.onclick = function(event) {
               if (event.target == comp33) {
                   comp33.style.display = "none";
               }
             }
             $("#y9").click(function(){
               $(".comp33").css({"display":'none',"width":'auto'});
             })
             
             $("#i9").click(function(e){
               $(".comp33").css({"display":'block',"width":'100%',"heigh":'100%'});
                 
                 
           
           
           
              })
          

