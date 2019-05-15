<?php
include('header.php');
?>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<style>
  .commissioner {
    margin:10px;
  }
  #app {
    max-width:600px;
    margin:0 auto;
    padding:10px;
  }
  h4 {
    text-align:center;
  }
</style>
<main id="app">
  <h4>Contact Your City Commissioners</h4>
  <p>The city commissioners are elected officials that represent the people of Portland. If you are a resident of Portland, <b>email</b> them and follow up with a <b>phone call</b> to let them know you support a ban on the sale of new fur products.</p>
  <hr/>
  <div v-for="commissioner in commissioners" class="commissioner">
    <h5>{{commissioner.name}}</h5>
    <div><b>Mail:</b> {{commissioner.address}}</div>
    <div><b>Email:</b> <a v-bind:href="'mailto:'+commissioner.email">{{commissioner.email}}</a></div>
    <div><b>Phone:</b> <a v-bind:href="'tel:'+commissioner.phone">{{commissioner.phone}}</a></div>
  </div>
</main>
<script>
  let app = new Vue({
    el: '#app',
    data: {
      commissioners: [{
        name: 'Ted Wheeler',
        title: 'Mayor',
        address: 'Portland City Hall, 1221 SW 4th Ave. Rm 340, Portland, OR 97204',
        email: 'mayorwheeler@portlandoregon.gov',
        phone: '503-823-4120'
      },{
        name: 'Nick Fish',
        title: 'Commissioner',
        address: 'Portland City Hall, 1221 SW 4th Ave. Rm 240, Portland, OR 97204',
        email: 'nick@portlandoregon.gov',
        phone: '503-823-3589'
      },{
        name: 'Amanda Fritz',
        title: 'Commissioner',
        address: 'Portland City Hall, 1221 SW 4th Ave. Rm 220 Portland, OR 97204',
        email: 'amanda@portlandoregon.gov',
        phone: '503-823-3008'
      },{
        name: 'Chloe Eudaly',
        title: 'Commissioner',
        address: 'Portland City Hall, 1221 SW 4th Ave. Rm 210, Portland, OR 97204',
        email: 'chloe@portlandoregon.gov',
        phone: '503-823-4682'
      },{
        name: 'Jo Anne Hardesty',
        title: 'Commissioner',
        address: 'Portland City Hall, 1221 SW 4th Ave. Rm 230, Portland, OR 97204',
        email: 'joann@portlandoregon.gov',
        phone: '503-823-4151'
      }]
    }
  })
</script>

<?php
include('footer.php');
?>
