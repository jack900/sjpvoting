$(function()
{

   
//get the click of the create button v23
	$('#modalButton').click(function()
  {
		$('#modal').modal('show')
		.find('#modalContent')
		.load($(this).attr('value'));
	});
 

	$('#sendcode').click(function()
  {  


     var form = document.getElementById('w0');
      // var form = document.getElementById('w0-filters');
      var chks = form.querySelectorAll('.checkbox-row');

      var checked = [];
      for(var i = 0; i < chks.length; i++)
      {
        if(chks[i].checked){
          checked.push(chks[i].value)
        }
      } 
      console.log(checked);

      // #w0 > table > tbody > tr:nth-child(1) > td:nth-child(2) > input[type=checkbox]
      // #w0 > table > thead > tr:nth-child(1) > th:nth-child(2) > input

    jQuery.ajax({
        type: 'POST',
        url: base_url+'/admin/students/sendcode',  
         data: {
             student_id: checked
          }, 
        
        dataType: 'json',
        success: function(data){
        console.log(data.status);
        }

    });

    

  
   });
  


 });

  

   //  alert($(this).val());

        // var array=document.getElementByName('selection[]');
        //  var array=document.getElementById('checkbox[]');

    //         var array=[];
    //       for (var i=0; i < array.length; i++)
    //       {
    //       //array[i]=$value;
    //              // array[i]=value[student_id];
    //              array.push($(this).value[student_id];
    //     //     ln++
    //      }
    //     // alert(ln)
    //    // console.log(data.status);
    // //    console.log(chks);
    //     console.log($(this).val()); //orig
      //  alert($(this).val());

         // console.log("success");

           
        //    var check = document.getElementById('selection')

        // //  selection.push($(this).val());
        //   $("[type=checkbox]").click(function(){
        //   var clicked = $(this);
        //   console.log(clicked.text($(this) +" === "+clicked.val()));

       // var code = ["checkbox"];
       //document.getElementById("demo").innerHTML = code[0];
     //  console.log($(this).val());

    // var items=document.val('selection');
   //    var selectedItems="";
    //  for(var i=0; i<items.length; i++){
    //    if(items[i].type=='checkbox' && items[i].checked==true)
    //  selectedItems+=items[i].value+"\n";
    //  }
    //  alert(selectedItems);
       // console(clicked.text() +" === "+clicked.val());
    
    // console.log($(this).val());

    //console.log("success");
    //alert(clicked.text() +" === "+clicked.val());
           
        //  var array=document.getElementByName('selection[]');
        // // var ln=0;
        //  for (var i=0, i< array.length; ++i){
        // //   if(array[i]=.array;
        //         array[i]=value[id];
        //     ln++
        // }
       // alert(ln)

       // var array=document.getElementById('selection[]');
       //  var ln=0;
       //    for (var i=0; i< array.length; i++)
       //    {
       //    if(array[i]=.);
       //          // array[i]=value[id];
       //      ln++
       //    }
       // alert(ln)
       //result all value

      //expect value
       //[501, 502, 701]
	    
