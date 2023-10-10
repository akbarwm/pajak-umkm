const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");  
  current += 1;  
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1 ].classList.add("active");
  progressCheck[current - 1].classList.add("active");  
  current += 1;
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1 ].classList.add("active");
  progressCheck[current - 1].classList.add("active");  
  current += 1;
});
prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");  
  current -= 1;
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");  
  current -= 1;
});

// 

var coll = document.getElementsByClassName("collapsible");
var c;

for (c = 0; c < coll.length; c++) {
  coll[c].addEventListener("click", function() {
    this.classList.toggle("active");
var content = document.querySelector(".content-collapse");
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

// 

function startCalc(){
  interval = setInterval( "calc()", 1);
}

function calc(){
  valueGajiPensiun = numeral(formMasa.gajiPensiun.value); 
  document.getElementById('gajiPensiun').value = valueGajiPensiun.format();

  valueTunjPph = numeral(formMasa.tunjPph.value);
  document.getElementById('tunjPph').value =  valueTunjPph.format();

  valueTunjLain = numeral(formMasa.tunjLain.value);
  document.getElementById('tunjLain').value = valueTunjLain.format();

  valueTunjHonor = numeral(formMasa.tunjHonor.value);
  document.getElementById('tunjHonor').value = valueTunjHonor.format();

  valueTunjAsuransi = numeral(formMasa.tunjAsuransi.value);
  document.getElementById('tunjAsuransi').value = valueTunjAsuransi.format();
 
  valueNatura = numeral (formMasa.natura.value);
  document.getElementById('natura').value = valueNatura.format();

  valueBonusJasa = numeral(formMasa.bonusJasa.value);
  document.getElementById('bonusJasa').value = valueBonusJasa.format();

  valueIuranPensiun = numeral(formMasa.iuranPensiun.value); 
  document.getElementById('iuranPensiun').value = valueIuranPensiun.format();

  valueHasilBruto = (( valueGajiPensiun.value() * 1) + (valueTunjPph.value() * 1) + (valueTunjLain.value() * 1) + (valueTunjHonor.value() * 1) + (valueTunjAsuransi.value() * 1) + (valueNatura.value() * 1) + (valueBonusJasa.value() * 1));  
  
  document.formMasa.hasilBruto.value = numeral(valueHasilBruto).format();
  hitungBiayaJabatan = (valueHasilBruto * 1) * (5 / 100);  
  

  var biayaJabatan = 0;
  if (hitungBiayaJabatan >= 500000) {
    biayaJabatan = 500000;
  } else {
    biayaJabatan = hitungBiayaJabatan;
  }
  document.formMasa.biayaJabatan.value = numeral(biayaJabatan).format();


  var masaPenghasilan = document.getElementById('masaAkhir').value - document.getElementById('masaAwal').value + 1;

  var bruto = valueHasilBruto * masaPenghasilan;
  document.formMasa.brutoSetahun.value = numeral(bruto).format();  

  var valueBiayaJabatan = biayaJabatan;
  var valueJabatanSetahun = valueBiayaJabatan * masaPenghasilan;
  document.formMasa.jabatanSetahun.value = numeral(valueJabatanSetahun).format(); 

  var valueIuranSetahun = valueIuranPensiun.value() * masaPenghasilan;
  document.formMasa.iuranSetahun.value = numeral(valueIuranSetahun).format(); 
  
  var valuePengurangSetahun = (valueJabatanSetahun * 1) + (valueIuranSetahun * 1)
  document.formMasa.pengurangSetahun.value = numeral(valuePengurangSetahun).format(); 

  valueBrutoSetahun = bruto;

  var valueHasilNeto = (valueBrutoSetahun * 1) - (valuePengurangSetahun * 1);
  document.formMasa.hasilNeto.value = numeral(valueHasilNeto).format(); 

  var valueNetoSetahun = (valueHasilNeto * (12 / masaPenghasilan))
  document.formMasa.netoSetahun.value = numeral(valueNetoSetahun).format(); 

  valueTanggungan = document.getElementById('tanggungan').value;
  valueStatusKawin = document.getElementById('statusKawin').value;

  valuePtkp =  parseInt(valueStatusKawin) + parseInt(valueTanggungan);
  document.formMasa.ptkp.value = numeral(valuePtkp).format(); 

  var valuePkpSetahun = valueNetoSetahun - valuePtkp;
  document.formMasa.pkp.value = numeral(valuePkpSetahun).format(); 
  // document.formMasa.pkp.value = this.countPajakProgresif(valueNetoSetahun - valuePtkp, document.getElementById('npwp').value);
  var valuePkp21 = countPajakProgresif(valuePkpSetahun, Boolean(document.getElementById('npwp').value));
  document.formMasa.pkp21.value = numeral(valuePkp21).format(); 


  // valuePkp21 = document.formMasa.pkp21.value;
  document.formMasa.pph21TerutangSebulan.value = numeral(valuePkp21 / 12).format(); 

  // document.formMasa.pph21Teratur.value = (valuePkp21) ;

  valuePph21Teratur = document.formMasa.pph21Teratur.value;
  // document.formMasa.pph21TakTeratur.value = (valuePkp21) - (valuePph21Teratur);

  valuePph21TakTeratur = document.formMasa.pph21TakTeratur.value;
  document.formMasa.pph21TerutangSebulan.value = numeral(valuePkp21 * (1 / masaPenghasilan)).format();
}

function differentNumber(angka1, angka2) {
  // Pastikan kedua argumen adalah angka


  // Hitung selisih antara dua angka
  var selisih = Math.abs(angka1 - angka2);

  return selisih;
}

function countPajakProgresif(pkpr, npwpStatus) {
  pkp = pkpr;
  pkpCounted = 0;
  if (pkp <= 60000000) {
      pkpCounted = (60000000 * (npwpStatus ? 0.05 : 0.06))
      return pkpCounted;
  }
  if (pkp > 60000000 && pkp <= 250000000) {
      pkpCounted = (60000000 * (npwpStatus ? 0.05 : 0.06)) + (differentNumber(pkp, 60000000) * (npwpStatus ? 0.15 : 0.18))
      return pkpCounted;
  }

  if (pkp > 250000000 && pkp <= 500000000) {
      pkpCounted = (60000000 * (npwpStatus ? 0.05 : 0.06)) + (190000000 * (npwpStatus ? 0.15 : 0.18)) + (differentNumber(pkp, 250000000) * (npwpStatus ? 0.25 : 0.3))
      return pkpCounted;
  }
  if (pkp > 500000000 && pkp <= 5000000000) {
      pkpCounted = (60000000 * (npwpStatus ? 0.05 : 0.06)) + (190000000 * (npwpStatus ? 0.15 : 0.18)) + (250000000 * (npwpStatus ? 0.25 : 0.3)) + (differentNumber(pkp, 500000000) * (npwpStatus ? 0.3 : 0.36))

      return pkpCounted;
  }
  if (pkp > 5000000000) {
      pkpCounted = (60000000 * (npwpStatus ? 0.05 : 0.06)) + (190000000 * (npwpStatus ? 0.15 : 0.18)) + (250000000 * (npwpStatus ? 0.25 : 0.3)) + (4500000000 * (npwpStatus ? 0.3 : 0.36)) + (differentNumber(pkp, 5000000000) *  (npwpStatus ? 0.35 : 0.42))
      return pkpCounted;
  }
  // if(pkp > 5000000000){
  //     pkpCounted = (60000000 * 0.5) + (250000000 * 0.15) + (500000000 * 0.25) + ((pkp - 60000000 - 250000000 - 500000000) * 0.30) + ((pkp - 60000000 - 250000000 - 500000000))
  // }    
  return pkpCounted;

}

function stopCalc(){
  clearInterval(interval);
}