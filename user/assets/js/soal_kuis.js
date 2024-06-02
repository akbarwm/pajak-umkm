// JavaScript untuk menangani tipe
const radioPilihanGanda = document.getElementById("pilihan_ganda");
const radioEssai = document.getElementById("esai");
const soalPilihanGanda = document.getElementById("soalPilihanGanda");
const soalEsai = document.getElementById("soalEsai");

radioPilihanGanda.addEventListener("change", () => {
   if (radioPilihanGanda.checked) {
      soalPilihanGanda.classList.remove("visually-hidden");
      soalEsai.classList.add("visually-hidden");
   }
});

radioEssai.addEventListener("change", () => {
   if (radioEssai.checked) {
      soalEsai.classList.remove("visually-hidden");
      soalPilihanGanda.classList.add("visually-hidden");
   }
});

// Javascript untuk menangani jawaban
document.getElementById("pilihan_a").addEventListener("change", function () {
   var pilihan_a = document.getElementById("pilihan_a").value;

   if (pilihan_a) {
      document.getElementById("jawaban_a").disabled = false;
      document.getElementById("pilihan_b").disabled = false;
      document.getElementById("submit").disabled = false;
   } else {
      document.getElementById("jawaban_a").checked = true;
      document.getElementById("jawaban_b").disabled = true;
      document.getElementById("jawaban_c").disabled = true;
      document.getElementById("jawaban_d").disabled = true;
      document.getElementById("jawaban_e").disabled = true;
      document.getElementById("pilihan_b").disabled = true;
      document.getElementById("pilihan_c").disabled = true;
      document.getElementById("pilihan_d").disabled = true;
      document.getElementById("pilihan_e").disabled = true;
      document.getElementById("pilihan_a").value = "";
      document.getElementById("pilihan_b").value = "";
      document.getElementById("pilihan_c").value = "";
      document.getElementById("pilihan_d").value = "";
      document.getElementById("pilihan_e").value = "";
      document.getElementById("submit").disabled = true;
   }
});
document.getElementById("pilihan_b").addEventListener("change", function () {
   var pilihan_b = document.getElementById("pilihan_b").value;

   if (pilihan_b) {
      document.getElementById("jawaban_b").disabled = false;
      document.getElementById("pilihan_c").disabled = false;
   } else {
      document.getElementById("jawaban_a").checked = true;
      document.getElementById("jawaban_b").disabled = true;
      document.getElementById("jawaban_c").disabled = true;
      document.getElementById("jawaban_d").disabled = true;
      document.getElementById("jawaban_e").disabled = true;
      document.getElementById("pilihan_c").disabled = true;
      document.getElementById("pilihan_d").disabled = true;
      document.getElementById("pilihan_e").disabled = true;
      document.getElementById("pilihan_b").value = "";
      document.getElementById("pilihan_c").value = "";
      document.getElementById("pilihan_d").value = "";
      document.getElementById("pilihan_e").value = "";
   }
});
document.getElementById("pilihan_c").addEventListener("change", function () {
   var pilihan_c = document.getElementById("pilihan_c").value;

   if (pilihan_c) {
      document.getElementById("jawaban_c").disabled = false;
      document.getElementById("pilihan_d").disabled = false;
   } else {
      document.getElementById("jawaban_b").checked = true;
      document.getElementById("jawaban_c").disabled = true;
      document.getElementById("jawaban_d").disabled = true;
      document.getElementById("jawaban_e").disabled = true;
      document.getElementById("pilihan_d").disabled = true;
      document.getElementById("pilihan_e").disabled = true;
      document.getElementById("pilihan_c").value = "";
      document.getElementById("pilihan_d").value = "";
      document.getElementById("pilihan_e").value = "";
   }
});
document.getElementById("pilihan_d").addEventListener("change", function () {
   var pilihan_d = document.getElementById("pilihan_d").value;

   if (pilihan_d) {
      document.getElementById("jawaban_d").disabled = false;
      document.getElementById("pilihan_e").disabled = false;
   } else {
      document.getElementById("jawaban_c").checked = true;
      document.getElementById("jawaban_d").disabled = true;
      document.getElementById("jawaban_e").disabled = true;
      document.getElementById("pilihan_e").disabled = true;
      document.getElementById("pilihan_d").value = "";
      document.getElementById("pilihan_e").value = "";
   }
});
document.getElementById("pilihan_e").addEventListener("change", function () {
   var pilihan_e = document.getElementById("pilihan_e").value;

   if (pilihan_e) {
      document.getElementById("jawaban_e").disabled = false;
   } else {
      document.getElementById("jawaban_d").checked = true;
      document.getElementById("jawaban_e").disabled = true;
      document.getElementById("pilihan_e").value = "";
   }
});