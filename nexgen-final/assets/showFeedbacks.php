<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/nexgen-final/assets/session.php';
//new
if (isset($_POST["action"]) && $_POST["action"] == "feedbackShow") {
    // echo "show feedbacks";
    // echo $id;
    $output = '';
    $feedbacks  = $currentUser->showFeedbacks($id);
    // print_r($feedbacks);
    //new show feedbacks
    $output .= " <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Issue</th>
            <th>Suggestions</th>
            <th>Feedbacks</th>
        </tr>";
    if ($feedbacks) {


        foreach ($feedbacks as $row) {
            $output .= "  <tr>
            <td>" . $row['first'] . "</td>
            <td>" . $row['last'] . "</td>
            <td>" . $row['issue'] . "</td>
            <td>" . $row['suggestions'] . "</td>
            <td>" . $row['feedback'] . "</td>
        </tr>";
        }
    }
    $output .= " </table>";
    echo $output;
}
