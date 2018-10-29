<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Suggested Plant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="day_night.js"></script>
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <style type="text/css">
    body,html{
      height: 100%;
      background-color: rgb(253,255,222);
    }

    .parallax{
      height: 100vh;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      padding-left: 45%; 
    }

    .heading{
      font-family: serif;
      font-style: normal;
      font-size: 20px;
    }

    .more_content{
    	scroll-behavior: auto;
    }

    .modal-content{
      border-radius: 5%;
    }

    .modal-header{
      border-radius: 5%;
    }

    .modal-footer{
      border-radius: 5%;
    }

    .modal-body{
      font-size: 18px;
      font-family: serif;
      height: 65vh;
      overflow-y: auto;
    }

    .learn_btn{
      position: absolute;
      padding: 1.5vh;
      border-radius: 3.5vh;
      opacity: 0.6;
      margin-top: 25%;
    }

    .learn_btn:hover{
      opacity: 1;
      transform: scale(1.1);
      background-color: white;
      color: black;
    }

    .close_modal{
      padding: 0.7vw;
      border-radius: 1.5vw;
      outline: none;
    }
  </style>
</head>
  
<body>
    <div>
      <nav class="navbar navbar-expand-sm">
    <ul class="navbar-nav">
      <li class="nav-item" >
        <a class="nav-link" href="home.php"><span title="Home">Home</span></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="plant_status.php"><span title="Plant Status">Plant Status</span></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="suggested_plant.php"><span title="Suggested Plants">Suggested Plants</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#" ><span title="Botanical Gardens">Botanical Gardens</span></a>
      </li>
 -->      <li class="nav-item">
        <a class="nav-link" href="about.php" ><span title="About Us">About Us</span></a>
      </li>
      <li class="nav-item">
                <?php if(isset($_SESSION['username']) && !empty($_SESSION['username']) )
                { ?>
                    <a class="nav-link" href="logout.php" ><span title="Logout">Logout</span></a>
                <?php } else{ ?>
                    <a class="nav-link" href="login_signup.php"><span title="Login">Login</span> </a>
                <?php } ?>
            </li>
      <div class="toggle"></div>
    </ul>
  </nav>
    </div>
    <div class="heading" style="height: auto;text-align: center;">
      	<h1>Cacti</h1>
    </div>

    <div class="parallax" style="background-image: url('images/cacti.jpg');">
    	<button type="button" class="btn mx-auto d-block learn_btn" data-toggle="modal" data-target="#more_content">Learn More...</button>
      <div class="modal fade" id="more_content" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title">Cacti</h1>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              Cactus is a type of plant that can store large amounts of water and survive in extremely hot and dry habitats. There are around 2000 different species of cactus that differ in size, shape, color and type of habitat. Almost all cacti are native to deserts and dry regions of South and North America. Due to their attractive morphology, cacti can be found throughout the world today. Over collecting and habitat loss are major threats to the survival of cacti in the wild. Certain species are listed as endangered, but luckily, trade of most species of cacti is prohibited by law.
              Interesting Cactus Facts:
              Size of cactus depends on the species. Largest species of cactus can reach 66 feet in height and weigh up to 4800 pounds (when it is fully loaded with water). Smallest species usually have only few inches in height.
              Cactus can have arborescent (tree-like), cylindrical, rounded, irregular or starfish shape. Surface can be flat or covered with ridges.<br>
              Cacti can be green, bluish or brown-green in color. They have waxy substance on the surface which prevents loss of water via transpiration (loss of water through small holes when outer temperature is high).
              Cacti have spines instead of leaves. Spines can be soft or rigid, straight or curved, arranged in rows or scattered. They can reach 6 inches in length.
              Spines have two major roles: they prevent loss of water via transpiration and keep the plant safe from animals.
              Each spine develops from areole, which looks like a bump or nipple-like structure on the surface of the cactus.
              Since cacti live in dry areas, they need to absorb large amount of water and store it in the stem and roots for the periods of drought. Besides storing of water, stem plays role in the process of photosynthesis (production of food by using the sunlight and carbon dioxide).
              Water from cactus has higher density compared with tap water, but it is safe for drinking.
              Roots of cacti are located few inches underground, but they can reach 7 feet in diameter because water easily passes through the sand.<br>
              Cacti have dormant periods and periods of intense growth and blossoming. Periods of growth require enough water and sunlight and they usually last shorter than periods of rest.
              Size and shape of flower depends on the species of cacti and type of pollination. They can be white, red, orange, pink or blue in color.
              Butterflies, bees, moths, bats and hummingbirds are main pollinators of cacti.
              Spines of cactus can be used in the production of hooks, combs and needles. Fruit can be used as food.
              Certain cacti produce substance called mescaline which induces hallucinogenic effects. It has been used by shamans to induce trans-like state and ensure "communication" with God.
              Cacti can survive from 15 to 300 years, depending on the species.

            </div>

            <div class="modal-footer">
              <button type="button" class="close_modal btn-danger" data-dismiss="modal"> Close</button>
            </div>
          </div>
        </div>
    </div>

    </div>
	
	<div class="heading" style="height: auto;text-align: center;">
      	<h1>Azalea</h1>
    </div>

    <div class="parallax" style="background-image: url('images/azalea.jpg');">
    	<button type="button" class="btn mx-auto d-block learn_btn" data-toggle="modal" data-target="#more_content2">Learn More...</button>
      <div class="modal fade" id="more_content2" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title">Azalea</h1>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              Pronounced a-ZAY-lee-a, this popular perennial shrub is a member of the Rhododendron family. However, unlike Rhododendrons that have clusters of blossoms, they feature only one bloom per stem.
              It is a fairly hardy plant, which is relatively easy to grow in most climates.<br>

              <b>Description</b>
              Azaleas are small trees or shrubs that flower during the spring. They grow to around 60cm tall and are a shallow rooting plant with red, pink and white blossoms. Gardeners have developed a number of hybrid varieties over the years<br>

              <b>Habitat</b>
              Azaleas are native to China and Thailand, but they are now abundant in many parts of the world. Their natural habitat is in the dappled sunlight of a forest with moving trees that alternately provide them with bright sunlight and protective shade. By planting in a similar environment, growers will be rewarded with an abundance of blossoms in the spring.

              The optimum growing conditions for Azaleas are acidic, well-drained soil and moderate temperatures.<br>

              <b>Availability</b>
              The best time to plant or transplant Azaleas is during early spring, just before they start to blossom. They are available to purchase throughout the year, although extra care should be taken during the winter months.<br>

              <b>Species</b>
              The genus name for the Azalea is Rhododendron simsii. However, whilst they are related to Rhododendrons, they are not as hardy as the garden variety of this plant and should be kept indoors over the winter months.<br>

              <b>Care Tips</b>
              Azaleas are relatively easy to grow given the right soil conditions, but they do need plenty of water in order to thrive. If you live in a hard water area, it’s better to water with rainwater; otherwise the leaves may turn yellow. If the leaves go brown, they are not getting enough water.<br>

              <b>Did You Know?</b>
              Although its name comes from the Greek word for “dry”, this actually refers only to the Lapland variety of Azaleas that will only grow in dry places and does not refer to the modern varieties we see today.<br>


            </div>

            <div class="modal-footer">
              <button type="button" class="close_modal btn-danger" data-dismiss="modal"> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="heading" style="height: auto;text-align: center;">
      	<h1>Aloe Vera</h1>
    </div>
    <div class="parallax" style="background-image: url('images/aloe_vera.jpg');">
    	<button type="button" class="btn mx-auto d-block learn_btn" data-toggle="modal" data-target="#more_content3">Learn More...</button>
      <div class="modal fade" id="more_content3" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title">Aloe Vera</h1>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              Aloe vera is a succulent plant species of the genus Aloe. An evergreen perennial, it originates from the Arabian Peninsula but grows wild in tropical climates around the world and is cultivated for agricultural and medicinal uses. The species is also used for decorative purposes and grows successfully indoors as a potted plant.

              It is found in many consumer products including beverages, skin lotion, cosmetics, or ointments for minor burns and sunburns. There is little scientific evidence of the effectiveness or safety of Aloe vera extracts for either cosmetic or medicinal purposes. Studies finding positive evidence are frequently contradicted by other studies.

              Aloe vera is a stemless or very short-stemmed plant growing to 60–100 cm (24–39 in) tall, spreading by offsets. The leaves are thick and fleshy, green to grey-green, with some varieties showing white flecks on their upper and lower stem surfaces.[4] The margin of the leaf is serrated and has small white teeth. The flowers are produced in summer on a spike up to 90 cm (35 in) tall, each flower being pendulous, with a yellow tubular corolla 2–3 cm (0.8–1.2 in) long. Like other Aloe species, Aloe vera forms arbuscular mycorrhiza, a symbiosis that allows the plant better access to mineral nutrients in soil.

              Aloe vera leaves contain phytochemicals under study for possible bioactivity, such as acetylated mannans, polymannans, anthraquinone C-glycosides, anthrones, other anthraquinones, such as emodin and various lectins.
            </div>

            <div class="modal-footer">
              <button type="button" class="close_modal btn-danger" data-dismiss="modal"> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
 
 	<div class="heading" style="height: auto;text-align: center;">
      	<h1>Snake Plant</h1>
    </div>
    <div class="parallax" style="background-image: url('images/snake_plant.jpg');">
    	<button type="button" class="btn mx-auto d-block learn_btn" data-toggle="modal" data-target="#more_content4">Learn More...</button>
      <div class="modal fade" id="more_content4" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title">Snake Plant</h1>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              Sansevieria trifasciata is a species of flowering plant in the family Asparagaceae, native to tropical West Africa from Nigeria east to the Congo. It is most commonly known as the snake plant, mother-in-law's tongue, and viper's bowstring hemp, among other names.

              It is an evergreen perennial plant forming dense stands, spreading by way of its creeping rhizome, which is sometimes above ground, sometimes underground. Its stiff leaves grow vertically from a basal rosette. Mature leaves are dark green with light gray-green cross-banding and usually range from 70–90 centimetres (28–35 in) long and 5–6 centimetres (2.0–2.4 in) wide, though it can reach heights above 2 m (6 ft) in optimal conditions.[citation needed]

              The specific epithet trifasciata means "three bundles".
            </div>

            <div class="modal-footer">
              <button type="button" class="close_modal btn-danger" data-dismiss="modal"> Close</button>
            </div>
          </div>
        </div>
    </div>

    </div>

    <div class="heading" style="height: auto;text-align: center;">
      	<h1>Weeping Fig</h1>
    </div>
    <div class="parallax" style="background-image: url('images/weeping_fig.jpg');">
    	<button type="button" class="btn mx-auto d-block learn_btn" data-toggle="modal" data-target="#more_content5">Learn More...</button>
      <div class="modal fade" id="more_content5" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title">Weeping Fig</h1>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              The weeping fig is part of the Ficus plant genus (scientific name: F. benjamina) and tree like, in looks. With large arching branches and long pointed leaves, it looks attractive indoors (apart from leaves dropping).

              The Benjamina is one of the most popular small indoor trees from this genus that grows quite slowly and needs a grower to take particular care of a few needs (lighting, watering, etc.), which is fairly easy, when you know how.<br>

              <b>Temperature:</b>  Room temperatures of around 65°f / 16°c --- 75°f / 24°c is ideal. Try not to allow temperatures to decrease lower than 50°f / 10°c, although they can handle a bit lower, without problems.<br>

              <b>Watering:</b> Allow the compost to dry to a certain extent (at the top) between each watering with tepid filtered or distilled water. Over-watering and under-watering can cause the leaves to drop. To identify the problem check if the leaves are crispy or if they fold easily. If they fold then the problem could be over-watering, and if crispy the tree could be under watered. Add enough water that can seep from the top soil to the drainage holes, at the bottom of the container and remove the left over water to allow enough oxygen to the plant roots. Less watering in the winter is to be carried out.
            </div>

            <div class="modal-footer">
              <button type="button" class="close_modal btn-danger" data-dismiss="modal"> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</body>
</html>