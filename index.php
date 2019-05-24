<?php
include('header.php');
?>

<style>
  #section3 {
    display:flex;
    flex-direction:row;
    justify-content:center;
  }
  #section3 > section {
    width:30%;
    margin:60px;
  }
  #section3 h2 {
    margin-top:0;
    text-align:left;
  }
  #section3 p {
    text-align:left;
  }
  .indicator-item {
    background-color:#ff980055 !important;
  }
  .indicator-item.active {
    background-color:#ff9800 !important;
  }
  /* .carousel {
    height:300px !important;
  } */


</style>

<style>
  .modal-header {
    display:flex;
    flex-direction:row;
    justify-content: space-between;
  }
  .modal-header a {
    position: relative;
    top:-10px;
    left:10px;
    font-size:20px;
  }
  .modal-content {
    height:auto !important;
  }

  #mc_embed_signup label {
    font-family: 'Josefin Sans', sans-serif;
  }

  .modal-header-text {
    font-family: 'Josefin Sans';
  }


  #section1 {
    width:100%;
    height:500px;
    position:relative;
    overflow:hidden;
  }
  #section1 img {
    position:absolute;
    width: 100%;
    top:50%;
    transform: translateY(-50%);
    z-index:-1;
  }
  #section1 pre {
    text-align: center;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%, -60%);
    z-index:1;
    color:white;
    font-family: "industry-inc-base";
    font-size: 40px;
  }

  #section2 {
    display:flex;
    flex-direction:row;
    justify-content:center;
    flex-wrap:wrap;
  }
  #section2 section {
    width:20%;
    margin:30px;
    /* box-shadow:3px 3px 3px grey; */
    padding:10px;
    display:flex;
    flex-direction:column;
    align-items:center;
    text-align:center;

  }
  #section2 section p {
    font-size:20px;
  }

  h5 {
    font-family:Josephin Sans;
  }


  .endorsement_container {
    display:flex;
    flex-direction:row;
    justify-content:center;
    align-items:center;
    flex-wrap:wrap;
    margin:0 auto;
    max-width:600px;
  }
  .endorsement {
    margin:20px;
  }
  .endorsement img {
    width:100px;
  }
  #section_logos {

    padding:10px;
    text-align:center;
  }

  @media (max-width:800px) {
    #section2 {
      flex-direction:column;
      align-items:center;
    }
    #section2 section {
      width:80%;
      margin: 30px 0;
    }
    .modal-header-text {
      font-size:20px;
    }
    #section1 img {
      width:auto;
      height:100%;
      top:0;
      transform:none;
    }
    #section3 {
      flex-direction:column!important;
      align-items:center;
    }
    #section3 section {
      width:80% !important;
      margin: 30px 10px !important;
    }
  }
</style>


<main>
  <section id="section1">
    <img src="./content/fox-header.png"/>
    <pre>Together
  We Can
  Make Fur
  History
  <a href="commissioners.php" class="btn orange">Take Action</a></pre>
  </section>
  <section id="section2">
    <section id="section2-1">
      <h5>Sign the Petition</h5>
      <p>Join <span class="animate_number">2245</span> other Portland residents in signing the petition. There are 6 signature locations at local Portland businesses.</p>
      <a class="waves-effect waves-light orange btn" href="petition_locations.php">View Locations</a>
    </section>
    <section id="section2-2">
      <h5>Subscribe to the Newsletter</h5>
      <p>Keep up to date on the latest developments</p>
      <a class="waves-effect waves-light orange btn modal-trigger" href="https://mailchi.mp/32a2cb4c3342/compassionatepdx" target="_blank">Subscribe</a>
    </section>
    <section id="section2-3">
      <h5>Endorse as a Business or Organization</h5>
      <p>Join <span class="animate_number">40</span> other Portland-based businesses and organizations that have endorsed a ban on the sale of new fur products!</p>
      <a class="waves-effect waves-light orange btn" href="https://docs.google.com/forms/d/e/1FAIpQLSdeUH9dBKz25AQsKARCTSwgMnYp8E1qFY9Wh1wj3bUBEg0bTQ/viewform">Endorse</a>
    </section>
  </section>
  <section id="section3">
    <section>
      <h4>Fur Industry Facts</h4>
      <div class="carousel carousel-slider center">
        <div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2 bt_prev"><</a>
          <a class="btn waves-effect white grey-text darken-text-2 bt_next">></a>
        </div>
        <div class="carousel-item" href="#one!">
          <p>Each year, more than 1 billion animals are killed for their fur worldwide, including rabbits, mink, foxes, coyotes, chinchillas, rabbits, seals, dogs, and cats.</p>
        </div>
        <div class="carousel-item" href="#two!">
          <p>Roughly 85% of animals killed for fur are raised on fur factory farms, with the remainder trapped in the wild.</p>
        </div>
        <div class="carousel-item" href="#three!">
          <p>Animals killed on fur farms spend their entire lives in cramped cages. These species are wild, with territorial ranges in the hundreds of acres. The confinement and boredom often leads to cage psychosis - frantic pacing, self-mutilation, and cannibalism.</p>
        </div>
        <div class="carousel-item" href="#four!">
          <p>Animals trapped in the wild are often stuck in traps for days, exposed to the elements, injured and bleeding, and without food or water. Traps are indiscriminate, sometimes killing companion animals and endangered species.</p>
        </div>
        <div class="carousel-item" href="#five!">
          <p>Common methods of killing animals on fur farms are anal electrocution, gassing, suffocation, and neck-breaking, while trapped animals are often either shot or bludgeoned to death.</p>
        </div>
        <div class="carousel-item" href="#six!">
          <p>There at 18 fur farms in Oregon, but most fur sold in stores is imported from China and other countries with little to no regulation.</p>
        </div>
        <div class="carousel-item" href="#seven!">
          <p>Fur farming is banned in many European countries including the UK, Germany, Belgium, Norway, Austria, The Czech Republic, Slovenia, and Serbia.</p>
        </div>
        <div class="carousel-item" href="#eight!">
          <p>The sale and manufacture of fur is banned in several US cities including Los Angeles, San Francisco, Berkeley, and West Hollywood.</p>
        </div>
        <div class="carousel-item" href="#nine!">
          <p>According to Michigan State University, the US mink industry alone adds almost 1,000 tons of nitrogen and phosphorus into the environment each year. Fur is processed with harmful carcinogenic chemicals, including chromium and formaldehyde.</p>
        </div>
      </div>
    </section>
    <section>
      <h4>Fur Ban FAQ</h4>
      <div class="carousel carousel-slider center">
        <div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2 bt_prev"><</a>
          <a class="btn waves-effect white grey-text darken-text-2 bt_next">></a>
        </div>
        <div class="carousel-item" href="#one!">
          <h2>What would the fur ban do?</h2>
          <p>This ordinance would prohibit the manufacture and sale of new fur products within the city of Portland. This includes (but is not limited to) coats with fur trim, handbags, shoes, hats, and key chains.</p>
        </div>
        <div class="carousel-item" href="#two!">
          <h2>Why Portland?</h2>
          <p>Portland has long been a leader in enacting policies to help animals and the environment. It was an early adopter of the Bottle Bill, passed some of the nation’s most restrictive puppy mill laws in 2010, banned plastic bags in 2011, and just passed a strong law restricting single-use plastic. Joining other cities in prohibiting this archaic, cruel, and unnecessary product is in line with Portland’s progressive ethics.</p>
        </div>
        <div class="carousel-item" href="#three!">
          <h2>Won't this hurt local business?</h2>
          <p>Most fur sold in Portland is imported from China or Canada. No businesses in Portland rely solely on the sale of fur and for those that do, it is a negligible amount of sales. However, in order to mitigate any economic impacts, there will likely be a one-year cushion after the ban takes effect to sell any fur products that they purchased prior to the ordinance adoption date.</p>
        </div>
        <div class="carousel-item" href="#four!">
          <h2>What about the loss of taxes?</h2>
          <p>There is no sales tax in Oregon. This ban would have no impact on taxes.</p>
        </div>
        <div class="carousel-item" href="#five!">
          <h2>Isn’t faux fur made from plastic and bad for the environment?</h2>
          <p>Faux fur can be made from recycled or biodegradable materials, or can simply be avoided. The fur industry contributes to water pollution through the discharge of nitrogen and phosphorous. Fur is processed with carcinogenic chemicals, including chromium and formaldehyde, which can damage human health and prevents it from being biodegradable. It takes fifteen times more energy to make a coat from animal fur than from faux fur.</p>
        </div>
        <div class="carousel-item" href="#six!">
          <h2>Will people be banned from wearing fur?</h2>
          <p>No. The law only regulates the manufacture and sale of fur within the city of Portland.</p>
        </div>
        <div class="carousel-item" href="#seven!">
          <h2>What about the sale of “vintage” fur and used clothing? What about leather, etc?</h2>
          <p>The law only regulates the manufacture and sale of new fur items. Used fur items, as well as leather, cowhide and lambskin/sheepskin, even with hair attached are all exempt.</p>
        </div>
        <div class="carousel-item" href="#eight!">
          <h2>It can’t be done. The industry is too powerful.</h2>
          <p>Not true. West Hollywood banned the sale of fur in 2013 when fur sales were estimated at two million dollars annually. Four cities and counting have adopted similar bans, and a statewide fur ban bill is currently moving through the California State Assembly.</p>
        </div>
      </div>
    </section>
  </section>
  <section id="section_logos">

    <h5>30 local businesses have endorsed the ban on the sale of new fur products.</h5>
    <div class="endorsement_container">
      <a v-for="endorsement in endorsements"
         class="endorsement"
         v-bind:href="endorsement.url"
         v-bind:title="endorsement.name"
         target="_blank">
        <img v-bind:src="'./content/endorsement_logos/' + endorsement.logo"/>
      </a>
    </div>
    <br/>
    <h5>12 local, national, and international organizations are in our coalition</h5>
    <div class="endorsement_container">
      <a v-for="coalition_member in coalition"
         class="endorsement"
         v-bind:href="coalition_member.url"
         v-bind:title="coalition_member.name"
         target="_blank">
        <img v-bind:src="'./content/endorsement_logos/' + coalition_member.logo"/>
      </a>
    </div>
  </section>







  <!-- <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="modal-header">
        <h4></h4>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">╳</a>
      </div>
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdeUH9dBKz25AQsKARCTSwgMnYp8E1qFY9Wh1wj3bUBEg0bTQ/viewform?embedded=true" width="640" height="1710" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
    </div>
  </div> -->

</main>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, {});
  });

  let carousel_elements = document.querySelectorAll('.carousel')
  let carousel_instances = M.Carousel.init(carousel_elements, {
    fullWidth: true,
    indicators: true
  });
  for (let i=0; i<carousel_elements.length; ++i) {
    let bt_prev = carousel_elements[i].querySelector('.bt_prev')
    let bt_next = carousel_elements[i].querySelector('.bt_next')
    bt_prev.onclick = function() {
      carousel_instances[i].prev()
    }
    bt_next.onclick = function() {
      carousel_instances[i].next()
    }
  }

  var easing = {
      // no easing, no acceleration
      linear: function (t) { return t },
      // accelerating from zero velocity
      easeInQuad: function (t) { return t*t },
      // decelerating to zero velocity
      easeOutQuad: function (t) { return t*(2-t) },
      // acceleration until halfway, then deceleration
      easeInOutQuad: function (t) { return t<.5 ? 2*t*t : -1+(4-2*t)*t },
      // accelerating from zero velocity
      easeInCubic: function (t) { return t*t*t },
      // decelerating to zero velocity
      easeOutCubic: function (t) { return (--t)*t*t+1 },
      // acceleration until halfway, then deceleration
      easeInOutCubic: function (t) { return t<.5 ? 4*t*t*t : (t-1)*(2*t-2)*(2*t-2)+1 },
      // accelerating from zero velocity
      easeInQuart: function (t) { return t*t*t*t },
      // decelerating to zero velocity
      easeOutQuart: function (t) { return 1-(--t)*t*t*t },
      // acceleration until halfway, then deceleration
      easeInOutQuart: function (t) { return t<.5 ? 8*t*t*t*t : 1-8*(--t)*t*t*t },
      // accelerating from zero velocity
      easeInQuint: function (t) { return t*t*t*t*t },
      // decelerating to zero velocity
      easeOutQuint: function (t) { return 1+(--t)*t*t*t*t },
      // acceleration until halfway, then deceleration
      easeInOutQuint: function (t) { return t<.5 ? 16*t*t*t*t*t : 1+16*(--t)*t*t*t*t },
      // exponential decelerating
      exp: function (t) { return (1-Math.exp(-t*7)) }
  };
  function animate(num_start, num_end, duration, easing, callback) {
    let start = performance.now()
    function animation_step() {
      let now = performance.now()
      let lapsed = now-start
      if (lapsed >= duration) {
        callback(num_end)
      } else {
        let t = lapsed/duration
        let t2 = easing(t)
        let v = num_start + (num_end-num_start)*t2
        callback(v)
        window.requestAnimationFrame(animation_step)
      }
    }
    window.requestAnimationFrame(animation_step)
  }



  let animated_numbers = document.querySelectorAll('.animate_number')
  for (let i=0; i<animated_numbers.length; ++i) {
    animate(0, animated_numbers[i].innerText, 5000, easing.easeOutQuad, function(v) {
      animated_numbers[i].innerText = Math.floor(v)
    })
  }


  let app = new Vue({
    el: '#section_logos',
    data: {
      coalition: [
        {
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
          name: 'Animal Defenders International',
          logo: 'animal_defenders_international.jpg',
          url: 'http://www.ad-international.org/adi_home/'
        },{
          name: 'Voters of Animal Rights',
          logo: 'vfar.jpg',
          url: 'https://vfar.org/'
        },{
          name: 'In Defense of Animals',
          logo: 'ida.png',
          url: 'https://www.idausa.org/'
        }
      ],
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
        name: 'Plant Powered Insurance',
        logo: 'plant_powered_insurance.png',
        url: 'https://www.facebook.com/Plantpoweredinsurance/'
      },{
        name: 'Blue Envelope Productions',
        logo: 'blue_envelope.png',
        url: 'https://www.blueenvelope.productions/'
      },{
        name: 'Wild Pup Adventure',
        logo: 'wild_pup_adventure.jpg',
        url: 'http://www.wildpupadventure.com/'
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
        logo: 'hairodactyl.jpg',
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
