<body>
     <main class="main">
     <div class="fond" style="bottom: 0%;top:0%;background-color:#6c98dd;filter: blur(100PX);" >
     </div>
   <Section class="background" style="bottom: 20%;background-color:white;">
   <div class="container-fluid mt-3">
      <h4 class="mb-2"style="margin-left: 40%;font-family: 'Spicy Rice', cursive;">Formulaires d'inscription</h4><br/><br/>
      <form action ="SignIN/Send" method="post">
         <div class="form-row">
            <div class="form-group col-sm-6">
               <label for="myEmail" style="font-family: 'Spicy Rice', cursive;">Identifiant</label>
               <input type="text" class="form-control" name="identifiant"
                  >
            </div>
            <div class="form-group col-sm-6">
               <label for="myPassword" style="font-family: 'Spicy Rice', cursive;">Mot De Passe</label>
               <input type="password" class="form-control"
                  id="myPassword" placeholder="Password" name="mdp" >
            </div>
         </div>
         <div class="form-group">
            <label for="inputAddress" style="font-family: 'Spicy Rice', cursive;">Nom</label>
            <input type="text" class="form-control"
               id="myAddress" placeholder="1234 Main St" name="nom">
         </div>
         <div class="form-group">
            <label for="inputAddress2" style="font-family: 'Spicy Rice', cursive;">Prenom</label>
            <input type="text" class="form-control"
               id="myAddress2" placeholder="Apartment, studio, or floor" name="prenom">
         </div>
         <div class="form-row">
            <div class="form-group col-sm-6">
               <label for="myCity" style="font-family: 'Spicy Rice', cursive;">Ville</label>
      <input type="text" class="form-control" id="myCity" name="ville">
            </div>
            <div class="form-group col-sm-4">
               <label for="myState" style="font-family: 'Spicy Rice', cursive;">Pays</label>
               <select id="myState" class="form-control" name="pays">
                  <option selected>Choose...</option>
                  <option>France</option>
               </select>
            </div>

         </div>

         <button type="submit" class="btn btn-primary" style="margin-left: 50%;font-family: 'Spicy Rice', cursive;">Valider</button>
      </form>
   </div>
</Section>

</main>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
