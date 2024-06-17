<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kalkulator PPh 21 | Sudut Pajak </title>
   <link rel="stylesheet" type="text/css" href="stylekalkulator.css">
   <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
   <script src="js/kalkulator.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/numeral@2.0.6/min/numeral.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

   <div class="col-span-2 flex items-center justify-center">
      <!-- Using col-span-2 for this element -->
      <svg width="42" height="48" viewBox="0 0 42 48" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M0.540773 0C0.180258 0 0 0.2403 0 0.540676V47.4593C0 47.7597 0.240343 48 0.540773 48H41.4592C41.7597 48 42 47.7597 42 47.4593V0.540676C42 0.180225 41.7597 0 41.4592 0L0.540773 0ZM6.00858 6.00751H36.0515V18.0225H6.00858V6.00751ZM6.00858 24.03H12.0172V30.0375H6.00858V24.03ZM18.0258 24.03H24.0343V30.0375H18.0258V24.03ZM30.0429 24.03H36.0515V42.0526H30.0429V24.03ZM6.00858 36.0451H12.0172V42.0526H6.00858V36.0451ZM18.0258 36.0451H24.0343V42.0526H18.0258V36.0451Z" fill="#266F48" />
      </svg>

      <span class="mx-2"></span>
      <!-- Tax Calculator Text -->
      <p class="font-inter font-bold text-xl leading-7 text-green-500 text-center">KALKULATOR PAJAK</p>
      <span class="mx-2"></span>
      <!-- PPh 21 Text -->
      <p class="font-inter text-lg leading-5 text-green-500 text-center">PPh 21</p>
   </div>

   <div class="flex justify-end">
      <!-- House Icon -->
      <div class="rumah">
         <a href="index.php">
            <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#266F48" viewBox="0 0 24 24">
               <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd" />
            </svg>
         </a>
      </div>
   </div>

   <!-- Horizontal Line -->
   <div class="horizontal-line"></div>

   <br><br><br>
   <div style="max-width: 40rem; margin: 0 auto;">
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
         <div>
            <label for="tanggungan" style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 500; color: #325A44;">Skema Pajak</label>
         </div>
         <div>
            <select name="tanggungan" id="tanggungan" style="background-color: white; border: 1px solid green; color: #325A44; font-weight: bold; font-size: 0.75rem; border-radius: 0.5rem; padding: 0.5rem; width: 185%; margin-left: -100px;">
               <option value="">Pegawai Tetap</option>
               <option value="">Pegawai Tidak Tetap</option>
               <option value="">Bukan Pegawai</option>
            </select>
         </div>
      </div>
   </div>

   <br>
   <div style="max-width: 40rem; margin: 0 auto;">
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
         <div>
            <label for="statusKawin" style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 500; color: #325A44;">Jenis Pemotongan</label>
         </div>
         <div>
            <select name="pemotongan_pegawai_tetap" id="jenisPemotongan" style="background-color: white; border: 1px solid green; color: #325A44; font-weight: bold; font-size: 0.75rem; border-radius: 0.5rem; padding: 0.5rem; width: 185%; margin-left: -100px;">
               <option value="setiap_masa">Setiap Masa</option>
               <option value="masa_terakhir">Masa Pajak Terakhir</option>
            </select>
         </div>
      </div>
   </div>

   <br><br><br><br>
   <div style="max-width: 40rem; margin: 0 auto;">
      <form name="formMasaBulanan" method="POST">
         <div style="display: grid; grid-template-columns: auto 1fr; gap: 1.5rem; align-items: center;" id="pemotongantiapMasa">
            <label for="statusMasuk" style="font-size: 0.875rem; font-weight: 500; color: #325A44;">PTKP</label>
            <select id="selectPTKP" class="select" style="background-color: white; border: 1px solid green; color: #325A44; font-weight: bold; font-size: 0.75rem; border-radius: 0.5rem; padding: 0.5rem; width: 98%; margin-left: 170px;">
               <option value="" disabled selected>Pilih PTKP</option>
               <option value="54000000">TK/0</option>
               <option value="58500000">TK/1</option>
               <option value="63000000">TK/2</option>
               <option value="67500000">TK/3</option>
               <option value="58500000">K/0</option>
               <option value="63000000">K/1</option>
               <option value="67500000">K/2</option>
               <option value="72000000">K/3</option>
               <option value="112500000">K/I/0</option>
               <option value="117000000">K/I/1</option>
               <option value="121500000">K/I/2</option>
               <option value="126000000">K/I/3</option>
            </select>
         </div>

         <br>
         <div style="max-width: 40rem; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
               <div>
                  <label for="brutoSebulan" style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 500; color: #325A44;">Penghasilan Bruto</label>
               </div>
               <input type="text" class="form-control" name="brutoSebulan" id="brutoSebulan" style="text-align: right; font-size: 0.875rem; padding: 0.5rem; border: 1px solid green; border-radius: 0.5rem; flex: 1; width:180%; margin-left:-105px;" placeholder="0">
            </div>
         </div>
         <button class="btn" id="hitungBulanan" type="button" style="margin-top: 1rem; padding: 0.75rem 1.5rem; background-color: #325A44; color: white; font-size: 0.875rem; border: none; border-radius: 0.5rem; cursor: pointer; margin-left:710px;">Hitung</button>

      </form>

      <!-- Hasil perhitungan -->
      <br>
      <div class="title">Perhitungan PPh 21</div>
      <br>

      <div class="field">
         <label class="label-long">DPP</label>
         <div class="col-75">
            <input type="text" disabled readonly class="form-control-select" name="dpp" id="dpp" style="text-align: right; padding: 0.5rem; border: 1px solid green; border-radius: 0.5rem; width: 95%; margin-right:240px; margin-left:170px;" placeholder="0">
         </div>
      </div>
      <br>

      <div class="field">
         <label class="label-long">Tarif</label>
         <div class="col-75">
            <input type="text" disabled readonly class="form-control-select" name="ter" id="ter" style="text-align: right; padding: 0.5rem; border: 1px solid green; border-radius: 0.5rem; width: 95%; margin-right:240px; margin-left:170px;" placeholder="0">
         </div>
      </div>
      <br>

      <div class="field">
         <label class="label-long">PPh 21</label>
         <div class="col-75">
            <input type="text" disabled readonly class="form-control-select" name="pph21Bulanan" id="pph21Bulanan" style="text-align: right; padding: 0.5rem; border: 1px solid green; border-radius: 0.5rem; width: 95%; margin-right:240px; margin-left:170px;" placeholder="0">
         </div>
      </div>
   </div>

   </form>
   </div>
</body>

</html>