<?php require_once "web/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate();">
    <div id="mail-status"></div>
    <div>
        <label style="padding-top: 20px;">Movie Title</label> <span
            id="title-info" class="info"></span><br /> <input type="text"
            name="title" id="title" class="demoInputBox"
            value="<?php echo $result[0]["title"]; ?>">
    </div>
    <div>
        <label>Year of Release</label> <span id="release_year-info"
            class="info"></span><br /> <input type="text"
            name="release_year" id="release_year" class="demoInputBox"
            value="<?php echo $result[0]["release_year"]; ?>">
    </div>
    <div>
        <label>Genre</label> <span id="genre-info" class="info"></span><br />
        <input type="text" name="genre" id="genre" class="demoInputBox"
            value="<?php echo $result[0]["genre"]; ?>">
    </div>
    <div>
        <label>Status</label> <span id="status-info" class="info"></span><br />
        <input type="radio" name="status" value="Sold" <?php echo ($result[0]["status"]=='Sold')?'checked':'' ?>> Sold
        <input type="radio" name="status" value="Rented" <?php echo ($result[0]["status"]=='Rented')?'checked':'' ?>> Rented
        <input type="radio" name="status" value="Available" <?php echo ($result[0]["status"]=='Available')?'checked':'' ?>> Available
    </div>
    <div>
        <label>Rental Cost</label> <span id="cost_rent-info" class="info"></span><br />
        <input type="text" name="cost_rent" id="cost_rent" class="demoInputBox"
            value="<?php echo $result[0]["status"]; ?>">
    </div>
    <div>
        <label>Purchase Cost</label> <span id="cost_purchase-info" class="info"></span><br />
        <input type="text" name="cost_purchase" id="cost_purchase" class="demoInputBox"
            value="<?php echo $result[0]["cost_purchase"]; ?>">
    </div>
    <div>
        <input type="submit" name="add" id="btnSubmit" value="Save" />
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script>
function validate() {
    var valid = true;   
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    
    if(!$("#title").val()) {
        $("#title-info").html("(required)");
        $("#title").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#release_year").val()) {
        $("#release_year-info").html("(required)");
        $("#release_year").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#genre").val()) {
        $("#genre-info").html("(required)");
        $("#genre").css('background-color','#FFFFDF');
        valid = false;
    }
    // if(!$("#status").val()) {
    //     $("#status-info").html("(required)");
    //     $("#status").css('background-color','#FFFFDF');
    //     valid = false;
    // }   
    if(!$("#cost_rent").val()) {
        $("#cost_rent-info").html("(required)");
        $("#cost_rent").css('background-color','#FFFFDF');
        valid = false;
    }   
    if(!$("#cost_purchase").val()) {
        $("#cost_purchase-info").html("(required)");
        $("#cost_purchase").css('background-color','#FFFFDF');
        valid = false;
    }   
    return valid;
}
</script>
    </body>
    </html>