$(document).ready(function(){

    // like and unlike click
    $(".like").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");
        // console.log(id);

        var text = split_id[0];
        var postid = split_id[1];  // postid

        // Finding click type
        var type = 0;
        if(text == "like"){
            type = 1;
        }else{
            type = 0;
        }

        // AJAX Request
        $.ajax({
            url: 'likeunlike.php',
            type: 'post',
            data: {postid:postid,type:type},
            dataType: 'json',
            success: function(data){
                var likes = data['likes'];
                // var unlikes = data['unlikes'];
                
                console.log(data);

                $("#likes_"+postid).text(likes);        // setting likes
                // $("#unlikes_"+postid).text(unlikes);    // setting unlikes

                if( data['type'] == 1){
                    $("#like_"+postid).css("color","red");
                    $("#love_l"+postid).css("color","red");
                    // $("#love_"+postid).css("color","red");

                    
                    // $("#unlike_"+postid).css("color","lightseagreen");
                }

                if( data['type'] == 0){
                    // $("#unlike_"+postid).css("color","#ffa449");
                    $("#like_"+postid).css("color","#adb2b6");
                    $("#love_l"+postid).css("color","#adb2b6");
                    // $("#love_"+postid).css("color","black");
                }

            }
        });

    });

});