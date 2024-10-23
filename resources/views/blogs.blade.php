<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>
<body>
    <label for="startNumber">Start number</label>
    <input type="text" name="startNumber" id="startNumber">
    
    <label for="endNumber">End number</label>
    <input type="text" name="endNumber" id="endNumber">

    <span>Sum</span>
    <input type="text" name="sum" id="sum">
    

    <script>

        $("#startNumber").on( "keyup", function(event) {
            calcuate();
        });

        $("#endNumber").on( "keyup", function(event) {
            calcuate();
        });


        function calcuate() {
            start = $("#startNumber").val();
            end = $("#endNumber").val();

            if(!start || !end) 
                return;
            
            $.ajax({
                url: "/api/calculate",
                data: { startNumber: start, endNumber: end}
                }).done(function(response) {
                    console.log(response.data)
                    $('#sum').val(response.data) 
            });
        }

    </script>


    
</body>
</html>