<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakultas Psikologi Unmer Malang</title>
    <link rel="stylesheet" href="Template_file/canyon/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Links of CSS files -->
    <link rel="stylesheet" href="Template_file/canyon/assets/css/aos.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/boxicons.min.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/flaticon.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/style.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/header.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/responsive.css">

    <style>
        /* Floating Button */
        #customer-service-ai {
            position: fixed;
            bottom: 20px;
            right: -80px;
            z-index: 9999;
            transition: right 0.5s ease;
        }
        #customer-service-ai.show { right: 20px; }
        #customer-service-ai button {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #C0C0C0 0%, #FF0000 100%);
            border-radius: 50%;
            border: none;
            color: white;
            font-size: 32px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%   { transform: scale(1); box-shadow: 0 0 0 rgba(192,192,192,0.7);}
            70%  { transform: scale(1.1); box-shadow: 0 0 20px rgba(255,0,0,0.7);}
            100% { transform: scale(1); box-shadow: 0 0 0 rgba(192,192,192,0);}
        }
    
        /* Popup Chat */
        #ai-chat-popup {
            position: fixed;
            bottom: 100px;
            right: 20px;
            width: 350px;
            max-height: 500px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            display: none;
            flex-direction: column;
            overflow: hidden;
            z-index: 99999;
            font-family: Arial, sans-serif;
        }
    
        /* Header */
        #ai-chat-popup-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(135deg, #C0C0C0 0%, #FF0000 100%);
            color: #fff;
            padding: 10px;
            font-weight: bold;
        }
        #ai-chat-popup-header .header-left {
            display: flex;
            align-items: center;
        }
        #ai-chat-popup-header .cs-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        #close-ai-chat {
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            color: white;
        }
    
        /* Body */
        #ai-chat-popup-body {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
            font-size: 14px;
            display: flex;
            flex-direction: column;
        }
    
        /* Input */
        #ai-chat-popup-input {
            display: flex;
            border-top: 1px solid #ddd;
        }
        #ai-chat-popup-input input {
            flex: 1;
            padding: 8px;
            border: none;
            outline: none;
        }
        #ai-chat-popup-input button {
            background: linear-gradient(135deg, #C0C0C0 0%, #FF0000 100%);
            color: white;
            border: none;
            padding: 0 12px;
            cursor: pointer;
            font-size: 16px;
        }
    
        /* Chat Bubbles */
        .ai-bubble {
            margin: 5px 0;
            padding: 8px 12px;
            border-radius: 15px;
            max-width: 80%;
        }
        .ai-user { background: #DCF8C6; align-self: flex-end; }
        .ai-bot  { background: #F1F0F0; align-self: flex-start; }
        .ai-typing { font-style: italic; color: #999; align-self: flex-start; margin:5px 0; }
    
        /* Quick Replies */
        .quick-replies {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-top: 10px;
        }
        .quick-reply {
            background: linear-gradient(135deg, #C0C0C0 0%, #FF0000 100%);
            color: white;
            border: none;
            border-radius: 15px;
            padding: 6px 12px;
            font-size: 12px;
            cursor: pointer;
            transition: 0.2s;
        }
        .quick-reply:hover { opacity: 0.9; }
    </style>
    
</head>

<body>

<!-- Floating Button -->
<div id="customer-service-ai">
    <button id="cs-btn">
        <i class="fas fa-robot"></i>
    </button>
</div>

<!-- Popup Chat -->
<div id="ai-chat-popup">
    <div id="ai-chat-popup-header">
        <div class="header-left">
            <img src="Template_file/canyon/assets/img/cs-avatar.png" alt="CS" class="cs-avatar">
            <span>Si Pinta</span>
        </div>
        <span id="close-ai-chat">✖</span>
    </div>

    <div id="ai-chat-popup-body"></div>

    <div id="ai-chat-popup-input">
        <input type="text" id="ai-message-input" placeholder="Tulis pesan...">
        <button id="ai-send-btn"><i class="fas fa-paper-plane"></i></button>
    </div>
</div>

<!-- Font Awesome untuk ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- JS Files -->
<script src="Template_file/canyon/assets/js/jquery.min.js"></script>
<script src="Template_file/canyon/assets/js/aos.js"></script>
<script src="Template_file/canyon/assets/js/bootstrap.min.js"></script>
<script src="Template_file/canyon/assets/js/magnific-popup.min.js"></script>
<script src="Template_file/canyon/assets/js/owl.carousel.min.js"></script>
<script src="Template_file/canyon/assets/js/main.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      const thumbnail = document.getElementById("video-thumbnail");
      const videoId = thumbnail.getAttribute("data-video-id");
  
      // Load thumbnail image
      thumbnail.style.backgroundImage = `url(https://img.youtube.com/vi/${videoId}/maxresdefault.jpg)`;
  
      // Replace thumbnail with iframe when clicked
      thumbnail.addEventListener("click", function() {
        const iframe = document.createElement("iframe");
        iframe.setAttribute("src", `https://www.youtube.com/embed/${videoId}?autoplay=1`);
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allow", "autoplay; encrypted-media");
        iframe.setAttribute("allowfullscreen", "true");
        iframe.style.position = "absolute";
        iframe.style.top = "0";
        iframe.style.left = "0";
        iframe.style.width = "100%";
        iframe.style.height = "100%";
  
        thumbnail.parentNode.replaceChild(iframe, thumbnail);
      });
    });
  </script>
  <script>
document.addEventListener("DOMContentLoaded", function() {
  const csButton = document.getElementById("customer-service-ai");
  const aiPopup = document.getElementById("ai-chat-popup");
  const csBtn = document.getElementById("cs-btn");
  const closeBtn = document.getElementById("close-ai-chat");
  const aiBody = document.getElementById("ai-chat-popup-body");
  const aiInput = document.getElementById("ai-message-input");
  const aiSend = document.getElementById("ai-send-btn");

  // tombol muncul
  setTimeout(() => csButton.classList.add("show"), 800);

  // buka/tutup popup
  csBtn.addEventListener("click", () => {
    aiPopup.style.display = aiPopup.style.display === "flex" ? "none" : "flex";
  });
  closeBtn.addEventListener("click", () => (aiPopup.style.display = "none"));

  // tampil pesan
  function addMessage(msg, type = "bot") {
    const div = document.createElement("div");
    div.className = `ai-bubble ai-${type}`;
    div.innerHTML = msg;
    aiBody.appendChild(div);
    aiBody.scrollTop = aiBody.scrollHeight;
  }

  // ======= Basis data jawaban =======
  const faq = [
    {
    q: ["halo", "bro", "hi", "hai", "pinta"],
    a: `👋 <b>Halo, kawan! Aku Si Pinta</b><br>
    Aku asisten virtual dari <b>Fakultas Psikologi Universitas Merdeka Malang</b>.<br>
    Fakultas ini berdiri sejak tahun <b>2001</b> dan berfokus pada pengembangan potensi individu melalui pendidikan psikologi yang profesional, inspiratif, dan berbasis pengalaman praktis.<br>
    Kamu bisa tanya apa saja tentang profil, dosen, kegiatan, atau layanan di Fakultas Psikologi UNMER Malang ya! 😊`
    },

    {
      q: ["profil", "tentang", "fakultas psikologi"],
      a: `📘 <b>Profil Fakultas Psikologi UNMER Malang</b><br>
      Fakultas ini berdiri sejak tahun 2001 dan menekankan pengembangan potensi individu melalui pendidikan psikologi yang profesional dan inspiratif. 
      Pembelajaran didukung pengalaman praktis, laboratorium, serta kegiatan kemahasiswaan yang aktif.`
    },
    {
      q: ["akreditasi"],
      a: `🏅 <b>Akreditasi</b><br>
      Program Studi Psikologi terakreditasi <b>"B"</b> oleh BAN-PT (SK No. 7463/SK/BAN-PT/Ak-PPJ/S/XI/2020).`
    },
    {
      q: ["kurikulum", "program studi", "prodi", "mata kuliah"],
      a: `📚 <b>Kurikulum dan Program Studi</b><br>
      Sarjana Psikologi (S.Psi) 144 SKS (7-8 semester). Bidang kajian:<br>
      • Psikologi Industri & Organisasi<br>
      • Psikologi Pendidikan<br>
      • Psikologi Sosial<br>
      • Psikologi Klinis<br>
      Mahasiswa dibekali latihan bahasa Inggris, komputer, TOEFL, dan fasilitas laboratorium psikodiagnostik.`
    },
    {
      q: ["lulusan", "kerja", "prospek", "alumni"],
      a: `🎓 <b>Profil Lulusan</b><br>
      Lulusan dapat bekerja sebagai:<br>
      – SDM spesialis / HRD<br>
      – Asisten psikolog<br>
      – Guru atau konselor<br>
      – Peneliti dasar<br>
      – Motivator & fasilitator komunitas<br>
      – Content creator atau wirausaha mandiri.`
    },
    {
      q: ["organisasi", "bem", "mahasiswa", "kegiatan"],
      a: `🤝 <b>Organisasi Mahasiswa</b><br>
      BEM-F, DPM-F, MAHESSA, IKAPSI. Kegiatan rutin : Dekan Cup (debat, futsal, badminton) untuk pengembangan soft skill.`
    },
    {
      q: ["lpt", "lembaga psikologi terapan"],
      a: `🧠 <b>Lembaga Psikologi Terapan (LPT)</b><br>
      Berdiri sejak 2008 untuk layanan praktik psikologi di bidang pendidikan, perkembangan, klinis, dan organisasi. Kontak LPT: 📧 lpt.psikologi@unmer.ac.id 📱 +62 853-9338-6211`
    },
    {
      q: ["kontak", "telepon", "hubungi", "alamat"],
      a: `📞 <b>Kontak Fakultas Psikologi UNMER Malang</b><br>
      • Email: psikologi@unmer.ac.id<br>
      • Telp: (0341) 568395 ext. 821<br>
      • Alamat: Jl. Terusan Dieng No. 62-64, Malang, Jawa Timur.`
    },
    {
      q: ["dosen", "pengajar"],
      a: `👩‍🏫 <b>Dosen dan Bidang Kepakaran</b><br>
      • Dr. Nawang Warsi Wulandari – Psikologi Pendidikan dan Keluarga<br>
      • Dr. Agustin Rahmawati – Psikologi Perkembangan & Gender<br>
      • Dr. Rinto Wahyu Widodo – Psikologi Pendidikan & Konseling Pra-Nikah<br>
      • Husnul Khotimah – Psikologi Klinis & Positif<br>
      • Al Thuba Septa Priyanggasari – Psikologi Klinis & Positif<br>
      • dll. Total > 15 dosen berkualifikasi profesional.`
    },
    {
      q: ["koordinator", "unit", "penunjang"],
      a: `🏛️ <b>Koordinator Unit Penunjang</b><br>
      • Al Thuba Septa – Kepala Pusat Studi<br>
      • Husnul Khotimah – Kepala Lab Psikodiagnostik<br>
      • Dr. Rinto W. Widodo – Koordinator Jurnal Tabularasa<br>
      • Eka Indah N. – Lab Perkembangan (PAUD)<br>
      • Firlia C. Kartika – Ketua LPT<br>
      • Lukman Hakim – Pembina MAHESA<br>
      • Richo S. Pradana – Pembina KOMPAS<br>
      • dll.`
    },
    {
      q: ["koordinator", "peminatan", "rumpun", "email dosen"],
      a: `📧 <b>Koordinator Rumpun Keilmuan</b><br>
      • Dr. Nawang Warsi Wulandari – Psikologi Pendidikan <nawang.warsi@unmer.ac.id><br>
      • Dr. Agustin Rahmawati – Psikologi Perkembangan <agustin.rahmawati@unmer.ac.id><br>
      • M. Untung Manara – Psikologi Industri & Organisasi <muhammad.untung@unmer.ac.id><br>
      • Husnul Khotimah – Psikologi Klinis <husnul.khotimah@unmer.ac.id>`
    },
    {
      q: ["unit layanan", "layanan", "kontak unit"],
      a: `📠 <b>Kontak Unit Layanan</b><br>
      • Fakultas: psikologi@unmer.ac.id / (0341) 568395 ext 821<br>
      • LPT: lpt.psikologi@unmer.ac.id / +62 853-9338-6211<br>
      • PAUD Ananda: paudananda.tk@unmer.ac.id / Bu Eka +62 853-3682-2205<br>
      • Lab Psikodiagnostik: Bu Husnul +62 812-3269-3236<br>
      • Skripsi: skripsi.psikologi@unmer.ac.id / Bu Usla +62 856-4676-4500`
    },
    {
      q: ["terima kasih", "makasih", "thanks"],
      a: "😊 Sama-sama! Senang bisa membantu kamu mengenal Fakultas Psikologi UNMER Malang."
    }
  ];

  // cari jawaban
  function getReply(msg) {
    const text = msg.toLowerCase();
    for (let f of faq) {
      if (f.q.some(k => text.includes(k))) return f.a;
    }
    return "🤔 Maaf, Si Pinta belum punya informasi tentang itu. Coba tanyakan hal lain seputar Fakultas Psikologi UNMER Malang.";
  }

  // kirim pesan
  function sendMessage() {
    const msg = aiInput.value.trim();
    if (!msg) return;

    addMessage(msg, "user");
    aiInput.value = "";

    const typing = document.createElement("div");
    typing.textContent = "Si Pinta sedang mengetik...";
    typing.className = "ai-typing";
    aiBody.appendChild(typing);
    aiBody.scrollTop = aiBody.scrollHeight;

    setTimeout(() => {
      typing.remove();
      addMessage(getReply(msg), "bot");
    }, 800);
  }

  aiSend.addEventListener("click", sendMessage);
  aiInput.addEventListener("keypress", e => {
    if (e.key === "Enter") sendMessage();
  });

  // sapaan awal
  setTimeout(() => {
    aiPopup.style.display = "flex";
    addMessage("Halo 👋, saya <b>Si Pinta</b>! Ada yang bisa saya bantu seputar Fakultas Psikologi UNMER Malang?");
  }, 9000000000000);
});
</script>


  
  
  

<body>
   
