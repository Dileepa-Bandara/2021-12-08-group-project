<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .mainContainer {
            display: flex;
            flex-direction: column;
            margin: 40px;
        }

        .feedback-heading {
            margin-top: 25px;
            font-size: 25px;
            font-weight: bold;
        }

        .feedback-input {
            display: flex;
            /* background: lightblue; */
            justify-content: space-around;
            margin-top: 30px;
        }

        .feedback-input input {
            width: 30%;
            padding: 5px;
        }

        .feedback-input label {
            font-weight: bold;
        }

        .feedback-text {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
        }

        .feedback-text textarea {
            padding: 10px;
        }

        .feedback-text label {
            font-weight: bold;
        }

        .feedback-submit {
            margin-top: 20px;
            background: darkblue;
            color: white;
            font-weight: bold;
            padding: 8px;
        }

        .alert {
            background: tomato;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        .alert-button {
            border: none;
            background: darkblue;
            color: white;
            padding: 8px;
            border-radius: 8px;
        }

        .view-feedbacks {
            text-decoration: none;
            background: darkblue;
            color: white;
            padding: 20px;
            width: 300px;
            text-align: center;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="mainContainer">
        <div class="feedback-heading">Employee Feedback Form</div>
        <a href="index.php?Page=showFeedbacks.php" class="view-feedbacks">View All Feedbacks</a>
        <div class="feedback-form">
            <form action="" id="feedback-form">
                <div class="feedback-input">
                    <label for="">First Name :</label>
                    <input type="text" name="first" require />
                    <label for="">Last Name :</label>
                    <input type="text" name="last" require />
                </div>
                <div class="feedback-text">
                    <label for="">Are you having issues with your job in your current position? If
                        yes, then please explain it below:</label>

                    <textarea id="" cols="30" rows="10" name="issue">Enter</textarea>
                </div>
                <div class="feedback-text">
                    <label for="">Please provide any suggestions or feedback that will help to make
                        your job responsibilities better.</label>

                    <textarea id="" cols="30" rows="10" name="suggestions">Enter</textarea>
                </div>
                <div class="feedback-text">
                    <label for="">Is there a work style or culture you don't like in the
                        company?</label>

                    <textarea id="" cols="30" rows="10" name="work-style">Enter</textarea>
                </div>
                <div class="feedback-text">
                    <label for="">Comments, feedback or suggestions to your current manager</label>

                    <textarea id="" cols="30" rows="10" name="feedback">Enter</textarea>
                </div>
                <div class="message" id="message">


                </div>
                <input type="submit" value="Submit" class="feedback-submit" id="feedback-submit" />
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            //Ajax request
            //register form validation
            $("#feedback-submit").click(function(e) {
                if ($("#feedback-form")[0].checkValidity()) {
                    e.preventDefault();
                    $("#feedback-submit").val("Please Wait.....");
                    //Ajax request
                    $.ajax({
                        url: "../../assets/feedback.php",
                        method: "post",
                        //grab data from form
                        data: $("#feedback-form").serialize() + "&action=feedback",
                        success: function(response) {
                            // console.log(response);
                            $("#message").html(response);

                            //new
                            $("#feedback-form")[0].reset();
                            $("#feedback-submit").val("Submit");

                        }

                    })

                    //new
                    showFeedbacks();

                    function showFeedbacks() {
                        $.ajax({
                            url: "../../assets/showFeedbacks.php",
                            method: "post",
                            //grab data from form
                            data: $("#feedback-form").serialize() + "&action=feedbackShow",
                            success: function(response) {
                                // console.log(response);
                                $("#message").html(response);

                                //new
                                $("#feedback-form")[0].reset();
                                $("#feedback-submit").val("Submit");

                            }

                        })
                    }
                }


            })
            $("#alert-button").click(function() {
                $("#message").hide();
            });
            // $('#alert').html(response);
        });
    </script>
</body>

</html>