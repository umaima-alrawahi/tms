jQuery(function($) {
    $("#search").keyup(function(){
        $.ajax({
            url: 'test.php',
            type: 'post',
            data: {search: $(this).val()},
            success: function(result){
                $('#result').html(result);
            }
        });
    });

    $("#counter").click(function(){
        $.ajax({
            url: 'test.php',
            type: 'post',
            data: {counter: $(this).val()},
            success: function(result){
                $('#countRes').html(result);
            }
        });
    });
    
    $('#country').keyup(function() {
        var country = this.value;
        $('#countryName').html(country);
    });   
});

function ShowHideDiv() {
    var chkYes = document.getElementById("chkYes");
    var chkFlight = document.getElementById("chkFlight");
    chkFlight.style.display = chkYes.checked ? "block" : "none";
}

function findTotal(){
    var cost = document.getElementsByName('cost');
    var total=0;
    var person = document.getElementsByName('person[]');

    for(var i=0;i<cost.length;i++){
        var input = person[i];
        if(parseInt(cost[i].value))
        total += parseInt(cost[i].value * input.value);
    }
    document.getElementById('total').value = total;
}

function country(){
    var countryName = document.getElementById("Country").value;
    document.getElementById("countryName").value = countryName;
}

