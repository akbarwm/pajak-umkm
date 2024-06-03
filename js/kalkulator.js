const slidePage = document.querySelector(".slide-page");
const slideSkema = document.querySelector(".page-skema");
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
  slideSkema.classList.add("visually-hidden");
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
  slideSkema.classList.remove("visually-hidden");
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

// JavaScript untuk menangani jenis pemotongan
const selectJenisPemotongan = document.getElementById("jenisPemotongan");
const pemotonganSetiapMasa = document.getElementById("pemotonganSetiapMasa");
const pemotonganMasaTerakhir = document.getElementById("pemotonganMasaTerakhir");

selectJenisPemotongan.addEventListener("change", () => {
   if (selectJenisPemotongan.value == "setiap_masa") {
      pemotonganSetiapMasa.classList.remove("visually-hidden");
      pemotonganMasaTerakhir.classList.add("visually-hidden");;
   }
});

selectJenisPemotongan.addEventListener("change", () => {
   if (selectJenisPemotongan.value == "masa_terakhir") {
      pemotonganMasaTerakhir.classList.remove("visually-hidden");
      pemotonganSetiapMasa.classList.add("visually-hidden");
   }
});

// 

function startCalc(){
  interval = setInterval( "calc()", 1);
}

function calc(){
  valueGajiPensiun = numeral(formMasaTerakhir.gajiPensiun.value); 
  document.getElementById('gajiPensiun').value = valueGajiPensiun.format();

  valueTunjPph = numeral(formMasaTerakhir.tunjPph.value);
  document.getElementById('tunjPph').value =  valueTunjPph.format();

  valueTunjLain = numeral(formMasaTerakhir.tunjLain.value);
  document.getElementById('tunjLain').value = valueTunjLain.format();

  valueTunjHonor = numeral(formMasaTerakhir.tunjHonor.value);
  document.getElementById('tunjHonor').value = valueTunjHonor.format();

  valueTunjAsuransi = numeral(formMasaTerakhir.tunjAsuransi.value);
  document.getElementById('tunjAsuransi').value = valueTunjAsuransi.format();
 
  valueNatura = numeral (formMasaTerakhir.natura.value);
  document.getElementById('natura').value = valueNatura.format();

  valueBonusJasa = numeral(formMasaTerakhir.bonusJasa.value);
  document.getElementById('bonusJasa').value = valueBonusJasa.format();
  
  valueHasilBruto = (( valueGajiPensiun.value() * 1) + (valueTunjPph.value() * 1) + (valueTunjLain.value() * 1) + (valueTunjHonor.value() * 1) + (valueTunjAsuransi.value() * 1) + (valueNatura.value() * 1) + (valueBonusJasa.value() * 1));  
  document.formMasaTerakhir.hasilBruto.value = numeral(valueHasilBruto).format();

  masaAwal = numeral(formMasaTerakhir.masaAwal.value);
  masaAkhir = numeral(formMasaTerakhir.masaAkhir.value);
  var masaPenghasilan = masaAkhir.value() - masaAwal.value() + 1;
  
  var hitungBiayaJabatan = (valueHasilBruto * 1) * (5 / 100);  
  var biayaJabatan = 0;
  if (hitungBiayaJabatan / masaPenghasilan >= 500000) {
    biayaJabatan = 500000 * masaPenghasilan;
    if (biayaJabatan >= 6000000) {
      biayaJabatan = 6000000;
    }
  } else {
    biayaJabatan = hitungBiayaJabatan;
  }
  document.formMasaTerakhir.biayaJabatan.value = numeral(biayaJabatan).format();

  valueIuranPensiun = numeral(formMasaTerakhir.iuranPensiun.value); 
  document.getElementById('iuranPensiun').value = valueIuranPensiun.format();

  valueZakatSumbangan = numeral(formMasaTerakhir.zakatSumbangan.value); 
  document.getElementById('zakatSumbangan').value = valueZakatSumbangan.format();

  valuePengurangSetahun = ((biayaJabatan * 1) + (valueIuranPensiun.value() * 1) + (valueZakatSumbangan.value() * 1));
  document.formMasaTerakhir.pengurangSetahun.value = numeral(valuePengurangSetahun).format(); 
  
  // var masaPenghasilan = document.getElementById('masaAkhir').value - document.getElementById('masaAwal').value + 1;

  // var bruto = valueHasilBruto * masaPenghasilan;
  // document.formMasaTerakhir.brutoSetahun.value = numeral(bruto).format();  

  // var valueBiayaJabatan = biayaJabatan;
  // var valueJabatanSetahun = valueBiayaJabatan * masaPenghasilan;
  // document.formMasaTerakhir.jabatanSetahun.value = numeral(valueJabatanSetahun).format(); 

  // var valueIuranSetahun = valueIuranPensiun.value() * masaPenghasilan;
  // document.formMasaTerakhir.iuranSetahun.value = numeral(valueIuranSetahun).format(); 

  // var valueZakatSumbanganTotal = valueZakatSumbangan.value() * masaPenghasilan;
  // document.formMasaTerakhir.zakatSumbangan.value = numeral(valueZakatSumbangan).format(); 
  
  // var valuePengurangSetahun = (valueJabatanSetahun * 1) + (valueIuranSetahun * 1) + (valueZakatSumbanganTotal * 1)
  // document.formMasaTerakhir.pengurangSetahun.value = numeral(valuePengurangSetahun).format(); 

  valueBrutoSetahun = valueHasilBruto;

  var valueHasilNeto = (valueBrutoSetahun * 1) - (valuePengurangSetahun * 1);
  document.formMasaTerakhir.hasilNeto.value = numeral(valueHasilNeto).format();

  valueNetoSebelum = numeral(formMasaTerakhir.netoSebelum.value); 
  document.getElementById('netoSebelum').value = valueNetoSebelum.format();

  var valueNetoSetahun = ((valueHasilNeto * 1) + (valueNetoSebelum.value() * 1))
  document.formMasaTerakhir.netoSetahun.value = numeral(valueNetoSetahun).format(); 

  valuePtkpTerakhir = document.formMasaTerakhir.selectPtkpTerakhir.value;

  valuePtkp =  parseInt(valuePtkpTerakhir);
  document.formMasaTerakhir.ptkp.value = numeral(valuePtkp).format(); 

  var valuePkpSetahun = valueNetoSetahun - valuePtkp;
  if (valueNetoSetahun < valuePtkp) {
    valuePkpSetahun = 0
  }
  document.formMasaTerakhir.pkp.value = numeral(valuePkpSetahun).format(); 
  // document.formMasaTerakhir.pkp.value = this.countPajakProgresif(valueNetoSetahun - valuePtkp, document.getElementById('npwp').value);
  var valuePkp21 = countPajakProgresif(valuePkpSetahun, Boolean(document.formMasaTerakhir.npwp.value));
  document.formMasaTerakhir.pkp21.value = numeral(valuePkp21).format(); 

  valuePph21Sebelum = numeral(formMasaTerakhir.pph21Sebelum.value); 
  document.getElementById('pph21Sebelum').value = valuePph21Sebelum.format();

  var valuePph21Terutang = ((valuePkp21 * 1) - (valuePph21Sebelum.value() * 1));
  document.formMasaTerakhir.pph21Terutang.value = numeral(valuePph21Terutang).format(); 

  // valuePkp21 = document.formMasaTerakhir.pkp21.value;
  // document.formMasaTerakhir.pph21TerutangSebulan.value = numeral(valuePkp21 / 12).format(); 

  // // document.formMasaTerakhir.pph21Teratur.value = (valuePkp21) ;

  // valuePph21Teratur = document.formMasaTerakhir.pph21Teratur.value;
  // // document.formMasaTerakhir.pph21TakTeratur.value = (valuePkp21) - (valuePph21Teratur);

  // valuePph21TakTeratur = document.formMasaTerakhir.pph21TakTeratur.value;
  // document.formMasaTerakhir.pph21TerutangSebulan.value = numeral(valuePkp21 * (1)).format();

  var brutoSebulan = numeral(document.getElementById("brutoSebulan").value);
  document.getElementById("brutoSebulan").value = brutoSebulan.format();

  function terBulanan() {
	  var kategoriTer = document.getElementById("selectPTKP").value;
	  var brutoSebulan = numeral(document.getElementById("brutoSebulan").value);
	  var brutoBulanan = brutoSebulan.value();
	  var ter;

	  // Kategori A
	  if (kategoriTer == 54000000 || kategoriTer == 58500000) {
		  if (brutoBulanan <= 5400000) {
			  ter = 0;
		  } else if (brutoBulanan <= 5650000) {
			  ter = 0.25;
		  } else if (brutoBulanan <= 5950000) {
			  ter = 0.5;
		  } else if (brutoBulanan <= 6300000) {
			  ter = 0.75;
		  } else if (brutoBulanan <= 6750000) {
			  ter = 1;
		  } else if (brutoBulanan <= 7500000) {
			  ter = 1.25;
		  } else if (brutoBulanan <= 8550000) {
			  ter = 1.5;
		  } else if (brutoBulanan <= 9650000) {
			  ter = 1.75;
		  } else if (brutoBulanan <= 10050000) {
			  ter = 2;
		  } else if (brutoBulanan <= 10350000) {
			  ter = 2.25;
		  } else if (brutoBulanan <= 10700000) {
			  ter = 2.5;
		  } else if (brutoBulanan <= 11050000) {
			  ter = 3;
		  } else if (brutoBulanan <= 11600000) {
			  ter = 3.5;
		  } else if (brutoBulanan <= 12500000) {
			  ter = 4;
		  } else if (brutoBulanan <= 13750000) {
			  ter = 5;
		  } else if (brutoBulanan <= 15100000) {
			  ter = 6;
		  } else if (brutoBulanan <= 16950000) {
			  ter = 7;
		  } else if (brutoBulanan <= 19750000) {
			  ter = 8;
		  } else if (brutoBulanan <= 24150000) {
			  ter = 9;
		  } else if (brutoBulanan <= 26450000) {
			  ter = 10;
		  } else if (brutoBulanan <= 28000000) {
			  ter = 11;
		  } else if (brutoBulanan <= 30050000) {
			  ter = 12;
		  } else if (brutoBulanan <= 32400000) {
			  ter = 13;
		  } else if (brutoBulanan <= 35400000) {
			  ter = 14;
		  } else if (brutoBulanan <= 39100000) {
			  ter = 15;
		  } else if (brutoBulanan <= 43850000) {
			  ter = 16;
		  } else if (brutoBulanan <= 47800000) {
			  ter = 17;
		  } else if (brutoBulanan <= 51400000) {
			  ter = 18;
		  } else if (brutoBulanan <= 56300000) {
			  ter = 19;
		  } else if (brutoBulanan <= 62200000) {
			  ter = 20;
		  } else if (brutoBulanan <= 68600000) {
			  ter = 21;
		  } else if (brutoBulanan <= 77500000) {
			  ter = 22;
		  } else if (brutoBulanan <= 89000000) {
			  ter = 23;
		  } else if (brutoBulanan <= 103000000) {
			  ter = 24;
		  } else if (brutoBulanan <= 125000000) {
			  ter = 25;
		  } else if (brutoBulanan <= 157000000) {
			  ter = 26;
		  } else if (brutoBulanan <= 206000000) {
			  ter = 27;
		  } else if (brutoBulanan <= 337000000) {
			  ter = 28;
		  } else if (brutoBulanan <= 454000000) {
			  ter = 29;
		  } else if (brutoBulanan <= 550000000) {
			  ter = 30;
		  } else if (brutoBulanan <= 695000000) {
			  ter = 31;
		  } else if (brutoBulanan <= 910000000) {
			  ter = 32;
		  } else if (brutoBulanan <= 1400000000) {
			  ter = 33;
		  } else {
			  ter = 34;
		  }
	  }
	  // Kategori B
	  else if (kategoriTer == 63000000 || kategoriTer == 67500000) {
		  if (brutoBulanan <= 6200000) {
			  ter = 0;
		  } else if (brutoBulanan <= 6500000) {
			  ter = 0.25;
		  } else if (brutoBulanan <= 6850000) {
			  ter = 0.5;
		  } else if (brutoBulanan <= 7300000) {
			  ter = 0.75;
		  } else if (brutoBulanan <= 9200000) {
			  ter = 1;
		  } else if (brutoBulanan <= 10750000) {
			  ter = 1.5;
		  } else if (brutoBulanan <= 11250000) {
			  ter = 2;
		  } else if (brutoBulanan <= 11600000) {
			  ter = 2.5;
		  } else if (brutoBulanan <= 12600000) {
			  ter = 3;
		  } else if (brutoBulanan <= 13600000) {
			  ter = 4;
		  } else if (brutoBulanan <= 14950000) {
			  ter = 5;
		  } else if (brutoBulanan <= 16400000) {
			  ter = 6;
		  } else if (brutoBulanan <= 18450000) {
			  ter = 7;
		  } else if (brutoBulanan <= 21850000) {
			  ter = 8;
		  } else if (brutoBulanan <= 26000000) {
			  ter = 9;
		  } else if (brutoBulanan <= 27700000) {
			  ter = 10;
		  } else if (brutoBulanan <= 29350000) {
			  ter = 11;
		  } else if (brutoBulanan <= 31550000) {
			  ter = 12;
		  } else if (brutoBulanan <= 32400000) {
			  ter = 13;
		  } else if (brutoBulanan <= 35400000) {
			  ter = 14;
		  } else if (brutoBulanan <= 39100000) {
			  ter = 15;
		  } else if (brutoBulanan <= 43850000) {
			  ter = 16;
		  } else if (brutoBulanan <= 47800000) {
			  ter = 17;
		  } else if (brutoBulanan <= 51400000) {
			  ter = 18;
		  } else if (brutoBulanan <= 56300000) {
			  ter = 19;
		  } else if (brutoBulanan <= 62200000) {
			  ter = 20;
		  } else if (brutoBulanan <= 68600000) {
			  ter = 21;
		  } else if (brutoBulanan <= 77500000) {
			  ter = 22;
		  } else if (brutoBulanan <= 89000000) {
			  ter = 23;
		  } else if (brutoBulanan <= 103000000) {
			  ter = 24;
		  } else if (brutoBulanan <= 125000000) {
			  ter = 25;
		  } else if (brutoBulanan <= 157000000) {
			  ter = 26;
		  } else if (brutoBulanan <= 206000000) {
			  ter = 27;
		  } else if (brutoBulanan <= 337000000) {
			  ter = 28;
		  } else if (brutoBulanan <= 454000000) {
			  ter = 29;
		  } else if (brutoBulanan <= 550000000) {
			  ter = 30;
		  } else if (brutoBulanan <= 695000000) {
			  ter = 31;
		  } else if (brutoBulanan <= 910000000) {
			  ter = 32;
		  } else if (brutoBulanan <= 1400000000) {
			  ter = 33;
		  } else {
			  ter = 34;
		  }
	  }
	  // Kategori C
	  else if (kategoriTer == 70000000) {
		  if (brutoBulanan <= 6600000) {
			  ter = 0;
		  } else if (brutoBulanan <= 6950000) {
			  ter = 0.25;
		  } else if (brutoBulanan <= 7350000) {
			  ter = 0.5;
		  } else if (brutoBulanan <= 7800000) {
			  ter = 0.75;
		  } else if (brutoBulanan <= 8850000) {
			  ter = 1;
		  } else if (brutoBulanan <= 9800000) {
			  ter = 1.25;
		  } else if (brutoBulanan <= 10950000) {
			  ter = 1.5;
		  } else if (brutoBulanan <= 11200000) {
			  ter = 1.75;
		  } else if (brutoBulanan <= 12050000) {
			  ter = 2;
		  } else if (brutoBulanan <= 12950000) {
			  ter = 3;
		  } else if (brutoBulanan <= 14150000) {
			  ter = 4;
		  } else if (brutoBulanan <= 15550000) {
			  ter = 5;
		  } else if (brutoBulanan <= 17050000) {
			  ter = 6;
		  } else if (brutoBulanan <= 19500000) {
			  ter = 7;
		  } else if (brutoBulanan <= 22700000) {
			  ter = 8;
		  } else if (brutoBulanan <= 26600000) {
			  ter = 9;
		  } else if (brutoBulanan <= 28100000) {
			  ter = 10;
		  } else if (brutoBulanan <= 30100000) {
			  ter = 11;
		  } else if (brutoBulanan <= 32600000) {
			  ter = 12;
		  } else if (brutoBulanan <= 35400000) {
			  ter = 13;
		  } else if (brutoBulanan <= 38900000) {
			  ter = 14;
		  } else if (brutoBulanan <= 43000000) {
			  ter = 15;
		  } else if (brutoBulanan <= 47400000) {
			  ter = 16;
		  } else if (brutoBulanan <= 51200000) {
			  ter = 17;
		  } else if (brutoBulanan <= 55800000) {
			  ter = 18;
		  } else if (brutoBulanan <= 60400000) {
			  ter = 19;
		  } else if (brutoBulanan <= 66700000) {
			  ter = 20;
		  } else if (brutoBulanan <= 74500000) {
			  ter = 21;
		  } else if (brutoBulanan <= 83200000) {
			  ter = 22;
		  } else if (brutoBulanan <= 95000000) {
			  ter = 23;
		  } else if (brutoBulanan <= 110000000) {
			  ter = 24;
		  } else if (brutoBulanan <= 134000000) {
			  ter = 25;
		  } else if (brutoBulanan <= 169000000) {
			  ter = 26;
		  } else if (brutoBulanan <= 221000000) {
			  ter = 27;
		  } else if (brutoBulanan <= 390000000) {
			  ter = 28;
		  } else if (brutoBulanan <= 463000000) {
			  ter = 29;
		  } else if (brutoBulanan <= 561000000) {
			  ter = 30;
		  } else if (brutoBulanan <= 709000000) {
			  ter = 31;
		  } else if (brutoBulanan <= 965000000) {
			  ter = 32;
		  } else if (brutoBulanan <= 1419000000) {
			  ter = 33;
		  } else {
			  ter = 34;
		  }
	  }

	  document.formMasaBulanan.ter.value = numeral(ter / 100).format("0.00%");
	  return ter;
  };

  const btnHitungBulanan = document.getElementById("hitungBulanan");
  btnHitungBulanan.addEventListener("click", function (event) {
	  event.preventDefault();

	  var brutoSebulan = numeral(document.getElementById("brutoSebulan").value);
	  document.getElementById("brutoSebulan").value = brutoSebulan.format();

	  var DPP = brutoSebulan.value();
	  document.getElementById("dpp").value = brutoSebulan.format();

	  var valueTarif = terBulanan();

	  var hitungPphBulanan = DPP * valueTarif / 100;
	  document.formMasaBulanan.pph21Bulanan.value = numeral(hitungPphBulanan).format();
  });

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
      pkpCounted = (pkp * (npwpStatus ? 0.05 : 0.06))
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