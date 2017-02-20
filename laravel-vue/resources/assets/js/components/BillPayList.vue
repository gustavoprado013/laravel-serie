<template>
  <div class="container">
    <div class="row">
      <div class="col m8 offset-m2">
        <h4 class="center-align">My Bills to Pay</h4>
        <div>
          <!--<a v-link="{name: 'bill-pay.create'}" class="btn btn-default" type="button">New</a>-->
        </div>
        <div class="row">
          <table class="highlight striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Valid</th>
                <th>Value</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(index,o) in bills">
                <td>{{index + 1}}</td>
                <td>{{o.name}}</td>
                <td>{{o.date_due}}</td>
                <td>{{o.value}}</td>
                <td>
                  <!--<a v-link="{name: 'bill-pay.update', params: {id: o.id}}">Edit</a>-->
                  <a href="#" @click.prevent="destroy(o)">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
export default {
  data () {
    return {
      bills: []
    };
  },
  ready () {
    this.$http.get('http://localhost:8000/api/bill_pays').then((response) => {
      this.bills = response.data;
    })
  },
  methods: {
    destroy(o){
      this.$http.delete(`http://localhost:8000/api/bill_pays/${o.id}`).then((response)=> {
        this.bills.$remove(o);
      })
    }
  }
}
</script>
