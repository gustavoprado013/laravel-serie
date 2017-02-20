<template>
    <div class="container">
        <div class="row">
          <div class="col m4 offset-m4">
            <h4 class="center-align">Bills</h4>
            <div class="row">
              <form>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="email" type="email" v-model="user.email">
                    <label for="email">Email</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <input id="pass" type="password" v-model="user.password">
                    <label for="pass">Password</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col m12">
                    <p class="center-align">
                      <button class="btn btn-large btn-default" type="button" @click="login()" name="button">Login</button>
                    </p>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
    export default {

      data(){
        return{
          user: {
            email: '',
            password: ''
          }
        };
      },

        ready() {
            console.log('Component ready.')
        },

        methods: {
          login(){
            this.$http.post('http://localhost:8000/api/token', this.user)
              .then((response) => {
                window.localStorage.setItem('token', response.data.token);
                this.$router.go({name: 'bill-pay.list'});
              });
          }
        }
     }
</script>
