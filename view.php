<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
    <button id="loadmore" type="button" data-id="">Load More</button>
    <br>
    <br>
	<table id="loaddata" border = "1" cellpadding = "5">
        <thead>
          <tr>
              <th>id</th>
              <th>name</th>
              <th>phone</th>
          </tr>
        </thead>
        <tbody>    
          <tr>
            <td>id-1</td>
            <td>name-1</td>
            <td>phone-1</td>
          </tr>
        </tbody>
	</table>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script>
		$(function() {
            function loadTable(page){
                $.ajax({
                    url: "actions/view.php",
                    type: "POST",
                    data: {page_num : page},
                    success: function(retrived_data){
                        if(retrived_data){
                            $("#pagination").remove();
                            $("#loaddata").append(retrived_data);
                          }else{
                            $("#ajaxbtn").html("Finished");
                            $("#ajaxbtn").prop("disabled",true);
                          }
                    }
                });
            }
            loadTable();
		});
        
    // Add Click Event on ajaxbtn
    $(document).on("click","#ajaxbtn",function(){
      $("#ajaxbtn").html("Loading...");
      var pid = $(this).data("id");
      loadTable(pid);
    });
	</script>
</body>
</html>