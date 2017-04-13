$('.testimonies div:first').show();
         setInterval(function(){ $('.testimonies div:first-child').fadeOut().next('div').fadeIn().end().appendTo('.testimonies') },3000);