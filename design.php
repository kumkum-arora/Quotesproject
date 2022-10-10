<?php
// using rapid api - quotes

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://quotes15.p.rapidapi.com/quotes/random/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: quotes15.p.rapidapi.com",
        "X-RapidAPI-Key: 41966c2f86mshcbf288416a468e0p162761jsncd9271762498"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $decoded = json_decode($response, true);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>quotes</title>
    <link rel="stylesheet" href="s1.css" />
</head>

<body class="body">
    <!-- header starts here -->
    <div class="head">
        <div class="head1">
            <p class="heading">Thought Of the Day</p>
        </div>
    </div>
    <!-- header end here -->
    <!-- main container starts here -->
    <div class="main">
        <div class="main1">
            <!-- quotes print here -->
            <p class="text1"><?php echo " " . $decoded['content'] . " "; ?></p>
        </div>
        <div class="main2">
            <!-- button for reload page  -->
            <a href="design.php" class="button">Next</a>
        </div>
    </div>
    <!-- main container end here -->
</body>

</html>