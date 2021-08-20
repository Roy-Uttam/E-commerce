function validateAmount(amount, pid){
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name= "csrf_token"]').attr('content')
        }
    });

    $.ajax({
        url: "/products/validate-amount",
        data: {
            'qty': amount,
            'pid': pid
        },
        async: false,
        type: 'POST'
    }).done(function (data){

         let newData= JSON.parse(data);

            let htm= '';
            if(newData.success){
                htm+= '<div class="alert alert-danger">' + newData.message + '</div>';
                document.getElementById('error_message').innerHTML = htm;
                document.getElementById('qty').value = 1;
            } else{
                document.getElementById('error_message').innerHTML = '';
        }
        
        
    });
}