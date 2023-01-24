   <?= $this->extend("Layout/Base"); ?>
   <?= $this->section("content"); ?>

   <script type="text/javascript" src="<?= base_url(); ?>/public/js/maugallery.js"></script>
   <script type="text/javascript" src="<?= base_url(); ?>/public/js/mauscripts.js"></script>
   <style>
       .imgGallery {
           margin-top: 20px;
       }

       .imgGallerys p {
           text-align: justify;
       }

       .imgGallerys span {
           color: green;
       }

   </style>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
   <div class="ui stackable grid">

       <div class="imgGallery contentBox" style="width: 100%;">
           <div class="heading">
               <h1 class="ui horizontal divider header">
                   CTPF Gallery
               </h1>
           </div>
           <!--/heading-->

           <div class="ui horizontal divider"></div>

           <div class="imgGalleryBox">

               <div class="container py-3">
                   <div class="gallery" style="display:none;">
                       <img data-gallery-tag="women" class="gallery-item" src="https://images.pexels.com/photos/413727/pexels-photo-413727.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <div class="gallery-item h-100">
                           <div class="bg-danger d-flex flex-column text-warning justify-content-center align-items-center h-100 w-100 p-3">
                               <p class="lead m-0">I have no tag!</p>
                           </div>
                       </div>
                       <img data-gallery-tag="women" class="gallery-item" src="https://images.pexels.com/photos/716411/pexels-photo-716411.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <img data-gallery-tag="coffee" class="gallery-item" src="https://images.pexels.com/photos/539432/pexels-photo-539432.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <img data-gallery-tag="men" class="gallery-item" src="https://images.pexels.com/photos/874158/pexels-photo-874158.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <img data-gallery-tag="dogs" class="gallery-item" src="https://images.pexels.com/photos/39317/chihuahua-dog-puppy-cute-39317.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <img data-gallery-tag="women" class="gallery-item" src="https://images.pexels.com/photos/428338/pexels-photo-428338.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <img data-gallery-tag="dogs" class="gallery-item" src="https://images.pexels.com/photos/160846/french-bulldog-summer-smile-joy-160846.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <div class="gallery-item h-100">
                           <div class="bg-warning d-flex flex-column text-dark justify-content-center align-items-center h-100 w-100 p-3">
                               <p class="lead m-0">You can't filter me!</p>
                           </div>
                       </div>
                       <img data-gallery-tag="coffee" class="gallery-item" src="https://images.pexels.com/photos/434213/pexels-photo-434213.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <img data-gallery-tag="men" class="gallery-item" src="https://images.pexels.com/photos/373899/pexels-photo-373899.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <img data-gallery-tag="women" class="gallery-item" src="https://images.pexels.com/photos/1036621/pexels-photo-1036621.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <img data-gallery-tag="coffee" class="gallery-item" src="https://images.pexels.com/photos/272887/pexels-photo-272887.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <img data-gallery-tag="dogs" class="gallery-item" src="https://images.pexels.com/photos/356378/pexels-photo-356378.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <div class="gallery-item h-100">
                           <div class="bg-info d-flex flex-column text-warning justify-content-center align-items-center h-100 w-100 p-3">
                               <p class="lead m-0">Me neigher.</p>
                           </div>
                       </div>
                       <img data-gallery-tag="women" class="gallery-item" src="https://images.pexels.com/photos/247204/pexels-photo-247204.jpeg?auto=compress&cs=tinysrgb&h=350" />
                       <img data-gallery-tag="dogs" class="gallery-item" src="https://images.pexels.com/photos/59523/pexels-photo-59523.jpeg?auto=compress&cs=tinysrgb&h=350" />
                   </div>

               </div>

               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


           </div>
       </div>
       <!--/imgGallery-->

   </div>

   <?= $this->endSection(); ?>
