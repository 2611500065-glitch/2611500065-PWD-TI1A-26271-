const navToggle = document.getElementById("navToggle");
const navMenu = document.getElementById("navMenu");
const contactForm = document.getElementById("contactForm");
const formFeedback = document.getElementById("formFeedback");

// Navigasi responsif
console.log("Tombol ditemukan:", navToggle);
console.log("Menu ditemukan:", navMenu);

if (navToggle && navMenu) {
  navToggle.addEventListener("click", () => {
    console.log("Hamburger berhasil diklik!");

    const menuTerbuka = navMenu.classList.toggle("active");
    navToggle.setAttribute("aria-expanded", String(menuTerbuka));
  });
}

const namaInput = document.getElementById("nama");
const emailInput = document.getElementById("email");
const prodiInput = document.getElementById("prodi");
const semesterInput = document.getElementById("semester");
const tanggalInput = document.getElementById("tanggal");
const pesanInput = document.getElementById("pesan");

if (contactForm && formFeedback) {
  contactForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const nama = namaInput.value.trim();
    const email = emailInput.value.trim();
    const prodi = prodiInput.value;

    let errors = [];

    if (nama.length < 3) {
      errors.push("Nama harus diisi minimal 3 karakter.");
    }

    const polaEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!polaEmail.test(email)) {
      errors.push("Masukkan alamat email yang valid.");
    }

    if (!prodi) {
      errors.push("Silakan pilih program studi.");
    }
    const semester = semesterInput?.value.trim() || "";
const tanggal = tanggalInput?.value || "";
const pesan = pesanInput?.value.trim() || "";

if (semesterInput && !semester) {
  errors.push("Semester wajib diisi.");
}

if (tanggalInput && !tanggal) {
  errors.push("Tanggal wajib diisi.");
}

if (pesan.length < 10) {
  errors.push("Pesan minimal 10 karakter.");
}

const jenisPesan = contactForm.querySelector(
  'input[name="jenis_pesan"]:checked'
);

if (!jenisPesan) {
  errors.push("Silakan pilih jenis pesan.");
}

const minatDipilih = contactForm.querySelectorAll(
  'input[name="minat"]:checked'
);

if (minatDipilih.length === 0) {
  errors.push("Pilih minimal satu topik minat.");
}

    if (errors.length > 0) {
      formFeedback.textContent = errors.join(" ");
      formFeedback.style.color = "red";
      return;
    }

    formFeedback.textContent = "Form berhasil divalidasi.";
    formFeedback.style.color = "green";
  });

  contactForm.addEventListener("reset", () => {
    formFeedback.textContent = "";
  });

  contactForm.addEventListener("input", () => {
    formFeedback.textContent = "";
  });
}