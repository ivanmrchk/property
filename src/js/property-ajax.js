




(function($) {
    console.log('loaded');
        let $mainContent = $('#main');
     
        
        $(document).on('click','ul.city-filter li a', function(e){
    
            e.preventDefault();
                let $el = $(this);
                var value = $el.attr("href");
                $mainContent.animate({opacity:"0.5"});
                $mainContent.load(value + " #inside", function(){
                    $mainContent.animate({opacity:"1"});
                });
                        
    })
   
  }(jQuery));