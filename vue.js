const app = new Vue({
   el: '#app',
   data: {
      matches: [],
      cities: [],
      city: '',
      apiURL: 'http://localhost:8888/php-nba-vacanze/server.php?',
   },

   mounted() {
      this.getApi();
   },

   methods: {
      getImage(img){
         let path = 'img/';
         return path += img;
      },

      getApi(){
         axios.get(this.apiURL, {
            params: {
               city: this.city,
            }
         })
         .then( response => {
            this.matches = response.data;
         })
         .catch( error => {
            console.log(error);
         });
      },

      getCities(){
         this.matches.forEach(match => {
            if (!this.cities.includes(match.city)) {
               this.cities.push(match.city);
            }
         });
         return this.cities;
      },
   }
})