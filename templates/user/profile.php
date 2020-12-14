<div id="owner">
  <div class="profileHeader">
    <div class="header">
    </div>
    <div class="image">
      <img src="../images/user/user-<?=$user['idUser']?>.jpg" width="200" height="200" alt="Profile Picture">
    </div>
    <div class="name">
      <h1><?=$user['username']?></h1>
    </div>
  </div>
    <div class="infoGrid">
      <section id="information_person">
        <h2>Information</h2>
        <p>Gender: <?= htmlentities($user['gender']) ?></p>
        <p>Age: <?= htmlentities($user['age']) ?></p>
        <p>Location: <?= htmlentities($user['location']) ?></p>
      </section>
      <section id="favPets">
        <h2>Favorite Pets</h2>
        <?php foreach($userPets as $fav) { ?>
          <img src="../images/pet-profile/pet-<?=$fav['idPet']?>/profile.jpg" width="20" height="20" alt="Pet Images">
          <p><a href="dog_profile.php?idPet=<?=$fav['idPet']?>"><?= htmlentities($fav['petName']) ?></a></p>
        <?php } ?>
      </section>
      <section id="petsForAdoption">
        <h2>Pets for Adoption</h2>
        <?php foreach($toAdoptPets as $fav) { ?>
          <img src="../images/pet-profile/pet-<?=$fav['idPet']?>/profile.jpg" width="20" height="20" alt="Pet Images">
          <p><a href="dog_profile.php?idPet=<?=$fav['idPet']?>"><?= htmlentities($fav['petName']) ?></a></p>
        <?php } ?>
      </section>
      <section id="adopted">
        <h2>Adopted Pets!</h2>
        <?php foreach($adoptPets as $fav) { ?>
          <img src="../images/pet-profile/pet-<?=$fav['idPet']?>/profile.jpg" width="20" height="20" alt="Pet Images">
          <p><a href="dog_profile.php?idPet=<?=$fav['idPet']?>"><?= htmlentities($fav['petName']) ?></a></p>
        <?php } ?>
      </section>
    </div>
</div>