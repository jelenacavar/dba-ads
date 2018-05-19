<!DOCTYPE html>
<html lang="en">
  <?php include "components/head.php" ?>
  <body>
      <main class="container pb-2">
       <section class="row p-2">
        <article class="col">
          <h3 class="pt-2">Delightful ads and product experience</h3>
          <p>This project has been made in collaboration with Den Blå Avis in order to fulfil the requirements for the final exam of the Multimedia Design Programme.</p>
            <p>This is a digital prototype of the solution made for two main personas, Anne Sofie and Kristian. Click on the following buttons to display the different experience implemented for each user.</p>
        </article>
       </section>
        <section class="row">
          <div class="col text-center pt-2">
            <div class="card persona">
              <img class="card-img-top" src="img/personas/anne-sofie.png" alt="Anne Sofie">
              <div class="card-body">
                <h5 class="card-title">Anne Sofie</h5>
                <p class="card-text"></p>
                <a href="desktop.php?user=annesofie" class="btn btn-primary">See prototype</a>
              </div>
            </div>
          </div>
          <div class="col text-center pt-2">
            <div class="card persona">
              <img class="card-img-top" src="img/personas/kristian.png" alt="Kristian">
              <div class="card-body">
                <h5 class="card-title">Kristian</h5>
                <p class="card-text"></p>
                <a href="desktop.php?user=kristian" class="btn btn-primary">See prototype</a>
              </div>
            </div>
          </div>          
        </section>        
      </main>
      <?php include "components/scripts.php" ?>
  </body>
</html>