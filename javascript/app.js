

$(document).ready(function(){

    $("#search").keyup(function(){
        var input = $(this).val();

        if( input != ""){
            $.ajax({

                url: "contactsAdmin.php",
                method : "POST" ,
                data: {input:input},

                success:function(data){
                    $("#searchDiv").html(data);
                }

            })
        }
        //else{
        //     $("#searchDiv").css("display" , "none");
        // }

    })
})