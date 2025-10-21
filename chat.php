<?php
// === DEBUG STEP 1 ===
file_put_contents("debug_log.txt", "=== NEW REQUEST ===\n", FILE_APPEND);
file_put_contents("debug_log.txt", file_get_contents("php://input") . "\n", FILE_APPEND);

$input = json_decode(file_get_contents("php://input"), true);
file_put_contents("debug_log.txt", print_r($input, true) . "\n", FILE_APPEND);

if (!$input) {
    echo json_encode(["error" => "Tidak ada input JSON"]);
    exit;
}

$userMessage = $input["message"] ?? "(kosong)";
file_put_contents("debug_log.txt", "User message: $userMessage\n", FILE_APPEND);

// ====== OpenRouter Request ======
$apiKey = "sk-or-v1-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
$model = "alibaba/tongyi-deepresearch-30b-a3b:free";

$data = [
    "model" => $model,
    "input" => $userMessage,
];

$ch = curl_init("https://openrouter.ai/api/v1/chat/completions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $apiKey",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
curl_close($ch);

file_put_contents("debug_log.txt", "Response dari OpenRouter:\n$response\n", FILE_APPEND);

echo $response;
?>
