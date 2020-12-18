 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index: 1000000">
     <div class="modal-dialog p-t-60 modal-lg">
         <div class="modal-content grunge">
             <div class="modal-header border-bottom-0">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <h1 class="modal-title mb-2 font-weight-bold ltext-105 text-center" id="staticBackdropLabel">
                 Select Competition
             </h1>
             <div class="modal-body">
                 <div class="row">
                     <div class="col mb-3">
                         <div class="d-flex justify-content-center d-block">
                             <a href="<?= base_url('competition?type=bisplan') ?>">
                                 <img class="w-100" src=" <?= base_url('asset/logo/logo-business-plan.png') ?>" alt="IMG-LOGO" />
                             </a>
                         </div>
                     </div>
                     <div class="col mb-3">
                         <div class="d-flex justify-content-center d-block">
                             <a href="<?= base_url('competition?type=debate') ?>">
                                 <img src="<?= base_url('asset/logo/logo-debate.png') ?>" class="w-100" alt="IMG-LOGO" />
                             </a>
                         </div>
                     </div>
                     <div class="col mb-3">
                         <div class="d-flex justify-content-center d-block">
                             <a href="<?= base_url('competition?type=essay') ?>">
                                 <img class="w-100" src="<?= base_url('asset/logo/logo-essay.png') ?>" alt="IMG-LOGO" />
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>