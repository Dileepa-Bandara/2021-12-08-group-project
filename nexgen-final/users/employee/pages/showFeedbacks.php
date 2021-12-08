<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table td,
        table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <div id="showFeedbacks"></div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {

                showFeedbacks();

                function showFeedbacks() {
                    $.ajax({
                        url: "../../assets/showFeedbacks.php",
                        method: "post",
                        //grab data from form
                        data: $("#feedback-form").serialize() + "&action=feedbackShow",
                        success: function(response) {
                            // console.log(response);

                            $("#showFeedbacks").html(response);
                            //new



                        }

                    })
                }
            }





        );
    </script>
</body>

</html>