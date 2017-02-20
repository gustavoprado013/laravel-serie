<template lang="html">
  <div class="col m12">
    <div class="row">
      <nav>
        <div class="nav-wrapper">
          <div class="col s12">
            <a href="#" class="brand-logo">Bills</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-me-and-down">
              <li v-for="o in links">
                <a v-link="{name: o.routeName}">{{o.label}}</a>
              </li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li v-for="o in links">
                <a v-link="{name: o.routeName}">{{o.label}}</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <router-view></router-view>
    </div>
  </div>

</template>

<script>
export default {
  data () {
    return {
      links: [
        {label:'Bills to Pay', routeName: 'bill-pay.list'}
      ]
    };
  },
  ready () {
    $(function () {
      $(".button-collapse").sideNav();
    });
  }
}
</script>
