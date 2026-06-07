<?php
// ai_chat.php - OpenRouter AI + model x-ai/grok-4-fast:free
header('Content-Type: application/json');

// Hanya terima POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['error' => 'Hanya POST request yang diterima']);
    exit;
}

// Ambil pesan user
$userMessage = $_POST['message'] ?? '';
if (!$userMessage) {
    echo json_encode(['error' => 'Pesan kosong']);
    exit;
}

// API Key OpenRouter
$apiKey = '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';

// Data request ke OpenRouter
$data = [
    "model" => "x-ai/grok-4-fast:free",
    "messages" => [
        [
            "role" => "system",
            "content" => "Kamu adalah asisten Customer Service Fakultas Psikologi Universitas Merdeka Malang. Jawab secara sopan, informatif, dan ramah."
        ],
        [
            "role" => "user",
            "content" => $userMessage
        ]
    ],
    "temperature" => 0.7,
    "max_tokens" => 300
];

// Initialize cURL
$ch = curl_init('https://openrouter.ai/api/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Eksekusi cURL
$response = curl_exec($ch);

// Cek error cURL
if (curl_errno($ch)) {
    echo json_encode(['error' => 'Curl Error: ' . curl_error($ch)]);
    exit;
}
curl_close($ch);

// Decode response JSON
$responseData = json_decode($response, true);

// Cek jika OpenRouter mengembalikan error
if (isset($responseData['error'])) {
    echo json_encode(['error' => $responseData['error']['message']]);
    exit;
}

// Ambil jawaban AI
// Untuk OpenRouter, response mirip OpenAI
$aiReply = $responseData['choices'][0]['message']['content'] ?? 'AI tidak merespon';

// Kembalikan JSON ke frontend
echo json_encode(['reply' => $aiReply]);
