/* 
* Author: Cedric Tientcheu
* Date: 27/07/2016
*/

'use strict';

(function($){

    var $form = $("form"), $search =  $("#search"), $select = $("select"), $count, $option = $("option"), $dest = $("#dest"), $this = $(this);
    
    function collectData(){ 
        $search.attr('disabled', 'disabled');
        
        $select.on('change', function(){
            
           if(this.selectedIndex == 0){
               $('.error').show();
               
           }else{
                $('.error').hide();
                var text = $option.text();
               $search.removeAttr('disabled');
                }
            });
               
       $search.on('click', function(e){
          $search.attr('value', 'Please wait...').attr('disabled', 'disabled');
           e.preventDefault();
           $form.find($select).attr('disabled', 'disabled');
           var data = $('select :selected').text();           
           
           $('p').text(data);
           $search.submit();
       });  
            
    }
     
        
    collectData(); 
    
}(jQuery));