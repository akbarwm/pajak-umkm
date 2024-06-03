<!DOCTYPE html>
<html lang="zxx">

<title>Kalkulator PPh 21 | Sudut Pajak </title>
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

<head>
  <meta name="description" content="">
  <!-- kalkulator css -->
  <link rel="stylesheet" type="text/css" href="stylekalkulator.css">
  <link rel="stylesheet" href="icons/uicons/css/uicons-regular-rounded.css">
  <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/js/jquery/jquery-3.7.1.js"></script>
</head>

<body>
  <div class="container text-center" style="width:100%; overflow: scroll;">
    <div class="row text-center ">
      <div class="col-md-12 text-center">
        <header style="margin-top:2rem; margin-left:60px;">
        <div style="color: #63E6BE;">
          <i class="fi fi-rr-calculator" style="font-size: 40px; "></i> 
          KALKULATOR PAJAK PPh 21
        </div>
        </header>
        <div class="progress-bar">
          <div class="step">
            <p>Informasi Wajib Pajak</p>
            <div class="bullet">
              <span>1</span>
            </div>
            <div class="check ">1</div>
          </div>
          <div class="step">
            <p>Penghasilan</p>
            <div class="bullet">
              <span>2</span>
            </div>
            <div class="check ">2</div>
          </div>
          <div class="step">
            <p>Penghitungan</p>
            <div class="bullet">
              <span>3</span>
            </div>
            <div class="check ">3</div>
          </div>
        </div>

        <div class="page-skema" id="pageSkema">
          <div class="field">
            <div class="label">Skema Pajak</div>
            <select name="skema_pajak" id="skemaPajak" class="select">
              <option value="">Pegawai Tetap</option>
              <option value="">Pegawai Tidak Tetap</option>
              <option value="">Bukan Pegawai</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Jenis Pemotongan</div>
            <select name="pemotongan_pegawai_tetap" id="jenisPemotongan" class="select">
              <option value="setiap_masa">Setiap Masa</option>
              <option value="masa_terakhir">Masa Pajak Terakhir</option>
            </select>
          </div>
        </div>

        <div style="margin-left :200px; margin-bottom : 100px;" class="form-outer center " id="pemotonganSetiapMasa">
          <form name="formMasaBulanan" method="POST">
            <div class="page" id="pageBulanan">
              <div class="field">
								<div class="label">PTKP</div>
								<select id="selectPTKP" class="select">
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
              <div class="field">
                <div class="label-long">Penghasilan Bruto</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="brutoSebulan" id="brutoSebulan" style="text-align:right; margin-right: 7px;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <button class="btn" id="hitungBulanan">Hitung</button>
              <div class="title">Perhitungan PPh 21</div>
              <div class="field">
                <div class="label-long">DPP</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control-select" name="dpp" id="dpp" style="text-align:right; margin-right: 7px;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">Tarif</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control-select" name="ter" id="ter" style="text-align:right; margin-right: 7px;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">PPh 21</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control-select" name="pph21Bulanan" id="pph21Bulanan" style="text-align:right; margin-right: 7px;" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
            </div>
          </form>
        </div>

        <div style="margin-left :200px" class="form-outer center visually-hidden" id="pemotonganMasaTerakhir">
          <form name="formMasaTerakhir" method="POST">
            <div class="page slide-page">
              <div class="title">Informasi Wajib Pajak Masa Terakhir</div>
              <div class="field">
                <div class="label">Status NPWP</div>
                <select id="npwp" name="npwp" class="select">
                  <option value="1" selected="selected">NPWP</option>
                  <option value="0">Non NPWP</option>
                </select>
              </div>
              <!-- pakli gaming bilang suruh gabung -->
              <div class="field">
                <div class="label">PTKP</div>
								<select id="selectPtkpTerakhir" class="select">
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
              <div class="field">
                <label class="label">Masa Penghasilan</label>
                <div class="select-month">
                  <select id="masaAwal" class="form-control-select">
                    <option value="1" selected="selected">Januari</option>
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
                <div style="float:left; margin-left: 30px; margin-right: -30px;">
                  &nbsp;&nbsp;s/d&nbsp;
                </div>
                <div class="select-month">
                  <select id="masaAkhir" class="form-control-select">
                    <option value="1">Januari</option>
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
                    <option value="12" selected="selected">Desember</option>
                  </select>
                </div>
              </div>
              <div class="field">
                <button class="firstNext next" id="nextAwal">Selanjutnya</button>
                <button class="firstNext next">
                  <a href="index.php">BERANDA</a>
                </button>
              </div>
            </div>

            <div class="page">
              <div class="title">A. Penghasilan:</div>
              <div class="field">
                <div class="label-long">1. Gaji/Pensiun atau THT/JHT</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="gajiPensiun" id="gajiPensiun" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">2. Tunjangan PPh</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="tunjPph" id="tunjPph" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">3. Tunjangan Lainnya, Uang Lembur, dan sebagainya</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="tunjLain" id="tunjLain" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">4. Honorarium dan Imbalan Lainnya Sejenisnya</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="tunjHonor" id="tunjHonor" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">5. Premi Asuransi yang dibayar Pemberi Kerja</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="tunjAsuransi" id="tunjAsuransi" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">6. Natura dan Kenikmatan Lainnya</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="natura" id="natura" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">7. Tantiem, Bonus, Gratifikasi, Jasa Produksi dan THR</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="bonusJasa" id="bonusJasa" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">8. Penghasilan Bruto (1-7)</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="hasilBruto" id="hasilBruto" style="text-align:right" placeholder="0">
                </div>
              </div>
              <div class="title">B. Pengurang:</div>
              <div class="field">
                <div class="label-long">9. Biaya Jabatan</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="biayaJabatan" maxlength="6000000" id="biayaJabatan" style="text-align:right;" placeholder="0">
                </div>
              </div>
              <div class="field">
                <div class="label-long">10. Iuran Pensiun atau Iuran THT/JHT</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="iuranPensiun" id="iuranPensiun" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">11. Zakat/Sumbangan Keagamaan yang Bersifat Wajib yang Dibayarkan Melalui Pemberi Kerja</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="zakatSumbangan" id="zakatSumbangan" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">12. Jumlah Pengurang Setahun (9-11)</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="pengurangSetahun" id="pengurangSetahun" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field btns">
                <button class="prev-1 prev">Sebelumnya</button>
                <button class="next-1 next">Selanjutnya</button>
              </div>
            </div>
            <div class="page">
              <div class="title">C. Penghitungan PPh Pasal 21:</div>
              <!-- <div class="field-pph">
                <div class="label-pph">12. Penghasilan Bruto Setahun</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="brutoSetahun" id="brutoSetahun" placeholder="0" style="text-align:right">
                </div>
              </div> -->
              <!-- <div class="field-pph">
                <div class="label-pph">13. Biaya Jabatan Setahun</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="jabatanSetahun" id="jabatanSetahun" placeholder="0" style="text-align:right">
                </div>
              </div> -->
              <!-- <div class="field-pph">
                <div class="label-pph">14. Iuran Pensiun Setahun</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="iuranSetahun" id="iuranSetahun" placeholder="0" style="text-align:right">
                </div>
              </div> -->
              <div class="field">
                <div class="label-long">13. Penghasilan Neto (8 - 12)</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="hasilNeto" id="hasilNeto" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field">
                <div class="label-long">14. Penghasilan Neto Masa Pajak Sebelumnya</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="netoSebelum" id="netoSebelum" placeholder="0" style="text-align:right" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">15. Jumlah Penghasilan Neto untuk Penghitungan PPh Pasal 21 (Setahun/Disetahunkan)</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="netoSetahun" id="netoSetahun" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field">
                <div class="label-long">16. Penghasilan Tidak Kena Pajak (PTKP)</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="ptkp" id="ptkp" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field">
                <div class="label-long">17. Penghasilan Kena Pajak (PKP) Setahun/Disetahunkan (15 - 16)</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="pkp" id="pkp" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field">
                <div class="label-long">18. PPh Pasal 21 atas Penghasilan Kena Pajak (PKP) Setahun/Disetahunkan</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="pkp21" id="pkp21" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field">
                <div class="label-long">19. PPh Pasal 21 Dipotong Masa Pajak Sebelumnya</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="pph21Sebelum" id="pph21Sebelum" placeholder="0" style="text-align:right" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <!-- <div class="field-pph">
                <div class="label-pph">23. PPh Pasal 21 Terutang Setahun/Disetahunkan</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="pph21Terutang" id="pph21Terutang" placeholder="0" style="text-align:right">
                </div>
              </div> -->
              <div class="field">
                <div class="label-long">20. PPh Pasal 21 Terutang (18 - 19)</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" id="pph21Terutang" name="pph21Terutang" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field btns" style="padding-top: 20px;">
                <button class="prev-2 prev">Sebelumnya</button>
                <button class="reset" type="reset">Reset</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- kalkulator js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
  <script src="js/kalkulator.js"></script>
</body>

</html>