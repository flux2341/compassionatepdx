<?php
include('header.php');
?>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<style>
  .endorsement_container {
    display:flex;
    flex-direction:row;
    justify-content:center;
    align-items:center;
    flex-wrap:wrap;
  }
  .endorsement {
    margin:20px;
  }
  .endorsement img {
    width:100px;
  }
  #app {
    max-width:600px;
    margin:0 auto;
    padding:10px;
  }
  #app h4 {
    text-align:center;
  }
</style>
<main id="app">
  <h4>Endorsements</h4>
  <div class="endorsement_container">
    <a v-for="endorsement in endorsements"
       class="endorsement"
       v-bind:href="endorsement.url"
       target="_blank">
      <img v-bind:src="'./content/endorsement_logos/' + endorsement.logo"/>
    </a>
  </div>
</main>
<script>
  let app = new Vue({
    el: '#app',
    data: {
      endorsements: [{
        name: 'Food Fight! Grocery',
        logo: 'food_fight.jpg',
        url: 'https://foodfightgrocery.com/'
      },{
        name: 'Sweetpea Baking Co.',
        logo: 'sweetpea.jpg',
        url: 'https://sweetpeabaking.com/'
      },{
        name: 'Herbivore Clothing Company',
        logo: 'herbivore.jpg',
        url: 'https://www.herbivoreclothing.com/'
      },{
        name: 'Scapegoat Tattoo',
        logo: 'scapegoat.jpg',
        url: 'https://www.scapegoattattoo.com/'
      },{
        name: 'Next Level Burger',
        logo: 'next_level_burger.jpg',
        url: 'https://www.nextlevelburger.com/'
      },{
        name: 'No Bones Beach Club',
        logo: 'no_bones.jpg',
        url: 'https://nobonesbeachclub.com/'
      },{
        name: 'Vtopia Restaurant & Cheese Shop',
        logo: 'vtopia.jpg',
        url: 'https://www.eatvtopia.com/'
      },{
        name: 'Ichiza Kitchen',
        logo: 'ichiza.jpg',
        url: 'https://www.ichizakitchen.com/'
      },{
        name: 'Shoofly Vegan Bakery',
        logo: 'shoofly.jpg',
        url: 'https://shooflyveganbakery.com/'
      },{
        name: 'Oracle Coffee Co',
        logo: 'oracle_coffee.png',
        url: 'https://www.oraclecoffee.com/'
      },{
        name: 'Canteen',
        logo: 'canteen.jpg',
        url: 'http://www.canteenpdx.com/'
      },{
        name: 'SushiLove',
        logo: 'sushilove.jpg',
        url: 'https://www.sushilovepdx.com/'
      },{
        name: 'Guilder Cafe',
        logo: 'guilder_coffee.png',
        url: 'https://www.guildercafe.com/'
      },{
        name: 'Flying Cat Coffee Co.',
        logo: 'flying_cat_coffee_co.jpg',
        url: 'https://www.facebook.com/flyingcatcoffee/'
      },{
        name: 'Hail Snail',
        logo: 'hail_snail.jpg',
        url: 'https://hailsnailpdx.com/'
      },{
        name: 'Woodstock Natural Health Clinic',
        logo: 'woodstock_natural_health_clinic.jpg',
        url: 'http://www.woodstockclinic.com/'
      },{
        name: 'Snackrilege',
        logo: 'snackrilege.png',
        url: 'http://snackrilege.com/'
      },{
        name: 'Wild Friends Foods',
        logo: 'wild_friends.png',
        url: 'https://wildfriendsfoods.com/'
      },{
        name: 'Earthly Gourmet',
        logo: 'earthly_gourmet.jpg',
        url: 'https://www.earthlygourmet.com/'
      },{
        name: 'Cultured Kindness',
        logo: 'cultured_kindness.jpg',
        url: 'https://www.facebook.com/CulturedKindness/'
      },{
        name: 'Anonymous for the Voiceless',
        logo: 'anonymous_for_the_voiceless.png',
        url: 'https://www.anonymousforthevoiceless.org/'
      },{
        name: 'Direct Action Everywhere',
        logo: 'direct_action_everywhere.jpg',
        url: 'https://www.directactioneverywhere.com/'
      },{
        name: 'Portland Animal Save',
        logo: 'portland_animal_save.jpg',
        url: 'http://thesavemovement.org/'
      },{
        name: 'Sea Shepherd Conservation Society',
        logo: 'sea_shepherd.png',
        url: 'https://seashepherd.org/'
      },{
        name: 'Try Vegan PDX',
        logo: 'try_vegan_pdx.jpeg',
        url: 'https://tryveganpdx.org/'
      },{
        name: 'Humane Voters Oregon',
        logo: 'humane_voters_oregon.png',
        url: 'https://www.humanevotersoregon.org/'
      },{
        name: 'Unitarian Universalist Animal Ministry',
        logo: 'uuam.jpg',
        url: 'https://uuam.org/wp/'
      },{
        name: 'Northwest Animal Foundation',
        logo: 'nw_animal_foundation.png',
        url: 'http://www.nwanimalfoundation.org/'
      },{
        name: 'Plant Powered Insurance',
        logo: 'plant_powered_insurance.png',
        url: 'https://www.facebook.com/Plantpoweredinsurance/'
      },{
        name: 'Blue Envelope Productions',
        logo: 'blue_envelope.png',
        url: 'https://www.blueenvelope.productions/'
      },{
        name: 'Wild Pup Adventure',
        logo: 'wild_pup_adventure.gif',
        url: 'http://www.wildpupadventure.com/'
      },{
        name: 'Animal Defenders International',
        logo: 'animal_defenders_international.jpg',
        url: 'http://www.ad-international.org/adi_home/'
      },{
        name: 'Carlisle Joy Jewelry',
        logo: 'carlisle_joy.jpg',
        url: 'https://www.facebook.com/carlislejoyjewelry/'
      },{
        name: 'Ecovibe Apparel',
        logo: 'ecovibe.png',
        url: 'https://ecovibeapparel.com/'
      },{
        name: 'Hairodactyl',
        logo: 'hairodactyl.png',
        url: 'http://hairodactyl.com/'
      },{
        name: 'Do Rad Cuts & Color',
        logo: 'do_rad_cuts_and_color.jpg',
        url: 'https://www.facebook.com/doradcutsandcolor'
      }]
    }
  })
</script>

<?php
include('footer.php');
?>
