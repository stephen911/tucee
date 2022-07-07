<?php 

/**
 * Requires libcurl
 */

const mobileNumber = "0245544577";
$curl = curl_init();

$payload = array(
  "amount" => 1,
  "title" => "string",
  "description" => "string",
  "clientReference" => "string",
  "callbackUrl" => "http://example.com",
  "cancellationUrl" => "http://example.com",
  "returnUrl" => "http://example.com",
  "logo" => "http://example.com"
);

curl_setopt_array($curl, [
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "Authorization: Basic " . base64_encode("<username>:<password>")
  ],
  CURLOPT_POSTFIELDS => json_encode($payload),
  CURLOPT_URL => "https://devp-reqsendmoney-230622-api.hubtel.com/request-money/" . mobileNumber,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
]);

$response = curl_exec($curl);
$error = curl_error($curl);

curl_close($curl);

if ($error) {
  echo "cURL Error #:" . $error;
} else {
  echo $response;
}

?>