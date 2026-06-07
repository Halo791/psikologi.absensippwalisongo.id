<?php
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = strtolower(trim($_POST['message'] ?? ''));
    $reply = "Maaf, saya tidak mengerti pertanyaan Anda. Silakan tanyakan tentang Fakultas Psikologi Unmer Malang 😊";

    // Rule-based responses
    if (strpos($message, 'fakultas') !== false || strpos($message, 'psikologi') !== false) {
        $reply = "Fakultas Psikologi UNMER Malang berdiri sejak 2 Agustus 2001. Kami fokus mencetak lulusan yang kompeten, berintegritas, dan berdaya saing global.";
    } 
    elseif (strpos($message, 'visi') !== false) {
        $reply = "Visi Fakultas Psikologi UNMER Malang adalah menjadi Fakultas terkemuka dalam pengembangan SDM seutuhnya yang berjiwa wirausaha pada skala nasional dan internasional.";
    } 
    elseif (strpos($message, 'misi') !== false) {
        $reply = "Misi kami: 
        1️⃣ Menyelenggarakan pendidikan tinggi berkualitas. 
        2️⃣ Menyelenggarakan penelitian & pengabdian kepada masyarakat. 
        3️⃣ Tata kelola fakultas berbasis good university governance.";
    }
    elseif (strpos($message, 'dosen') !== false) {
        $reply = "Fakultas Psikologi UNMER Malang memiliki dosen berkompeten, misalnya: 
        - Dr. Nawang Warsi W., S.Psi., M.Si., Psikolog (Dekan) 
        - Dellawaty Supraba, S.Psi., M.Si (Kaprodi) 
        - M. Untung Manara, S.Psi., MA., Ph.D (Wakil Dekan I)";
    }
    elseif (strpos($message, 'ukm') !== false || strpos($message, 'organisasi') !== false) {
        $reply = "Unit kegiatan mahasiswa di Fakultas Psikologi antara lain: BEM-F, DPM-F, IKAPSI, MAHESSA, KOMPAS, HARPSI, dan KOMENPSI.";
    }
    elseif (strpos($message, 'jadwal') !== false || strpos($message, 'kuliah') !== false) {
        $reply = "Jadwal kuliah bisa diakses di menu 'Jadwal Kuliah' pada website fakultas atau hubungi bagian akademik.";
    }
    elseif (strpos($message, 'kontak') !== false || strpos($message, 'hubungi') !== false) {
        $reply = "Kontak kami: 
        📍 Jl. Terusan Raya Dieng 62-64, Malang 
        ☎️ (0341) 568395 
        📧 psikologi@unmer.ac.id";
    }

    echo json_encode(["reply" => $reply]);
    exit;
} else {
    echo json_encode(["error" => "Invalid request"]);
}
