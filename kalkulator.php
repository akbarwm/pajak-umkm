<!DOCTYPE html>
<html lang="zxx">

<title>Kalkulator PPh 21 | Sudut Pajak </title>
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

<head>
  <meta name="description" content="">
  <!-- kalkulator css -->
  <link rel="stylesheet" type="text/css" href="stylekalkulator.css">
  <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="container text-center" style="width:100%; overflow: scroll;">
    <div class="row text-center ">
      <div class="col-md-12 text-center">
        <header style="margin-top:2rem; margin-left:60px;">
          Kalkulator PPh 21 Masa
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

        <div style="margin-left :200px" class="form-outer center">
          <form name="formMasa" method="POST">
            <div class="page slide-page">
              <div class="title">Informasi Wajib Pajak</div>
              <div class="field">
                <div class="label">Status NPWP</div>
                <select id="npwp" name="npwp" class="select">
                  <option value="1" selected="selected">NPWP</option>
                  <option value="0">Non NPWP</option>
                </select>
              </div>
              <div class="field">
                <div class="label">Status Kawin</div>
                <select name="statusKawin" id="statusKawin" class="select">
                  <option value="54000000" selected="selected">TK</option>
                  <option value="58500000">K</option>
                  <option value="112500000">KI</option>
                </select>
              </div>
              <div class="field">
                <div class="label">Tanggungan</div>
                <select name="tanggungan" id="tanggungan" class="select">
                  <option value="0" selected="selected">0</option>
                  <option value="4500000">1</option>
                  <option value="9000000">2</option>
                  <option value="13500000">3</option>
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
                <div style="float:left;">
                  &nbsp;&nbsp;s/d&nbsp;
                </div>
                <div class="select-month">
                  <select id="masaAkhir" class="form-control-select">
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
                    <option value="12" selected="selected">Desember</option>
                  </select>
                </div>
              </div>
              <div class="field">
                <div class="label">Status Masuk</div>
                <select id="statusMasuk" class="select">
                  <option value="---" selected="selected">---</option>
                  <option value="baru">Pegawai Baru</option>
                  <option value="pindah">Pegawai Pindahan</option>
                  <option value="ekspatriat">Ekspatriat</option>
                </select>
              </div>
              <div class="title">Konfigurasi:</div>
              <div class="field">
                <div class="label">Tunjangan Pajak</div>
                <input name="rbTunjPajak" type="radio" value="grossup" class="radio">
                <label for="" class="label-radio">Gross-up</label>
                <input checked="checked" name="rbTunjPajak" type="radio" value="nongrossup" class="radio">
                <label for="" class="label-radio">Non Gross-up</label>
              </div>
              <div class="field">
                <div class="label">Ketentuan PTKP</div>
                <select id="ketentuan_ptkp" class="select">
                  <option value="2011">Januari 2011 - Desember 2012</option>
                  <option value="2013">Januari 2013 - Desember 2014</option>
                  <option value="2015">Januari 2015 - Desember 2015</option>
                  <option value="2016" selected="selected">Mulai Januari 2016</option>
                </select>
              </div>
              <div class="field">
                <button class="firstNext next">Selanjutnya</button>
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
                <div class="label-long">8. Penghasilan Bruto</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="hasilBruto" id="hasilBruto" style="text-align:right" placeholder="0">
                </div>
              </div>
              <div class="title">B. Pengurang:</div>
              <div class="field">
                <div class="label-long">9. Biaya Jabatan</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="biayaJabatan" maxlength="500000" id="biayaJabatan" style="text-align:right;" placeholder="0">
                </div>
              </div>
              <div class="field">
                <div class="label-long">10. Iuran Pensiun atau Iuran THT/JHT</div>
                <div class="col-75">
                  <input type="text" class="form-control" name="iuranPensiun" id="iuranPensiun" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field btns">
                <button class="prev-1 prev">Sebelumnya</button>
                <button class="next-1 next">Selanjutnya</button>
              </div>
            </div>


            <div class="page">
              <div class="title">C. Penghitungan PPh Pasal 21:</div>
              <div class="field-pph">
                <div class="label-pph">11. Penghasilan Bruto Setahun</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="brutoSetahun" id="brutoSetahun" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">12. Biaya Jabatan Setahun</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="jabatanSetahun" id="jabatanSetahun" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">13. Iuran Pensiun Setahun</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="iuranSetahun" id="iuranSetahun" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">14. Jumlah Pengurang Setahun</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="pengurangSetahun" id="pengurangSetahun" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">15. Penghasilan Neto</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="hasilNeto" id="hasilNeto" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">16. Penghasilan Neto Masa Sebelumnya</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="" class="form-control" name="netoSebelum" id="netoSebelum" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">17. Penghasilan Neto Setahun/Disetahunkan</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="netoSetahun" id="netoSetahun" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">18. Penghasilan Tidak Kena Pajak</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="ptkp" id="ptkp" style="text-align:right" placeholder="0" onFocus="startCalc();" onBlur="stopCalc();">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">19. PKP Setahun/Disetahunkan</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="pkp" id="pkp" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">20. PPh Pasal 21 atas PKP</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="pkp21" id="pkp21" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">21. PPh Pasal 21 Dipotong Masa Sebelumnya</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="" class="form-control" name="pph21Sebelum" id="pph21Sebelum" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">22. PPh Pasal 21 Terutang Setahun/Disetahunkan</div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" name="pph21Terutang" id="pph21Terutang" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="field-pph">
                <div class="label-pph">
                  23. <button type="button" class="collapsible"> >>
                  </button> PPh Pasal 21 Terutang bulan ini
                </div>
                <div class="col-75">
                  <input type="text" disabled="true" readonly="readonly" class="form-control" id="pph21TerutangSebulan" name="pph21TerutangSebulan" placeholder="0" style="text-align:right">
                </div>
              </div>
              <div class="content-collapse" style="margin-top :5px">
                <div class="field-pph">
                  <label class="label-pph"> PKP atas Penghasilan Teratur Setahun</label>
                  <div class="col-75">
                    <input type="text" disabled="true" readonly="readonly" class="form-control" name="pkpSetahun" id="pkpTeraturSetahun" placeholder="0" style="text-align:right">
                  </div>
                </div>
                <div class="field-pph">
                  <label class="label-pph"> PPh Pasal 21 atas Penghasilan Teratur Setahun</label>
                  <div class="col-75">
                    <input type="text" disabled="true" readonly="readonly" class="form-control" name="pph21Teratur" id="pph21Teratur" placeholder="0" style="text-align:right">
                  </div>
                </div>
                <div class="field-pph">
                  <label class="label-pph">PPh Pasal 21 atas Penghasilan Tidak Teratur</label>
                  <div class="col-75">
                    <input type="text" disabled="true" readonly="readonly" class="form-control" name="pph21TakTeratur" id="pph21TakTeratur" placeholder="0" style="text-align:right">
                  </div>
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