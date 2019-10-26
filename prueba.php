<?php include("includes/header.php");?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">

    <title>Json & Jquery</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>

<body>
    <h1>Json & Jquery</h1>

    <select id="delegaciones"></select> 


    <script type="text/javascript">
    $(document).on('ready',function (){
        
        $.getJSON('delegaciones.json', function(data) {
            $.each(data, function(key, value) {
                $("#delegaciones").append('<option name="' + value.customer_id + '">' + value.name + '</option>');
            }); // close each()
        }); // close getJSON()
    });
    </script>
    <?php
$url = 'https://aruba.easygetpaid.com/hackathon/tenants';

print_r(get_headers($url));

print_r(get_headers($url, 1));
?>

</body>
</html>
<?php include("includes/footer.php"); ?>