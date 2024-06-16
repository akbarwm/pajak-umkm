<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PPh 21 | Sudut Pajak </title>
    <link rel="stylesheet" type="text/css" href="stylekalkulator2.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </style>
</head>

<body>
    <!-- Image Profil -->
    <img id="profile-pic" src="img/profil.png" alt="Profil" style="width: 100px; height: auto; position: absolute; bottom: 20px; left: 20px; z-index: 10;">
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
    <div class="horizontal-line" style="margin-top: rem;">
    </div>


    <br><br><br>
    <div style="max-width: 40rem; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
            <div>
                <label for="tanggungan" style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 500; color: #325A44;">Skema
                    Pajak</label>
            </div>
            <div>
                <select name="tanggungan" id="tanggungan" style="background-color: white; border: 1px solid green; color: #325A44; font-weight: bold; font-size: 0.75rem; border-radius: 0.5rem; padding: 0.5rem; width: 185%; margin-left:-100px;">
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
                <label for="statusKawin" style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 500; color: #325A44;">Jenis
                    Pemotongan</label>
            </div>
            <div>
                <select name="pemotongan_pegawai_tetap" id="jenisPemotongan" style="background-color: white; border: 1px solid green; color: #325A44; font-weight: bold; font-size: 0.75rem; border-radius: 0.5rem; padding: 0.5rem; width: 185%; margin-left:-100px;">
                    class="select">
                    <option value="setiap_masa">Setiap Masa</option>
                    <option value="masa_terakhir">Masa Pajak Terakhir</option>
                </select>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div style="max-width: 40rem; margin: 0 auto;">
        <form name="formMasaBulanan" method="POST">
            <div style="display: grid; grid-template-columns: auto 1fr; gap: 1.5rem; align-items: center;" id="pemotongantiapMasa">
                <label for="statusMasuk" style="font-size: 0.875rem; font-weight: 500; color: #325A44;">
                    PTKP
                </label>
                <select id="selectPTKP" class="select" style="background-color: white; border: 1px solid green; color: #325A44; font-weight: bold; font-size: 0.75rem; border-radius: 0.5rem; padding: 0.5rem; width: 98%; margin-left: 170px;">
                    <option value="" disabled selected>Pilih PTKP</option>
                    <option value="54000000">TK/0 - 54000000</option>
                    <option value="58500000">TK/1 - 58500000</option>
                    <option value="63000000">TK/2 - 63000000</option>
                    <option value="67500000">TK/3 - 67500000</option>
                    <option value="58500000">K/0 - 58500000</option>
                    <option value="63000000">K/1 - 63000000</option>
                    <option value="67500000">K/2 - 67500000</option>
                    <option value="72000000">K/3 - 72000000</option>
                </select>
            </div>

            <br>
            <div style="max-width: 40rem; margin: 0 auto;">
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
                    <div>
                        <label for="#" style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 500; color: #325A44;">Penghasilan Bruto</label>
                    </div>

                    <input type="text" class="form-control" name="brutoSebulan" id="brutoSebulan" style="text-align: right; font-size: 0.875rem; padding: 0.5rem; border: 1px solid green; border-radius: 0.5rem; flex: 1; width:180%; margin-left:-105px;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
        </form>
    </div>
    <button class="btn" id="hitungBulanan" style="margin-top: 1rem; padding: 0.75rem 1.5rem; background-color: #325A44; color: white; font-size: 0.875rem; border: none; border-radius: 0.5rem; cursor: pointer; margin-left:710px;">Hitung</button>
    <br>



    <br>
    <div class="title">Perhitungan PPh 21</div>

    <div class="field">
        <label class="label-long">DPP</label>
        <div class="col-75">
            <input type="text" disabled readonly class="form-control-select" name="dpp" id="dpp" style="text-align: right; padding: 0.5rem; border: 1px solid green; border-radius: 0.5rem; width: 95%; margin-right:240px; margin-left:170px;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
        </div>
    </div>
    <br>

    <div class="field">
        <label class="label-long">Tarif</label>
        <div class="col-75">
            <input type="text" disabled readonly class="form-control-select" name="ter" id="ter" style="text-align: right; padding: 0.5rem; border: 1px solid green; border-radius: 0.5rem; width: 95%; margin-right:240px; margin-left:170px;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
        </div>
    </div>
    <br>

    <div class="field">
        <label class="label-long">PPh 21</label>
        <div class="col-75">
            <input type="text" disabled readonly class="form-control-select" name="pph21Bulanan" id="pph21Bulanan" style="text-align: right; padding: 0.5rem; border: 1px solid green; border-radius: 0.5rem; width: 95%; margin-right:240px; margin-left:170px;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
        </div>
    </div>

    <!-- <div style="max-width: 40rem; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
            <div class="label">
                <label for="tanggungan"
                    style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 500; color: #325A44;">Status
                    NPWP</label>
            </div>
            <div>
                <select name="npwp" id="npwp"
                    style="background-color: white; border: 1px solid green; color: #325A44; font-weight: bold; font-size: 0.75rem; border-radius: 0.5rem; padding: 0.5rem; width: 185%; margin-left:-100px;">
                    <option value="1" selected="selected">NPWP</option>
                    <option value="0">Non NPWP</option>
                </select>
                </select>
            </div>
        </div>
    </div>
    <br>
    <div style="max-width: 40rem; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
            <div>
                <label for="masaAwal"
                    style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 500; color: ##325A44; ">Masa
                    Penghasilan</label>
            </div>
            <div style="display: flex; align-items: center;">
                <div style="width: calc(50% - 15px);">
                    <select id="masaAwal"
                        style="background-color: white; border: 1px solid green; color: #325A44; font-weight: bold; font-size: 0.75rem; border-radius: 0.5rem; padding: 0.5rem; width: 100%; margin-left:-100px;">
                        <option value="12" selected>Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div style="margin: 0 1rem; white-space: nowrap; color: #325A44; margin-left: -80px;">S/D</div>
                <div style="width: calc(50% - 15px);">
                    <select id="masaAkhir"
                        style="background-color: white; border: 1px solid green; color: #325A44; font-size: 0.75rem; font-weight: bold; border-radius: 0.5rem; padding: 0.5rem; width: 100%;">
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12" selected>Desember</option>
                    </select>
                </div>
            </div>
        </div>
    </div> -->


    <!-- <div style="max-width: 40rem; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
            <div>
                <label for="statusMasuk"
                    style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 500; color: #325A44;">Status
                    Masuk</label>
            </div>
            <div>
                <select id="statusMasuk"
                    style="background-color: white; border: 1px solid green; color: #325A44; font-weight: bold; font-size: 0.75rem; border-radius: 0.5rem; padding: 0.5rem; width: 185%; margin-left:-100px;">
                    <option value="---" selected><strong>Pilih Salah Satu</strong></option>
                    <option value="baru">Pegawai Tetap</option>
                    <option value="pindah">Pegawai Tidak Tetap</option>
                    <option value="ekspatriat">Non Pegawai</option>
                </select>
            </div>
        </div>
    </div>
    <br>
    <div style="max-width: 40rem; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
            <div>
                <div style="font-weight: bold; color:#325A44;">Konfigurasi</div>
            </div>
        </div>
    </div>
    <br>
    <div style="max-width: 40rem; margin: 0 auto;">
        <div class="grid-radio">
            <div>
                <label for="tunjanganpajak"
                    style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 500; color: #325A44;">Tunjangan
                    Pajak</label>
            </div>
            <div>
                <div>
                    <input type="radio" name="rbTunjPajak" value="grossup" checked>
                    <label for=""
                        style="margin-right: 0.5rem; font-size: 0.875rem; font-weight: 500; color: #325A44; ">Gross</label>
                    <input type="radio" name="rbTunjPajak" value="nongrossup">
                    <label for="" style="font-size: 0.875rem; font-weight: 500; color: #325A44;">Non Gross Up</label>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div style="max-width: 40rem; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem;">
            <div>
                <label for="statusMasuk"
                    style="display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 500; color: #325A44;">Ketentuan
                    PTKP</label>
            </div>
            <div>
                <select id="statusMasuk"
                    style="background-color: white; border: 1px solid green; color: #325A44; font-weight: bold; font-size: 0.75rem; border-radius: 0.5rem; padding: 0.5rem; width: 185%; margin-left:-100px;">
                    <option value="#" selected><strong>Januari 2011 - Desember 2012</strong></option>
                    <option value="#">Januari 2013 - Desember 2014</option>
                    <option value="#">Januari 2015 - Desember 2015</option>
                    <option value="#">Januari 2016 - Desember 2021</option>
                    <option value="#">Mulai Januari 2022</option>
                </select>
            </div>
        </div>
    </div> -->
    <!-- <div class="field btns" style="display: flex; justify-content: flex-end;">
        <a href="index.php"><button class="firstNext next">BERANDA</button></a>
        <button class="firstNext next">Selanjutnya</button>
    </div>

    <img id="profile-pic" src="img/profil.png" alt=""
        style="width: 400px; height: auto; margin-left:-20px; margin-top:-40px;">


    <div class="page">
        <div class="title">A. Penghasilan:</div>
        <br>
        <div class="field">
            <div class="label-long">1. Gaji/Pensiun atau THT/JHT</div>
            <div class="col-75">
                <input type="text" class="form-control" name="gajiPensiun" id="gajiPensiun" style="text-align:right"
                    placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">2. Tunjangan PPh</div>
            <div class="col-75">
                <input type="text" class="form-control" name="tunjPph" id="tunjPph" style="text-align:right"
                    placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">3. Tunjangan Lainnya, Uang Lembur, dan sebagainya</div>
            <div class="col-75">
                <input type="text" class="form-control" name="tunjLain" id="tunjLain" style="text-align:right"
                    placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">4. Honorarium dan Imbalan Lainnya Sejenisnya</div>
            <div class="col-75">
                <input type="text" class="form-control" name="tunjHonor" id="tunjHonor" style="text-align:right"
                    placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">5. Premi Asuransi yang dibayar Pemberi Kerja</div>
            <div class="col-75">
                <input type="text" class="form-control" name="tunjAsuransi" id="tunjAsuransi" style="text-align:right"
                    placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">6. Natura dan Kenikmatan Lainnya</div>
            <div class="col-75">
                <input type="text" class="form-control" name="natura" id="natura" style="text-align:right"
                    placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">7. Tantiem, Bonus, Gratifikasi, Jasa Produksi dan THR</div>
            <div class="col-75">
                <input type="text" class="form-control" name="bonusJasa" id="bonusJasa" style="text-align:right"
                    placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">8. Penghasilan Bruto</div>
            <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="hasilBruto"
                    id="hasilBruto" style="text-align:right" placeholder="0">
            </div>
        </div>
        <br>
        <div class="title">B. Pengurang:</div>
        <br>
        <div class="field">
            <div class="label-long">9. Biaya Jabatan</div>
            <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="biayaJabatan"
                    maxlength="500000" id="biayaJabatan" style="text-align:right;" placeholder="0">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">10. Iuran Pensiun atau Iuran THT/JHT</div>
            <div class="col-75">
                <input type="text" class="form-control" name="iuranPensiun" id="iuranPensiun" style="text-align:right"
                    placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">11. Zakat/Sumbangan Keagamaan yang Bersifat Wajib yang Dibayarkan Melalui Pemberi
                Kerja</div>
            <div class="col-75">
                <input type="text" class="form-control" name="zakatSumbangan" id="zakatSumbangna"
                    style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">12. Jumlah Pengurang Setahun (9-11)</div>
            <div class="col-75">
                <input type="text" class="form-control" name="pengurangSetahun" id="pengurangSetahun"
                    style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>

        <div class="field btns">
            <a href="tes-kalkulator.php"> <button class="prev-1 prev halo2">Sebelumnya</button></a>
            <a href="tes-kalkulator3.php"> <button class="next-1 next halo2">Selanjutnya</button></a>
        </div>
    </div>

    <br>
    <div class="page">
        <div class="title">C. Penghitungan PPh Pasal 21:</div>
        <br>
        <div class="field">
            <div class="label-long">13. Penghasilan Neto (8 - 12)</div>
            <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="hasilNeto"
                    id="hasilNeto" placeholder="0" style="text-align:right">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">14. Penghasilan Neto Masa Pajak Sebelumnya</div>
            <div class="col-75">
                <input type="text" class="form-control" name="netoSebelum" id="netoSebelum" placeholder="0"
                    style="text-align:right" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">15. Jumlah Penghasilan Neto untuk Penghitungan PPh Pasal 21 (Setahun/Disetahunkan)
            </div>
            <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="netoSetahun"
                    id="netoSetahun" placeholder="0" style="text-align:right">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">16. Penghasilan Tidak Kena Pajak (PTKP)</div>
            <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="ptkp" id="ptkp"
                    style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">17. Penghasilan Kena Pajak (PKP) Setahun/Disetahunkan (15 - 16)</div>
            <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="pkp" id="pkp"
                    placeholder="0" style="text-align:right">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">18. PPh Pasal 21 atas Penghasilan Kena Pajak (PKP) Setahun/Disetahunkan</div>
            <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" name="pkp21" id="pkp21"
                    placeholder="0" style="text-align:right">
            </div>
        </div>
        <br>
        <div class="field">
            <div class="label-long">19. PPh Pasal 21 Dipotong Masa Pajak Sebelumnya</div>
            <div class="col-75">
                <input type="text" class="form-control" name="pph21Sebelum" id="pph21Sebelum" placeholder="0"
                    style="text-align:right" onFocus="startCalc();" onBlur="stopCalc();">
            </div>
        </div>
        <br> -->
    <!-- <div class="field-pph">
                <div class="label-pph">
                  23. <button type="button" class="collapsible"> >>
                  </button> PPh Pasal 21 Terutang bulan ini
                </div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" id="pph21TerutangSebulan" name="pph21TerutangSebulan" placeholder="0" style="text-align:right">
                </div>
              </div>
             <br>
              <div class="content-collapse" style="margin-top :5px">
                <div class="field-pph">
                  <label class="label-pph"> PKP atas Penghasilan Teratur Setahun</label>
                  <div class="col-75">
                    <input type="text" disabled="true" readonly="readonly" class="form-control" name="pkpSetahun" id="pkpTeraturSetahun" placeholder="0" style="text-align:right">
                  </div>
                </div>
                <br>
                <div class="field-pph">
                  <label class="label-pph"> PPh Pasal 21 atas Penghasilan Teratur Setahun</label>
                  <div class="col-75">
                    <input type="text" disabled="true" readonly="readonly" class="form-control" name="pph21Teratur" id="pph21Teratur" placeholder="0" style="text-align:right">
                  </div>
                </div>
                <br>
                <div class="field-pph">
                  <label class="label-pph">PPh Pasal 21 atas Penghasilan Tidak Teratur</label>
                  <div class="col-75">
                    <input type="text" disabled="true" readonly="readonly" class="form-control" name="pph21TakTeratur" id="pph21TakTeratur" placeholder="0" style="text-align:right">
                  </div>
                </div>
              </div> -->
    <!-- <div class="field">
            <div class="label-long">20. PPh Pasal 21 Terutang (18 - 19)</div>
            <div class="col-75">
                <input type="text" disabled="true" readonly="readonly" class="form-control" id="pph21Terutang"
                    name="pph21Terutang" placeholder="0" style="text-align:right">
            </div>
        </div>
        <div class="field btns" style="padding-top: 20px;">
            <a href="tes-kalkulator.php"><button class="reset halo3" type="reset">Reset</button></a>
            <button class="prev-2 prev halo3">Selesai</button>
        </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div> -->


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/numeral@2.0.6/min/numeral.min.js"></script>


<script src="js/kalkulator.js"></script>

</html>