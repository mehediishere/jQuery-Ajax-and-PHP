<?php
    session_start();
    include 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $res = mysqli_fetch_assoc($conn->query("SELECT * FROM user WHERE `id`='1'"));
    ?>
    <input type="text" value="<?php echo $res['firstName'];?>" class="save" data-ser="<?php echo $res['id'];?>" data-table="<?php echo "user";?>" data-col="<?php echo "firstName";?>">
    <span style="display:none;"><?php echo $res['name'];?></span>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // update all table info
            $(".save").on("focusout",function(){
                var val=$(this).val();
                var ser=$(this).attr("data-ser");
                var table=$(this).attr("data-table");
                var col=$(this).attr("data-col");
                
                console.log(ser);
                console.log(val);
                console.log(table);
                console.log(col);
                
                var reeq=$.ajax({
                    method:"GET",
                    url: "actions/update.php",
                    data: {val:val,ser:ser,table:table,col:col,ahksd:"ggf"}
                });
                reeq.done(function(msg){
                    console.log(msg);
                    var yy=msg;
                    if(yy!="0"){
                        alert("You clicked the button!");
                    }else{
                        alert("Something went wrong!!");
                    }
                    
                });
            });
        });
    </script>
</body>
</html>