getMessages();
$("#send").click(function(e) {
    e.preventDefault();
    $.ajax({
        url: "Routeur.php?function=save",
        method: "POST",
        dataType: 'json',
        data: { content: $("input").val() }
    }).done(function(response) {
        getMessages();
    })
})

function getMessages() {
    $.ajax({
        url: "Routeur.php?function=get",
        dataType: 'json',

        success: function(response) {
            response.forEach(message => {
                $("#messages").append(`<div><p>${message.user}&nbsp|&nbsp</p> <p> ${message.content}</p> <p> | ${message.sendAt}</p></div>`)

            });
            console.log(response);
        }
    })


//     const requeteAjax = new XMLHttpRequest();
//     requeteAjax.open('POST', 'index.php?task=write');
    
//     requeteAjax.onload = function(){
//         getMessages();
//     }

//     requeteAjax.send(data);
// 
}

// clear input after submit

function submitForm() {
    setTimeout (function(){
        var frm = document.getElementsByName('tchat')[0];
        frm.reset(); 
        return false; 
    }, 0);
}

// forbidden empty input

// function validateForm() {
//     var x = document.forms["tchat"]["fchat"].value;
//     if (x == "" || x == null) {
//       alert("Name must be filled out");
//       return false;
//     }
//   }

