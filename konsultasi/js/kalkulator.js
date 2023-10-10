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

  valueHasilBruto = (( valueGajiPensiun.value() * 1) + (valueTunjPph.value() * 1) + (valueTunjLain.value() * 1) + (valueTunjHonor.value() * 1) + (valueTunjAsuransi.value() * 1) + (valueNatura.value() * 1) + (valueBonusJasa.value() * 1));  
  
  document.formMasa.hasilBruto.value = numeral(valueHasilBruto).format();
  hitungBiayaJabatan = (valueHasilBruto * 1) * (5 / 100);  
  

  if (hitungBiayaJabatan == 500000) {
    document.formMasa.biayaJabatan.value = 500000;
  } else if (hitungBiayaJabatan > 500000) {
    document.formMasa.biayaJabatan.value = 500000;
  } else {
    document.formMasa.biayaJabatan.value = hitungBiayaJabatan;
  }

  var masaPenghasilan = document.getElementById('masaAkhir').value - document.getElementById('masaAwal').value + 1;

  document.formMasa.brutoSetahun.value = (valueHasilBruto * masaPenghasilan) ;  

  valueBiayaJabatan = document.formMasa.biayaJabatan.value;
  document.formMasa.jabatanSetahun.value = (valueBiayaJabatan * masaPenghasilan) ; 

  valueJabatanSetahun = document.formMasa.jabatanSetahun.value;
  valueIuranPensiun = document.formMasa.iuranPensiun.value;
  document.formMasa.iuranSetahun.value = (valueIuranPensiun * masaPenghasilan); 
  
  valueIuranSetahun = document.formMasa.iuranSetahun.value;
  document.formMasa.pengurangSetahun.value = (valueJabatanSetahun * 1) + (valueIuranSetahun * 1); 

  valueBrutoSetahun = document.formMasa.brutoSetahun.value;
  valuePengurangSetahun = document.formMasa.pengurangSetahun.value;
  document.formMasa.hasilNeto.value = (valueBrutoSetahun * 1) - (valuePengurangSetahun * 1); 

  valueHasilNeto = document.formMasa.hasilNeto.value;
  document.formMasa.netoSetahun.value = (valueHasilNeto * (12 / masaPenghasilan)); 

  valueTanggungan = document.getElementById('tanggungan').value;
  valueStatusKawin = document.getElementById('statusKawin').value;

  valuePtkp =  parseInt(valueStatusKawin) + parseInt(valueTanggungan);
  document.formMasa.ptkp.value = (valuePtkp); 

  valueNetoSetahun = document.formMasa.netoSetahun.value;  
  document.formMasa.pkp.value = this.countPajakProgresif(valueNetoSetahun - valuePtkp, document.getElementById('npwp').value);
  valuePkpSetahun = document.formMasa.pkp.value;
  document.formMasa.pkp21.value = valuePkpSetahun * (4 / 12);


  valuePkp21 = document.formMasa.pkp21.value;
  // document.formMasa.pph21Terutang.value = (valuePkp21) ; 

  // document.formMasa.pph21Teratur.value = (valuePkp21) ;

  valuePph21Teratur = document.formMasa.pph21Teratur.value;
  // document.formMasa.pph21TakTeratur.value = (valuePkp21) - (valuePph21Teratur) ;

  valuePph21TakTeratur = document.formMasa.pph21TakTeratur.value;
  document.formMasa.pph21TerutangSebulan.value = valuePkp21 * (1 / masaPenghasilan); ;
}

function countPajakProgresif(pkp, npwp)
{
  pkpCounted = 0;

  count1 = 0;
  if(pkp < 60000000)count1 = pkp
  else count1 = 60000000;
  pkpCounted = count1 * (5 / 100);

  count2 = 0;
  if(pkp > 60000000 && pkp <= 250000000)count2 += pkp - 60000000;
  else if(pkp > 250000000)count2 += 190000000;
  pkpCounted += count2 * (15 / 100);

  count3 = 0;
  if(pkp > 250000000)count3 += pkp - 250000000;
  pkpCounted += count3 * (25 / 100);

  if(!parseInt(npwp))pkpCounted = pkpCounted * (120 / 100);
  return pkpCounted;
}

function stopCalc(){
  clearInterval(interval);
}