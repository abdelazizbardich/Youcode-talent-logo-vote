$(document).ready(function(){
    $(document).ajaxStart(function(){
        $('.loading').fadeIn();
    });
    $( document ).ajaxComplete(function() {
        $('.loading').fadeOut();
    });
    $('#logo1').click(function(){sendVoteData("1");});
    $('#logo2').click(function(){sendVoteData("2");});
    $('#logo3').click(function(){sendVoteData("3");});



    
        $('.datatable').DataTable();
});

















function sendVoteData(choice){
    let fName = $('input[name="firstname"]');
    let lName = $('input[name="lastname"]');
    let email = $('input[name="email"]');
    if(fName.val() == ''){fName.addClass('invalide bounce-once'); return false;}else{fName.removeClass('invalide bounce-once');}
    if(lName.val() == ''){lName.addClass('invalide bounce-once'); return false;}else{lName.removeClass('invalide bounce-once');}
    if(email.val() == ''){email.addClass('invalide bounce-once'); return false;}else{email.removeClass('invalide bounce-once');}
    if(!isEmail(email.val())){email.next().fadeIn();email.next().text("Votre email n'est pas correct!"); return false;}else{email.next().fadeOut();email.next().text("");}
    fName = fName.val();
    lName = lName.val();
    email = email.val();
    let successAlert = `<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 99vh;">
        <div class="col">
            <div class="jumbotron text-center">
                <h1><i class="fas fa-check" style="color: #273d90;margin-right: 15px;"></i>Votre vote a été enregistré</h1>
                <p>Merci pour votre collaboration</p><i class="far fa-handshake" style="font-size: 105px;color: #273d90;"></i></div>
            </div>
        </div>
    </div>`;
    $.post({
        url:'./vote.php',
        data:{'firstname':fName,'lastname':lName,'email':email,vote:choice},
        success:function(res){
            console.log(res);
            if(res != 0){
               document.cookie = "voted=true";
                $('body').html(successAlert);
            }
        },
        error:function(err){
            console.log(err);
        }
     });
}

// Verify email 
function isEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
  }