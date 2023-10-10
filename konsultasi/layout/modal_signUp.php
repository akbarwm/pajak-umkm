 


 <div class="modal fade" id="modalSignUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-md modal-lg">
         <div class="modal-content">
             <div class="modal-body px-0">
                 <div class="container-fluid">
                     <div class="row ">
                         <div class="col">
                             <img src="img/modal_head.png" alt="" class="img-fluid">

                         </div>
                         <div class=" col px-3">
                             <button type="button" class="close text-end" data-dismiss="modal">&times;</button>


                             <div class="row justify-content-center">
                                 <div class="col-11 ps-0">
                                     <div class="w-100">
                                         <h3 class="mb-4">Login Sekarang</h3>
                                     </div>
                                     
                                     <!-- forms -->
                                     <form action="conf/autentikasi.php" method="post">
                                         <div class="mb-3">
                                             <label for="exampleInputEmail1" class="form-label mb-2">
                                                 Email</label>
                                             <input type="email" class="form-control py-2" placeholder="your@email.com"
                                                 id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                                         </div>
                                         <div class="mb-3">
                                             <label for="password" class="form-label mb-2">
                                                 Password</label>
                                             <input type="password" class="form-control py-2" placeholder="Enter Password"
                                                 id="exampleInputEmail1" name="password" aria-describedby="emailHelp" required>
                                         </div>
                                         <div class="form-group mb-3">
                                              <button onclick="sukses()" type="submit" class="btn btn-primary btn-block swalDefaultSuccess" >Login</button>
                                         </div>
                                         <div class="text-justifys font-small-10pt mb-4">
                                            
                                         </div>
                                     </form>
                                     <p class="mb-0">Belum punya Akun?
        <a href="signUp.php" class="text-center">Daftar Baru</a>
      </p>
                                         <!-- forms END -->
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

         </div>
     </div>
 </div>
 <!-- EndModal -->