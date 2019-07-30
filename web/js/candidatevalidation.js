
   
  jQuery(document).ready(function() { 
    
    jQuery('#candidates-student_id').on('change', function() {

        jQuery.ajax({
          type: 'POST',
          url: base_url+'/admin/students/getstudent',  
          data: {student_id: jQuery(this).val()}, 
          dataType: 'json',
          success: function(data) {
            console.log(data.status);
            console.log(data.studid);
            console.log(data.name);
    
            jQuery('#candidates-student_id').val(data.studid)
            jQuery('#candidates-fullname').val(data.name);
            jQuery('#canprofile').html(data.name);
          }
        });

        console.log(this.value + 'jubrex');

    });
    
  jQuery('#candidates-campaign_id').on('change', function() {

    jQuery.ajax({
        type: 'POST',
        url: base_url+'/admin/students/getstudentname',  
        data: {
          campaign_id: $("#candidates-campaign_id").val()
        }, 
        dataType: 'json',
        success: function(data) {

          console.log(data.status);
          console.log(data.std_drp);
          jQuery("#candidates-student_id").html('');
          var select = document.getElementById("candidates-student_id")
            
          for ( index in data.std_drp) 
          {
            select.options[select.options.length] = new Option(data.std_drp[index].firstname+data.std_drp[index].lastname, data.std_drp[index].student_id );
            console.log('student_id'+ data.std_drp[index].student_id)
          }

            // console.log(data.name);
             
             // loop then manipulate student id dropdown
          //   alert(data.std_drp[2].platform);
             $('#candidates-student_id').attr('value',data.student_id);

            // jQuery('#candidates-student_id').val(data.studid)
           //  jQuery('#candidates-fullname').val(data.name);
              //jQuery('#student_id').html(data.name);
        }
    });


  });

  


});
