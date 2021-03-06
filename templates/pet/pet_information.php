<div id="pet-information">
  <aside id="pet-information-sidebar">
      <aside id="pet-name-photo">
          <img src="./images/pet-profile/pet-<?=$pet['idPet']?>/profile.jpg" width="200" height="200" alt="Pet Profile Picture">
          <section id="name_and_edit">
            <h1><a href="pet_profile.php?idPet=<?=$pet['idPet']?>"><?= htmlentities($pet['petName']) ?></a></h1>
            <?php if (isLogged() && canUpdate($_SESSION['user']['idUser'], $pet['idPet'])) {?>
              <form action="./pet_update.php?idPet=<?=$pet['idPet'] ?>" method="post">
                <button type="submit"><i class="fa fa-pencil"></i></button>
              </form>
            <?php } ?>
          </section>
      </aside>

      <section id="pet-detailed-information">
          <h3>Information</h3>
          <p>Species: <?= htmlentities($pet['specie']) ?></p>
          <p>Gender: <?= htmlentities($pet['gender']) ?></p>
          <p>Size: <?= htmlentities($pet['size']) ?></p>
          <p>Color: <?= htmlentities($pet['color']) ?></p>
          <p>Found by:<a href="./profile.php?user=<?=$owner['username']?>"><?=empty($owner['username']) ? 'Deleted User' : htmlentities($owner['username'])?></a></p>
          <?php if(!empty($adopted)) { ?>
              <p>Adopted by:<a href="./profile.php?user=<?=$adopted['username']?>"><?= htmlentities($adopted['username']) ?></a></p>
          <?php } else if(isAdopted($pet['idPet'])) {?>
              <p>Adopted by: Deleted Account</p>
          <?php } else {?>
              <p>This pet is not adopted!</p>
          <?php } ?>
      </section>
    </aside>

    <section id="container">
      <section id="top-container">
        <section id="biography"> 
            <h2>Biography</h2>
            <p><?= htmlentities($pet['bio']) ?></p>   
        </section>

        <section id="photos">
          <h2>Photos</h2>
          <div class="slideshow-container">
            <?php foreach($photos as $photo) {?>
              <div class="pet-album">
                <img src="./images/pet-profile/pet-<?=$pet['idPet']?>/photo-<?=$photo['idPhoto']?>.jpg" alt="Failed displaying pet image" width="400" height="400">
              </div>
            <?php } ?>
            <?php if(!empty($photos)) { ?>
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <?php } ?>
          </div>
        </section>
      </section>

      <section id="posts">
        <h2>Posts</h2>
          <?php if (isLogged() && canUpdate($_SESSION['user']['idUser'], $pet['idPet'])) { ?>
            <form id="posts-form" class="postsform" action="./action/action_add_post.php?idPet=<?=$pet['idPet']?>&token=<?=$_SESSION['csrf']?>" method="post">
              <input type="text" name="post" placeholder="Add a post">
              <input type="hidden" name="idPet" value="<?=$pet['idPet']?>">
              <input type="submit" id="posts-button" value="Post">
            </form>
          <?php } ?>
          <section id="uniquepost">
          </section>
      </section>
    </section>
</div>

    
