<?php
header('Content-Type: application/json');

// --- 1️⃣ Ambil pesan dari frontend ---
$input = json_decode(file_get_contents('php://input'), true);
$message = trim($input['message'] ?? '');

// --- 2️⃣ Validasi pesan ---
if ($message === '') {
    echo json_encode(["error" => ["message" => "Pesan tidak boleh kosong."]]);
    exit;
}

// --- 3️⃣ Konfigurasi OpenRouter API ---
$url = "https://openrouter.ai/api/v1/chat/completions";
$api_key = "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"; // Ganti dengan API key dari openrouter.ai

// --- 4️⃣ Data yang dikirim ke API ---
$data = [
    "model" => "alibaba/tongyi-deepresearch-30b-a3b:free", // model cepat & ringan
    "messages" => [
        [
            "role" => "system",
            "content" => "Kamu adalah Si Pinta, asisten AI Fakultas Psikologi Universitas Merdeka Malang. Jawablah dengan gaya profesional, sopan, dan mudah dipahami mahasiswa."
        ],
        [
            "role" => "user",
            "content" => $message
        ]
    ],
    "max_tokens" => 600,
    "temperature" => 0.8
];

// --- 5️⃣ Kirim request ke OpenRouter ---
$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer $api_key",
        "Content-Type: application/json",
        "Referer: https://psikologi.absensippwalisongo.id", // sesuaikan domain referer dengan kebutuhan
        "X-Title: Fakultas Psikologi Unmer Malang"
    ],
    CURLOPT_POSTFIELDS => json_encode($data)
]);

$response = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);

// --- 6️⃣ Tangani error koneksi ---
if ($error) {
    echo json_encode(["error" => ["message" => "CURL Error: $error"]]);
    exit;
}

// --- 7️⃣ Parse hasil OpenRouter ---
$result = json_decode($response, true);

// --- 8️⃣ Jika hasil valid, kirim kembali dalam format OpenAI-style ---
if (isset($result['choices'][0]['message']['content'])) {
    echo json_encode([
        "choices" => [
            [
                "message" => [
                    "content" => $result['choices'][0]['message']['content']
                ]
            ]
        ]
    ]);
} else {
    // Jika respons error dari OpenRouter
    echo json_encode([
        "error" => [
            "message" => "Tidak ada hasil dari AI.",
            "raw" => $result
        ]
    ]);
}
?>
