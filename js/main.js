const app = new Vue({
  el: '#app',
  data() {
    return {
      show: false
    }
  },
  created() {
    window.addEventListener("scroll", this.handleScroll)
  },
  methods: {
    toggle: function() {
      this.show = !this.show
    },
    handleScroll() {
      if (!this.show) {
        this.show = window.scrollY > 500;
      } else if (window.scrollY == 0 || window.scrollY > 1000) {
        this.show = !this.show;
      }
    }
  }

})